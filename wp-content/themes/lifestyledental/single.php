<?php get_header() ?>

<?php get_template_part('_includes/navigation') ?>

<?php if ( have_posts() ) : ?>

    <section class="comp__title">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <a class="d-inline-block" href="https://www.lifestyledental.co.uk/blog"><i class="fa fa-chevron-left"></i> Back to blog</a>
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
                <div class="col-xl-9">
                    <div class="main-body blog-post">

                        <h1 class="mb-4"><?php the_title() ?></h1>

                            <?php get_template_part('_components/social-sharing-bar') ?>

                            <?php while ( have_posts() ) : the_post(); ?>

                                <div class="clearfix">

                                    <?php the_content() ?>

                                </div>

                            <?php endwhile ?>

                            <?php get_template_part('_components/social-sharing-bar') ?>

                        <?php if (get_field('why_choose_us_toggle')): ?>
                            <?php get_template_part('_components/why-choose-us') ?>
                        <?php endif ?>

                        <?php if (get_field('written_testimonials_toggle')): ?>
                            <?php get_template_part('_components/written-testimonials') ?>
                        <?php endif ?>

                    </div>
                </div>

                <div class="col-xl-3">
                     <?php get_sidebar('blog') ?>
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
