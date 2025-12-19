<?php get_header(); ?>

<?php get_template_part('_includes/navigation') ?>
<?php if (have_rows('page_slider')): ?>
    <div <?php post_class( 'core__slider' ); ?>>
        <div class="container">
            <?php $fontwhite = ( is_page(26) ? ' style="color: #fff;" ' : ''); ?>

            <div class="wrapper dark-pink-bg" style="background-image: url('<?php the_field('background_image')?>'); background-repeat: no-repeat; background-size: cover; color: #fff;">
                <div class="slides">
                    <?php while (have_rows('page_slider')): the_row() ?>
                            <div class="slide">
                                <div class="text no-img pt-lg-5">
                                <h2 class="h1 plain mb-4" <?php echo $fontwhite ?>><?php the_sub_field('title') ?></h2>

                                <?php the_sub_field('text') ?>
                                <?php get_template_part('_misc/_usp-banner-points') ?>
                            </div>
                        </div>
                    <?php endwhile ?>

                    <div class="slider-form">
						<div class="infusion-form gradient-form">
							<?php echo do_shortcode('[contact-form-7 id="309790f" title="Contact Form"]'); ?>
						</div>
                        <?php //if( get_field('form_to_display') !== 'no-form') : ?>
                            <?php //get_template_part('_misc/' . get_field('form_to_display') . '') ?>
                        <?php //endif ?>
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
                    <h4><?php the_title() ?></h4>
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

                        <div class="alert alert-info">
                            <p>
                                <strong>What we’re doing to help keep you safe</strong>
                            </p>

                            <ul>
                                <li>Going above and beyond our usual high standards of hygiene</li>
                                <li>Introducing additional PPE in line with healthcare guidance</li>
                                <li>Offering video consultations and complete-at-home forms</li>
                                <li>Minimising the number of patients in the practice at any time</li>
                                <li>Regularly cleaning and disinfecting touch points</li>
                            </ul>

                            <a class="btn btn-brand" href="https://www.lifestyledental.co.uk/blog/2020/06/18/5-reasons-you-should-feel-safe-about-coming-to-our-practice/">Find out more about the measures we are taking in our blog post here</a>
                        </div>

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
