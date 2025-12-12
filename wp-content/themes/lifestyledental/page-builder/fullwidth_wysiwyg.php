<?php
$bg_colour = get_sub_field('background_colour');
$text_colour = get_sub_field('text_colour');
$wysiwyg = get_sub_field('wysiwyg');
?>

<div class="container">
    <div class="comp__fullwidth-wysiwyg" style="background-color: <?php echo $bg_colour; ?>; color: <?php echo $text_colour; ?>;">
        <div class="wysiwyg">
            <?php echo wp_kses_post($wysiwyg); ?>
        </div>
    </div>
</div>