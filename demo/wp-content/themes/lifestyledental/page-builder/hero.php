<?php
$header = get_sub_field('header');
$body = get_sub_field('body');
?>

<div class="container ">
    <div class="comp__hero-banner">
        <div class="hero-content">
            <h3>
                <i class="fas fa-map-marker-alt"></i> Preston
            </h3>
            <?php if ($header) : ?>
                <h1>
                    <?php echo esc_html($header); ?>
                </h1>
            <?php endif; ?>

            <?php if ($body) : ?>
                <div class="wysiwyg">
                    <?php echo wp_kses_post($body); ?>
                </div>
            <?php endif; ?>

            <?php get_template_part('_components/reviews-widget'); ?>
        </div>
        <div class="hero-form">
            <?php get_template_part('_misc/consultation-form-v2'); ?>
        </div>
    </div>

    <div class="comp__usp-bar">
        <p>
            <i class="fas fa-check-circle"></i> Natural function & appearance
        </p>
        <p>
            <i class="fas fa-check-circle"></i> Improved ability to chew
        </p>
        <p>
            <i class="fas fa-check-circle"></i> Guaranteed for 5 years
        </p>
        <p>
            <i class="fas fa-check-circle"></i> Boosts your confidence to smile
        </p>
    </div>
</div>