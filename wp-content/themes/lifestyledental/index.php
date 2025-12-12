<?php get_header() ?>

<?php get_template_part('_includes/navigation') ?>

<?php if (have_rows('page_slider')): ?>
    <div class="core__slider">
        <div class="container">
            <div class="wrapper grey-bg">

                <div class="slides">
                    <?php while (have_rows('page_slider')): the_row() ?>

                        <?php if (is_page([8,42,46])): ?>
                            <style type="text/css">
                                @media(min-width: 1200px) {
                                    .core__slider .slider-form .gradient-form {
                                        max-width: 300px;
                                    }
                                }
                            </style>

                            <div class="slide" style="background-image: url('<?php echo content_url( 'uploads/2018/03/team.png' ) ?>'); background-size: auto 480px;">
                                <div class="text pt-lg-5">

                        <?php else: ?>
                            <div class="slide">
                                <div class="text no-img pt-lg-5">
                        <?php endif ?>
                                <h2 class="h1 plain mb-4"><?php the_sub_field('title') ?></h2>

                                <?php the_sub_field('text') ?>

                                <?php if (! is_page([8,42,46])): ?>

                                    <?php get_template_part('_misc/_usp-banner-points') ?>

                                <?php endif ?>
                            </div>
                        </div>
                    <?php endwhile ?>

                    <div class="slider-form">
                        <?php if( get_field('form_to_display') !== 'no-form') : ?>
                            <?php get_template_part('_misc/' . get_field('form_to_display') . '') ?>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif ?>

<?php if ( have_posts() ) : ?>

    <section class="comp__title">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1><?php the_title() ?></h1>
                </div>

                <div class="col-sm-6">
                    <div class="breadcrumbs text-sm-right mt-3 mt-sm-0">
                        <a href="//www.lifestyledental.co.uk/">Home</a> <i class="fa fa-chevron-right"></i> <?php the_title() ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="comp__section">
        <div class="container">

            <div class="row">
                <div class="col-lg-8">
                    <div class="main-body">

                            <?php while ( have_posts() ) : the_post(); ?>

                                <?php the_content() ?>

                            <?php endwhile ?>

                        <?php if (get_field('why_choose_us_toggle')): ?>
                            <?php get_template_part('_components/why-choose-us') ?>
                        <?php endif ?>

                        <?php if (get_field('written_testimonials_toggle')): ?>
                            <?php get_template_part('_components/written-testimonials') ?>
                        <?php endif ?>

                    </div>
                </div>

                <div class="col-lg-4">
                     <?php get_sidebar() ?>
                </div>
            </div>
        </div>
    </section>

<?php else: ?>

    <section class="comp__title">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>404</h1>
                </div>

                <div class="col-sm-6">
                    <div class="breadcrumbs text-sm-right mt-3 mt-sm-0">
                        <a href="<?php echo home_url() ?>">Home</a> <i class="fa fa-chevron-right"></i> 404
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="comp__section">
        <div class="container">

            <div class="row">
                <div class="col-lg-8">
                    <div class="main-body">

                         <p>
                             Sorry, we couldn't find what you were looking for.
                         </p>

                        <?php get_template_part('_components/why-choose-us') ?>

                        <?php get_template_part('_components/written-testimonials') ?>

                    </div>
                </div>

                <div class="col-lg-4">
                    <?php get_sidebar() ?>
                </div>
            </div>
        </div>
    </section>

<?php endif ?>

<?php get_template_part('_components/meet-the-team') ?>

<?php get_footer() ?>
