<?php
$title = get_sub_field('title');
$sub_title = get_sub_field('sub_title');
$grid_items = get_sub_field('grid_items');
?>

<div class="container">
    <div class="comp__feature-grid">
        <?php if ($title) : ?>
            <h2>
                <?php echo esc_html($title); ?>
            </h2>
        <?php endif; ?>

        <?php if ($sub_title) : ?>
            <h4>
                <em><?php echo esc_html($sub_title); ?></em>
            </h4>
        <?php endif; ?>

        <div class="grid">
            <?php foreach ($grid_items as $item) : ?>
                <div class="grid-item">
                    <?php if ($item['icon']) : ?>
                        <img src="<?php echo esc_url($item['icon']['url']); ?>" alt="<?php echo esc_html($item['icon']['title']); ?>">
                    <?php endif; ?>


                    <div>

                        <?php if ($item['title']) : ?>
                            <h3>
                                <?php echo esc_html($item['title']); ?>
                            </h3>
                        <?php endif; ?>

                        <?php if ($item['body']) : ?>
                            <p>
                                <?php echo esc_html($item['body']); ?>
                            </p>
                        <?php endif; ?>

                    </div>

                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>