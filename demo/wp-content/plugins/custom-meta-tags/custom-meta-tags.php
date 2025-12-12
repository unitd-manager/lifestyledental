<?php
/**
 * Plugin Name: Lifestyle Dental Custom Meta Tags
 * Description: Adds custom meta tags and SEO title for posts and pages.
 * Version: 1.0
 * Author: Deepak Pandian
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Meta fields to use
 */
function lsd_get_meta_tags_list() {
    return array(
        'description'    => 'Description',
        'keywords'       => 'Keywords',
        'robots'         => 'Robots',
        'canonical'      => 'Canonical',
        'og:title'       => 'OG:Title',
        'og:description' => 'OG:Description',
        'og:url'         => 'OG:URL',
        'og:site_name'   => 'OG:Site Name'
    );
}

/**
 * Add meta box to posts/pages
 */
function lsd_add_meta_box() {
    $screens = array('post', 'page');
    foreach ( $screens as $screen ) {
        add_meta_box(
            'lsd_custom_meta_box',
            'Custom Meta Tags',
            'lsd_meta_box_callback',
            $screen,
            'normal',
            'high'
        );
    }
}
add_action('add_meta_boxes', 'lsd_add_meta_box');

/**
 * Meta box HTML
 */
function lsd_meta_box_callback( $post ) {
    wp_nonce_field( basename(__FILE__), 'lsd_custom_meta_nonce' );

    $meta_tags = lsd_get_meta_tags_list();
    $custom_title = get_post_meta($post->ID, '_lsd_custom_title', true);
    ?>
    <p>
        <label for="lsd_custom_title"><strong>Custom Title:</strong></label><br />
        <input style="width:100%;" type="text" id="lsd_custom_title" name="lsd_custom_title" value="<?php echo esc_attr($custom_title); ?>" />
        <em>Leave empty to auto-generate title. Suffix " | Lifestyle Dental Clinic" will be appended automatically.</em>
    </p>
    <hr />
    <?php
    foreach ($meta_tags as $name => $label) {
        $value = get_post_meta($post->ID, '_lsd_meta_' . $name, true);
        ?>
        <p>
            <label for="lsd_meta_<?php echo esc_attr(md5($name)); ?>"><strong><?php echo esc_html($label); ?>:</strong></label><br />
            <input style="width:100%;" type="text" id="lsd_meta_<?php echo esc_attr(md5($name)); ?>" name="lsd_meta_tags[<?php echo esc_attr($name); ?>]" value="<?php echo esc_attr($value); ?>" />
        </p>
        <?php
    }
}

/**
 * Save meta box data
 */
function lsd_save_post_meta($post_id) {
    if (!isset($_POST['lsd_custom_meta_nonce']) || !wp_verify_nonce($_POST['lsd_custom_meta_nonce'], basename(__FILE__))) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;

    // Save title
    if (isset($_POST['lsd_custom_title'])) {
        $title = sanitize_text_field($_POST['lsd_custom_title']);
        if ($title === '') {
            delete_post_meta($post_id, '_lsd_custom_title');
        } else {
            update_post_meta($post_id, '_lsd_custom_title', $title);
        }
    }

    // Save other meta tags
    if (isset($_POST['lsd_meta_tags']) && is_array($_POST['lsd_meta_tags'])) {
        foreach ($_POST['lsd_meta_tags'] as $key => $value) {
            $meta_key = '_lsd_meta_' . $key;
            $value = sanitize_text_field($value);
            if ($value === '') {
                delete_post_meta($post_id, $meta_key);
            } else {
                update_post_meta($post_id, $meta_key, $value);
            }
        }
    }
}
add_action('save_post', 'lsd_save_post_meta');

/**
 * Output meta tags in <head>
 */
function lsd_output_meta_tags() {
    if (!is_singular(array('post', 'page'))) return;

    global $post;
    if (empty($post)) return;

    $custom_title = get_post_meta($post->ID, '_lsd_custom_title', true);
    $final_title = $custom_title ?: get_the_title($post->ID);
    $final_title .= ' | Lifestyle Dental Clinic';

    echo '<title>' . esc_html($final_title) . '</title>' . PHP_EOL;
    echo '<meta name="title" content="' . esc_attr($final_title) . '">' . PHP_EOL;

    $meta_tags = lsd_get_meta_tags_list();
    foreach ($meta_tags as $name => $label) {
        $value = get_post_meta($post->ID, '_lsd_meta_' . $name, true);

        // Defaults
        if ($name === 'description' && empty($value)) {
            $value = has_excerpt($post->ID) ? get_the_excerpt($post->ID) : 'Lifestyle Dental and Implant Clinic – Excellence in dental care in Preston, UK';
        }
        if ($name === 'og:url' && empty($value)) {
            $value = get_permalink($post->ID);
        }
        if ($name === 'og:site_name' && empty($value)) {
            $value = get_bloginfo('name');
        }
        if (empty($value)) continue;

        $attr = strpos($name, 'og:') === 0 ? 'property' : 'name';
        echo '<meta ' . esc_attr($attr) . '="' . esc_attr($name) . '" content="' . esc_attr($value) . '">' . PHP_EOL;
    }
}
add_action('wp_head', 'lsd_output_meta_tags', 1);

/**
 * Remove default WP title tag (so plugin title works)
 */
function lsd_remove_wp_title_tag() {
    remove_action('wp_head', '_wp_render_title_tag', 1);
}
add_action('after_setup_theme', 'lsd_remove_wp_title_tag');
