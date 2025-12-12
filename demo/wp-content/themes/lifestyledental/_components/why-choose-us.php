<?php if (have_rows('why_choose_us', 'option')): ?>
    <div class="comp__why-choose-us text-center mt-5">
        <h2><?php the_field('why_choose_us_title', 'option') ?></h2>

        <p>
            <?php the_field('why_choose_us_text', 'option') ?>
        </p>

        <div class="row">
            <?php while (have_rows('why_choose_us', 'option')): the_row() ?>
                <div class="col-md-6 col-lg-3">
                    <a href="<?php the_sub_field('page_link') ?>">
                        <img class="img-fluid d-block mx-auto mb-3" src="<?php the_sub_field('icon') ?>">

                        <p class="title"><?php the_sub_field('title') ?></p>

                        <p class="text">
                            <?php the_sub_field('text') ?>
                        </p>
                    </a>
                </div>
            <?php endwhile ?>
        </div>
    </div>
<?php endif ?>