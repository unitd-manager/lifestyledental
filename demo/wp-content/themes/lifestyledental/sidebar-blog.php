<div class="comp__sidebar">

    <div class="widget mb-5">
        <h3 class="mb-3 h5 plain" style="color: #333;">You Might Be Interested In:</h3>

        <?php 

            $category = get_the_category();

            $sub_category = ( $category[1]->term_id != NULL ) ? $category[1]->term_id : $category[0]->term_id;

            //--------------------------------------------------------------
            // This displays 3 published posts that are in a relevant 
            // category to the current post and excludes the current post from the feed
            //--------------------------------------------------------------
            
            $args = array(
                'numberposts' => 3,
                'post_status' => 'publish',
                'category'    => $sub_category,
                'exclude'     => get_the_id()

            );

            $recent_posts = wp_get_recent_posts($args);

        ?>

        <div class="row">
            <?php foreach( $recent_posts as $single_post ): ?>

                <?php

                    $postThumbnail = get_field('post-thumbnail', $single_post['ID']);

                    $postThumbnailImage = 'https://www.lifestyledental.co.uk/wp-content/themes/lifestyledental/dist/img/logo.png';

                    $content = $single_post['post_content'];

                    preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $content, $image);

                    if ($postThumbnail['sizes']['post-thumbnail']) {
                        $postThumbnailImage = $postThumbnail['sizes']['post-thumbnail'];
                    }

                    if ($image['src']) {
                        $postThumbnailImage = $image['src'];
                    }
                
                ?>

                <div class="col-12 col-sm-6 col-md-4 col-xl-12">
                    <a class="d-block mb-3 border pt-3 text-center" href="<?php the_permalink( $single_post['ID'] ) ?>">

                        <img class="img-fluid mb-3" style="max-height: 150px;" src="<?php echo $postThumbnailImage ?>">

                        <strong class="title d-block p-3" style="background-color:#f97740;color:#FFF;"><?php echo $single_post['post_title'] ?></strong>

                    </a>
                </div>

            <?php endforeach ?>
        </div>
    </div>


    <div class="widget">
        
    </div>

    <div class="widget popular-services">
        <p class="purple">
            Popular services
        </p>

        <ul>
            <li>
                <a href="//www.lifestyledental.co.uk/preston-dental-implants-fulwood">Dental Implants</a>
            </li>
            <li>
                <a href="//www.lifestyledental.co.uk/preston-invisible-braces-orthodontists">Braces</a>
            </li>
            <li>
                <a href="//www.lifestyledental.co.uk/preston-dental-sedation">Sedation</a>
            </li>
        </ul>
    </div>
</div>