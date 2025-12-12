<?php
// TODO Ensure responsiveness is looking alright 
// TODO Get selina to have a look over 
// TODO Look into why date is not aligning properly 

$posts = new WP_Query(
    array(
        'posts_per_page' => 3,
        'post_status'    => 'publish',
        'orderby'        => 'date'
    )
);

function readtime(string $content = null)
{

    $word_count       = str_word_count(wp_strip_all_tags($content));
    $words_per_minute = 160;

    return ceil($word_count / $words_per_minute);
}
?>

<style>
    .latest-news {
        --pink: #c60162;
        padding:1rem;
        margin:auto;
    }
    .latest-news h2 {
        text-align:center;
        color:#262626;
        padding-bottom:2rem;
    }

    .latest-news .posts-grid {
        display: grid;
        grid-template-columns: repeat(1, minmax(0, 1fr));
        gap: 1.5rem;
    }

    .latest-news .posts-grid .post {
        background: #fff;
        /* border: 2px solid var(--post-border); */
        border-radius: .5rem;
        box-shadow: 0px 0px 4px 0px rgba(128, 128, 128, 0.49);
        -webkit-box-shadow: 0px 0px 4px 0px rgba(128, 128, 128, 0.49);
        -moz-box-shadow: 0px 0px 4px 0px rgba(128, 128, 128, 0.49);
    }

    .latest-news .posts-grid .post .image-container {
        width: 100%;
        position: relative;
    }

    .latest-news .posts-grid .post .image-container .image {
        width: 100%;
        background: grey;
        /* height: auto; */
        height: 250px;
        /* aspect-ratio: 20/14; */
        /* height:auto; */
        object-fit: cover;
        /* // ! TEMP */
        border-radius: .5rem .5rem 0 0;
    }

    .latest-news .posts-grid .post .image-container .readtime {
        position: absolute;
        bottom: 15px;
        left: 15px;
        background: #fff;
        color: var(--pink);
        padding: 10px 15px;
        border-radius: 2rem;
        display: flex;
        align-items: center;
    }

    .latest-news .posts-grid .post .image-container .readtime svg {
        margin-right: 8px;
    }

    .latest-news .posts-grid .post .image-container .readtime svg path {
        fill: var(--pink);
    }

    .latest-news .posts-grid .post .content {
        padding: 1rem;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .latest-news .posts-grid .post .content .title {
        color: var(--pink);
        font-weight: 600;
        font-size: 1.2rem;
        padding:0 0.2rem;
    }

    .latest-news .posts-grid .post .content .title svg {
        transition: translate .5s;
        padding-left: 0.5rem;
    }

    .latest-news .posts-grid .post .content .title svg path {
        fill: var(--pink);
    }

    .latest-news .posts-grid .post .content:hover .title svg {
        translate: 5px 0;
    }

    .latest-news .posts-grid .post .content .body {
        color:#565555;
    }

    .latest-news .posts-grid .post .content .date-container {
        margin-top:auto;
        justify-self:end;
    }

    .latest-news .posts-grid .post .content .date-container .date {
        color: #ada9a9;
        display: flex;
        align-items: center;
    }

    .latest-news .posts-grid .post .content .date-container .date svg {
        margin-right: 8px;
    }

    .latest-news .posts-grid .post .content .date-container .date svg path {
        fill: #ada9a9;
    }
    @media screen and (min-width: 1024px) {
        .latest-news {
            margin:0 12%;
        }
    }
    @media screen and (min-width: 1235px) {
        .latest-news {
            padding:5rem;
        }
    }
    @media screen and (min-width: 768px) {
        .latest-news .posts-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
        .latest-news {
            /* padding:3rem; */
            padding:3rem unset;
        }
    }
    @media screen and (min-width: 988px) {
        .latest-news .posts-grid {
            grid-template-columns: repeat(3, minmax(0, 1fr));
        }
    }
</style>

<div class="latest-news">
    <h2>Latest news</h2>

    <?php if ($posts->have_posts()) : ?>
        <div class="posts-grid">
            <?php $index = 0; ?>
            <?php while ($posts->have_posts()) : $posts->the_post(); ?>
                <div class="post"><?php $index++; ?>
                    <div class="image-container">

                        <?php if (has_post_thumbnail()) : ?>
                            <img class="image" src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>">
                        <?php else : ?>
                            <div class="image">&nbsp;</div>
                        <?php endif; ?>


                        <span class="readtime">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                            </svg>
                            <?php echo readtime(get_the_content()) . ' Min read'; ?>
                        </span>
                    </div>

                    <a href="<?php the_permalink(); ?>">

                        <div class="content">
                            <p class="title">
                                <?php the_title(); ?>
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                                </svg>
                            </p>

                            <p class="body"><?php echo wp_trim_words(get_the_content(), 25, '...'); ?></p>

                            <div class="date-container">
                                <span class="date">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192H400V448c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V192z" />
                                    </svg>
                                    <?php echo get_the_date('jS \of F Y'); ?>
                                </span>
                            </div>
                        </div>
                    </a>
                    <!-- 
                        img +read time 
                        title
                        body
                        date
                     -->
                </div>
            <?php endwhile; ?>
        </div>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>
</div>