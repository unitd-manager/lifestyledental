<?php get_header() ?>

<?php get_template_part('_includes/navigation') ?>

<?php if ( have_posts() ) : ?>

    <!--section class="comp__title">
        <div class="container">
            <div class="breadcrumbs mt-3 mt-sm-0">
                <a href="//www.lifestyledental.co.uk/">Home</a> <i class="fa fa-chevron-right"></i> Blog
            </div>
        </div>
    </section-->

    <section class="comp__section">
        <div class="container">
            <div class="main-body">

                    <h1 class="mb-5">Blog</h1>

                    <div class="row">
                        <?php while ( have_posts() ) : the_post(); ?>

                            <?php

                                //$postThumbnail = get_field('post-thumbnail', get_the_ID());
                                $postThumbnail = get_the_post_thumbnail_url( get_the_ID(), 'medium_large' );

                                $postThumbnailImage = 'https://www.lifestyledental.co.uk/wp-content/themes/lifestyledental/dist/img/logo.png';

                                preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', get_the_content(), $image);

                                if ($postThumbnail) {
                                    $postThumbnailImage = $postThumbnail;
                                } else if ($image['src']) {
                                    $postThumbnailImage = $image['src'];
                                }

                                /**
                                 * WHO DID THIS?! This would have taken the body image by default every single time.
                                 */

                                // if ($image['src']) {
                                //     $postThumbnailImage = $image['src'];
                                // }

                            ?>

                            <div class="col-12">
                                <div class="blog-post mb-5">

                                    <div class="row align-items-md-center">
                                        <div class="col-12 col-md-4 order-2">
                                            <a class="d-block" href="<?php the_permalink() ?>">
                                                <?php /*
                                                <div style="width: 300px;height:250px;background: url('<?php echo $postThumbnailImage ?>') no-repeat center center">
                                                    <img src="<?php echo $postThumbnailImage ?>" alt="" class="d-none">
                                                </div>
                                                */ ?>

                                                <img src="<?php echo $postThumbnailImage ?>" style="width: 300px; height: 250px; object-fit: cover; object-position: top center;">
                                            </a>
                                        </div>

                                        <div class="col-12 col-md-8 order-1">
                                            <h2 class="mb-3"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>

                                            <time class="d-block mb-3">
                                                <?php the_date() ?>
                                            </time>

                                            <div class="mb-4">
                                                <?php the_excerpt() ?>
                                            </div>

                                            <a class="btn btn-brand" href="<?php the_permalink() ?>">Read the full article</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php endwhile ?>
                    </div>

                    <div class="text-center border-top border-bottom py-3">
                        <?php posts_nav_link() ?>
                    </div>

                <?php if (get_field('why_choose_us_toggle')): ?>
                    <?php get_template_part('_components/why-choose-us') ?>
                <?php endif ?>

                <?php if (get_field('written_testimonials_toggle')): ?>
                    <?php get_template_part('_components/written-testimonials') ?>
                <?php endif ?>

            </div>
        </div>
    </section>

<?php else: ?>

    <!--section class="comp__title">
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
    </section-->

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
