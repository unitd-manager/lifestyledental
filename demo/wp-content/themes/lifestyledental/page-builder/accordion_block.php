<?php
$header = get_sub_field('header');
$sub_header = get_sub_field('sub_header');
$accordion = get_sub_field('accordion');
$image = get_sub_field('image');
?>

<div class="container">
    <div class="comp__accordion-block <?php echo ($image) ? '' : 'fullwidth' ?>">
        <div class="accordion-content">
            <?php if ($header) : ?>
                <h2>
                    <?php echo esc_html($header); ?>
                </h2>
            <?php endif; ?>


            <?php if ($sub_header) : ?>
                <h4>
                    <em><?php echo esc_html($sub_header); ?></em>
                </h4>
            <?php endif; ?>

            <?php foreach ($accordion as $item) : ?>

                <p class="accordion-tab">
                    <?php echo esc_html($item['question']); ?>
                </p>
                <div class="panel">
                    <?php echo wp_kses_post($item['answer']); ?>
                </div>

            <?php endforeach; ?>
        </div>

        <?php if ($image) : ?>
            <div class="accordion-image">
                <img src="<?php echo esc_url($image['url']) ?>" alt="<?php echo esc_html($image['title']) ?>">
            </div>
        <?php endif; ?>
    </div>
</div>