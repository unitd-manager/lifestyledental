<?php
// Template Name: Implants Landing Page
get_header();
?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=PT+Serif:wght@700&family=Roboto:wght@100;300;400;700&display=swap');

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: 'PT Serif', serif;
        font-weight: 400;
    }

    body {
        font-family: 'Roboto', sans-serif;
    }

    .popup-finance-form.open {
        display: block;
        animation: none !important;
    }

    .popup-finance-form.open .gradient-form {
        display: block;
    }

    @media (min-width: 992px) {
        header {
            display: unset;
        }

        header #top-bars {
            position: sticky;
            top: -38px;
            z-index: 10;
        }
    }

    .award-logos {
        display: none;
    }

    .core__header .mob-toggle {
        display: none;
    }

    .top-bar-1 .container {
        justify-content: center;
    }

    header .container.py-30 {
        padding-top: 10px;
        padding-bottom: 0;
    }

    .core__slider {
        margin-bottom: 1rem;
    }

    .core__slider.big {
        background-color: #eaeaea;
        height: 580px;
        clip-path: polygon(0% 0%, 100% 0%, 100% 93%, 100% 93%, 51% 100%, 0 93%, 0 93%);
        overflow: hidden;
    }

    .core__slider.big .hero-image {
        position: absolute;
        top: 60px;
        height: 520px;
        right: 305px;
    }

    .layer .slides .slide.services {
        background-image: none !important;
    }

    .core__slider .wrapper .gradient-form {
        margin: -32px;
        right: 2rem;
    }

    .core__slider .wrapper {
        background-color: #eaeaea;
    }

    .core__slider.big .wrapper .slide {
        height: 469px;
        padding-top: 2rem;
    }

    .core__slider.big .wrapper .slide h1 {
        margin-bottom: 2rem;
        font-size: 42px;
        font-weight: 700;
    }

    .core__slider.big .wrapper .slide p {
        font-size: 24px;
        margin-bottom: 24px;
        color: #434343;
        font-weight: 300;
        max-width: 540px;
    }

    .core__slider.big .wrapper .slide ul {
        font-size: 20px;
        font-weight: 500;
    }

    .core__slider.big .wrapper .slide ul li {
        margin-bottom: 8px;
    }

    .core__slider.big .wrapper .slide ul .fa-check {
        vertical-align: text-top;
        color: #b40963;
        margin-left: -16px;
    }

    .core__slider .wrapper.grey-bg .text p {
        color: #ffffff;
    }

    .core__slider .reviews-block {
        background-color: #ffffff;
        border-radius: 30px;
        width: 550px;
        padding: 12px;
        display: flex;
        position: relative;
        z-index: 1;
        align-items: center;
        margin-top: 32px;
    }

    .core__slider .reviews-block a {
        color: #434343;
        text-align: center;
        margin: 0 2rem;
        font-size: 18px;
    }

    .core__slider .reviews-block .fa-star {
        color: #FFC000;
        margin: 2px;
    }

    .google-reviews div {
        position: relative;
        margin-bottom: 20px;
    }

    .google-reviews span {
        font-size: 14px;
        font-weight: 100;
        position: absolute;
        top: 5px;
        right: 0;
    }

    .google-reviews a {
        color: #81b4d7;
        font-size: 14px;
    }

    .main-cta {
        color: #fff;
        text-transform: uppercase;
        border-radius: 2rem;
        border: 0;
        padding: 8px 15px;
        font-size: 18px;
        height: 50px !important;
        line-height: 35px;
        overflow: hidden;
    }

    .main-cta .fa-arrow-right {
        transform: translateX(120px);
        transition: all 0.3s ease-in-out;
    }

    .main-cta:hover .fa-arrow-right {
        transform: translateX(20px);
    }

    .main-cta:hover {
        color: #ffffff;
    }

    .guarantee-banner {
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
    }

    .guarantee-banner h2 {
        font-size: 28px;
    }

    .guarantee-banner:before {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        background: rgba(180, 9, 99, 0.6);
    }

    .guarantee-banner .btn.main-cta {
        background-color: #0096ad;
        width: 350px;
        margin-top: 20px;
    }

    .guarantee-banner li {
        margin-bottom: 16px;
        font-size: 18px;
    }

    .guarantee-banner .order-md-last {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .comp__video-testimonials {
        background-color: #d14480;
        color: #ffffff;
    }

    .comp__video-testimonials .col-lg-8 {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: left;
    }

    .google-review-section .slider {
        display: flex;
        overflow-x: auto;
    }

    .google-review-section .slide {
        width: 290px;
        margin-right: 24px;
        flex-shrink: 0;
        margin-bottom: 10px;
    }

    .content-left-media-right h2 {
        font-size: 28px;
        margin-bottom: 24px;
    }

    .content-left-media-right .col-lg-4.d-flex,
    .guarantee-banner .col-lg-4.d-flex {
        align-items: center;
        justify-content: center;
    }

    .content-left-media-right img {
        max-width: 100%;
    }

    .content-left-media-right ul {
        padding-left: 10px;
    }

    .content-left-media-right li {
        list-style: none;
        text-indent: -28px;
        margin-left: 24px;
        line-height: 20px;
        margin-bottom: 20px;
    }

    .content-left-media-right li:before {
        content: "· ";
        font-size: 32px;
        vertical-align: middle;
        margin-right: 10px;
    }

    .location-info {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .location-info h2 {
        margin-bottom: 2rem;
        font-size: 28px;
    }

    @media (min-width: 992px) {
        .content-left-media-right .image-left {
            order: 1;
        }
    }

    .guarantee-banner ul {
        width: 301px;
        width: fit-content;
        margin: 0 auto;
    }

    .content-left-media-right {
        font-size: 18px;
    }

    .comp_testimonial-slider {
        background-color: #d14480;
        color: #ffffff;
        text-align: center;
    }

    .comp_testimonial-slider .stars {
        color: #FFC000;
        margin-bottom: 30px;
    }

    .comp_testimonial-slider .stars .fa-star {
        margin: 2px;
    }

    .comp_testimonial-slider .testimonial {
        margin-bottom: 32px;
    }

    .comp_testimonial-slider .testimonial p {
        line-height: 40px;
        max-width: 888px;
        margin: 6px auto;
    }

    .dot {
        cursor: pointer;
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #b40963;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.2s ease;
    }

    .active,
    .dot:hover {
        background-color: #ffffff;
    }

    .fade {
        animation-name: fade;
        animation-duration: 1.5s;
        animation-fill-mode: forwards;
    }

    @keyframes fade {
        from {
            opacity: .4
        }

        to {
            opacity: 1
        }
    }

    .team-members-container {
        display: flex;
        flex-wrap: wrap;
        gap: 2%;
        justify-content: center;
    }

    .comp__team-members h2 {
        font-size: 28px;
        color: #ea5400;
    }

    .team-members-container a {
        flex: 0 0 23.5%;
        font-size: 18px;
        color: #434343;
    }

    @media (max-width: 767px) {
        .team-members-container a {
            flex: 0 0 32%;
        }
    }

    @media (max-width: 1200px) {


        .core__slider.big .wrapper .slide {
            height: 335px;
            padding-top: 0;
        }

        .core__slider .wrapper .text {
            max-width: unset;
        }

        .core__slider.big {
            height: 500px;
        }

        .core__slider.big .hero-image {
            top: 95px;
        }

        .slider-form .d-xl-none.main-cta {
            width: 450px;
        }

        .core__slider.big .hero-image {
            height: 600px;
            right: 0;
        }

        .core__slider.big .wrapper .slide h1 {
            margin-bottom: 24px;
        }

        .core__slider.big .wrapper .slide p {
            margin-bottom: 20px;
        }


    }

    @media (max-width: 991px) {
        .top-bar-1 {
            display: none;
        }

        .top-bar-2 {
            width: 100%;
        }

        .slider-form {
            text-align: center;
        }

        .guarantee-banner li {
            margin-bottom: 5px;
        }

        .core__slider.big {
            height: 531px;
        }

        .core__slider.big .hero-image {
            height: 600px;
            right: -140px;
        }

        .core__slider .slide {
            text-align: left;
        }

        .slider-form .d-xl-none.main-cta {
            width: 424px;
        }

        .slider-form {
            text-align: left;
        }

        .core__navigation ul.nav-menu>li>a {
            border: none;
        }


        [data-aos-delay] {
            transition-delay: 0s !important;
        }
    }

    @media (max-width: 766px) {

        h1,
        h2,
        h3 {
            font-size: 24px;
        }

        .main-cta {
            width: 100% !important;
            padding: 1rem;
            line-height: 22px;
        }

        .main-cta .fa-arrow-right {
            display: none;
        }

        .guarantee-banner li {
            margin-bottom: 16px;
        }

        .guarantee-banner .btn.main-cta {
            width: 100%;
        }

        .slider-form .d-xl-none.main-cta {
            width: 100%;
        }

        .core__slider.big .hero-image {
            height: 300px;
            right: -42px;
            top: 0;
            z-index: -1;
        }

        .core__slider.big {
            height: 288px;
        }

        .core__slider.big .wrapper .slide {
            height: auto;
        }

        .core__slider.big .wrapper .slide h1 {
            font-size: 32px;
        }

        .core__slider.big .wrapper .slide p {
            font-size: 20px;
            max-width: 70%;
        }


    }

    @media (max-width: 500px) {

        .core__slider.big .hero-image {
            top: -15px;
            height: 300px;
            right: 0;
        }

        .core__slider.big {
            height: 259px;
        }

        .core__slider.big .wrapper .slide h1 {
            max-width: 200px;
        }

        .core__slider.big .wrapper .slide p {
            display: none;
        }

    }

    @media (max-width: 370px) {

        .main-cta {
            font-size: 16px;
        }

    }

    @media (min-width: 992px) {
        .core__slider .wrapper .gradient-form {
            position: absolute;
            top: 3rem;
            right: 1rem;
        }

        .core__slider .wrapper {
            padding: 3rem 0;
        }
    }

    @media (min-width: 1200px) {
        .core__slider.big {
            height: 700px;
        }

        .core__slider.big .hero-image {
            height: 650px;
        }
    }
</style>

<?php if (is_page(4601)) : ?>
    <style>
        .btn.main-cta.orange {
            background-color: #ea5400;
            width: 350px;
            margin-top: 32px;
        }

        .btn.main-cta.pink-white {
            background-color: #FFF;
            color: #b30962;
            border: 2px solid #b30962;
            width: 350px;
            margin-top: 32px;
            padding: 6px 15px;
        }

        h3 {
            font-size: 24px;
        }

        .core__slider.big .wrapper .slide h1 {
            font-size: 36px;
        }

        .core__slider.big .wrapper .slide p {
            font-size: 20px;
        }

        .core__slider.big .wrapper .slide ul {
            margin-left: 15px;
        }

        .core__slider.big .wrapper .slide ul .fa-check {
            margin-right: 15px;
        }

        .top-bar-1 .container {
            justify-content: space-between;
        }

        .top-bar-1 .container a {
            margin: 0;
        }

        .comp__team-members h2 {
            color: #b30962;
            margin-bottom: 24px !important;
        }

        .team-members-container a {
            flex: 0 0 25%;
        }

        .team-members-container a img {
            height: 250px;
            object-fit: cover;
        }

        .award-logos {
            display: block;
        }

        @media (min-width: 992px) {
            .core__slider .wrapper .gradient-form {
                padding: 1rem 1.5rem;
                top: 4rem;
            }

            .content-left-media-right .col-12.col-lg-4.mt-3.mt-lg-0 {
                display: flex;
                align-items: center;
            }
        }

        @media (min-width: 1200px) {
            .core__header .container {
                padding-right: 0;
            }
        }

        @media (max-width: 767px) {
            .guarantee-banner ul {
                margin-left: 2rem;
            }

            .team-members-container {
                gap: 5%;
            }

            .team-members-container a {
                flex: 0 0 47.5%;
            }
        }

        @media (max-width: 766px) {
            .core__slider.big {
                height: 390px;
            }

            .core__slider.big .hero-image {
                top: 75px;
            }
        }
    </style>

<?php endif; ?>

<?php if (have_rows('flexible_content')) : ?>
    <?php while (have_rows('flexible_content')) : the_row(); ?>

        <?php if (get_row_layout() == 'hero_banner') :
            $header                = get_sub_field('header');
            $sub_header           = get_sub_field('sub_header');
            $image               = get_sub_field('image'); ?>

            <div class="core__slider big mb-0">
                <div class="container">
                    <div class="wrapper no-arrow">
                        <div class="layer">
                            <div class="slides">
                                <div class="slide services">
                                    <div class="text">
                                        <?php if ($header) : ?>
                                            <h1>
                                                <?php echo esc_html($header); ?>
                                            </h1>
                                        <?php endif; ?>

                                        <?php if ($sub_header) : ?>
                                            <p>
                                                <?php echo wp_kses_post($sub_header); ?>
                                            </p>
                                        <?php endif; ?>

                                        <div class="reviews-block d-none d-xl-flex">
                                            <a href="https://www.google.com/search?q=lifestyle+dental+practice&oq=lifestyle+dental+practice#lrd=0x487b7201a5d18db7:0x80ccbcf6f6f638f0,1,,," target="_blank" class="d-flex align-items-center">
                                                <img src="https://www.lifestyledental.co.uk/wp-content/uploads/2022/07/reviews_icon.png" alt="" width="40px" style="margin-right: 6px;"> Google Reviews
                                            </a>
                                            <a href="https://www.google.com/search?q=lifestyle+dental+practice&oq=lifestyle+dental+practice#lrd=0x487b7201a5d18db7:0x80ccbcf6f6f638f0,1,,," target="_blank">
                                                <div class="stars">
                                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                                </div>
                                                <span>
                                                    4.9 Stars | 152 reviews
                                                </span>
                                            </a>
                                        </div>

                                    </div>


                                    <img width="auto" src="<?php echo esc_url($image['url']); ?>" alt="" class="hero-image">
                                </div>
                            </div>

                            <div class="slider-form">
								<?php //get_template_part('_misc/consultation-form'); ?>
								<div class="infusion-form gradient-form">
									<?php echo do_shortcode('[contact-form-7 id="309790f" title="Contact Form"]'); ?>
								</div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>


        <?php elseif (get_row_layout() == 'image_content') :
            $header                = get_sub_field('header');
            $main_content       = get_sub_field('main_content');
            $bg_color           = get_sub_field('background_colour');
            $image               = get_sub_field('image');
            $image_position     = get_sub_field('image_position');
            $header_color       = get_sub_field('header_colour'); ?>

            <section class="content-left-media-right standard" style="background-color: <?php echo esc_html($bg_color); ?>;" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                <div class="container py-5">
                    <div class="row pb-lg-4">
                        <div class="col-12 col-lg-8 <?php echo ($image_position == 'image_left') ? 'image-left' : ''; ?>">

                            <?php if ($header) : ?>
                                <h2 style="color: <?php echo $header_color; ?>">
                                    <?php echo esc_html($header); ?>
                                </h2>
                            <?php endif; ?>

                            <?php if ($main_content) : ?>
                                <p>
                                    <?php echo wp_kses_post($main_content); ?>
                                </p>
                            <?php endif; ?>

                        </div>

                        <?php if ($image) : ?>
                            <div class="col-12 col-lg-4 mt-3 mt-lg-0">
                                <img width="auto" src="<?php echo esc_url($image['url']); ?>" alt="">
                            </div>
                        <?php endif; ?>

                    </div>
                </div>
            </section>

        <?php elseif (get_row_layout() == 'guarantee_banner') :
            $header      = get_sub_field('header');
            $image      = get_sub_field('image');
            $bg_image      = get_sub_field('background_image');
            $bg_color      = get_sub_field('background_color'); ?>

            <style>
                .guarantee-banner.plain-background:before {
                    content: none;
                }
            </style>

            <section class="guarantee-banner <?php echo ($image == '') ? '' : 'plain-background'; ?>" style="<?php echo (!empty($image)) ? 'background-color:' . esc_html($bg_color) . ';' : 'background-image: url(' . esc_url($bg_image['url']) . ');'; ?>">
                <div class="container py-5">
                    <div class="row <?php echo ($image == '') ? 'centered-content' : ''; ?>">
                        <div class="col-12 col-lg-8 inverted <?php echo ($image == '') ? 'col-lg-12 text-center' : ''; ?>">
                            <?php if ($header) : ?>
                                <h2 class="inverted ">
                                    <?php echo esc_html($header); ?>
                                </h2>
                            <?php endif; ?>
                            <ul class="fa-ul text-left my-4">
                                <?php while (have_rows('bullets')) : the_row(); ?>
                                    <li>
                                        <span class="fa-li"><i class="fas fa-check"></i></span> <?php echo get_sub_field('bullet_point'); ?>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                            <?php $link = get_sub_field('link');
                            if ($link) :
                                $link_url = $link['url'];
                                $link_title = $link['title']; ?>

                                <a href="<?php echo esc_url($link_url); ?>" class="btn main-cta mt-3"><?php echo esc_html($link_title); ?><i class="fas fa-arrow-right"></i></a>
                            <?php endif; ?>
                        </div>

                        <div class="col-12 col-lg-4 d-flex">
                            <img width="auto" src="<?php echo esc_url($image['url']); ?>" alt="">
                        </div>

                    </div>
                    <?php if (is_page(4601)) : ?>
                        <div class="text-center" style="position: relative; margin-top: -24px;">
                            <a href="https://onlineappointment.carestack.uk/?dn=lifestyledental&ln=1#/home" class="btn main-cta orange">
                                Arrange my consultation<i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </section>


        <?php elseif (get_row_layout() == 'video_testimonials') :
            $display_video  = get_sub_field('display_video'); ?>

            <?php if ($display_video == 'yes') : ?>
                <div class="comp__video-testimonials">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-4  mb-4 mb-lg-5">
                                <lite-youtube videoid="eAbMEdqiAfc" style="width:100%;" height="170"></lite-youtube>
                            </div>

                            <div class="col-12 col-lg-8 mb-4 mb-lg-5">
                                <p>
                                    "I have to say it's been a fantastic process, the staff have been great. Customer service is first-class, and make you feel lovely and welcome.
                                </p>
                                <p class="mb-0">
                                    The process itself for the Implant was exceptionally painless. I think that the guys here do as much as they can to take the pain and the difficulty of the process."
                                </p>
                            </div>

                            <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                                <lite-youtube videoid="8uo-BW7zKps" style="width:100%;" height="170"></lite-youtube>
                            </div>

                            <div class="col-12 col-lg-8">
                                <p>
                                    "They give you a thorough examination, loads of pictures, get you at ease, got me in and had the implant. I didn't even know he had done it, there was no pain.
                                </p>
                                <p class="mb-0">
                                    So I thought that was excellent."
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

            <?php endif; ?>

        <?php elseif (get_row_layout() == 'location_block') :  ?>

            <?php if (is_page(4601)) : ?>

                <style>
                    .contact-form-banner {
                        background-color: #0096ad;
                        color: #ffffff;
                        overflow: hidden;
                    }

                    .contact-form-banner .container {
                        position: relative;
                    }

                    .contact-form-banner p {
                        max-width: 650px;
                        font-size: 18px;
                        line-height: 1.39;
                        margin-bottom: 32px;
                    }

                    .contact-form-banner p span {
                        font-weight: 300;
                    }

                    .contact-form-banner form {
                        max-width: 704px;
                    }

                    .contact-form-banner label {
                        width: 100px;
                    }

                    .contact-form-banner form input {
                        width: 600px;
                        border-radius: 5px;
                        border: 1px solid #0096ad;
                        padding: 0 15px;
                        margin-bottom: 8px;
                        height: 48px;
                    }

                    .contact-form-banner form .main-cta {
                        background-color: #b40963;
                        border-radius: 2rem;
                        margin-left: 103px;
                        width: 600px;
                    }

                    .contact-form-banner form .main-cta .fa-arrow-right {
                        transform: translateX(275px);
                        opacity: 0;
                    }

                    .contact-form-banner form .main-cta:hover .fa-arrow-right {
                        transform: translateX(20px);
                        opacity: 1;
                    }

                    .contact-form-banner form a {
                        font-size: 14px;
                        font-weight: 100;
                        text-decoration: underline;
                        color: #ffffff;
                        float: right;
                        margin-top: 5px;
                    }

                    .contact-form-banner img {
                        position: absolute;
                        bottom: 0;
                        right: -32px;
                    }

                    .contact-form-banner.parallax2 {
                        background-image: url(https://www.lifestyledental.co.uk/wp-content/uploads/2021/04/Finance.png);
                        background-repeat: no-repeat;
                        background-position-x: 90%;
                        background-position-y: 100%;
                    }

                    @media (max-width: 1200px) {

                        .contact-form-banner form input,
                        .contact-form-banner form .main-cta {
                            width: 300px;
                        }

                        .contact-form-banner p {
                            width: 500px;
                        }

                        .contact-form-banner form a {
                            position: absolute;
                            left: 262px;
                            bottom: 20px;
                        }

                        .contact-form-banner img {
                            right: 0;
                        }

                        .contact-form-banner.parallax2 {
                            background-position-x: 84%;
                        }

                    }

                    @media (max-width: 991px) {

                        .contact-form-banner img {
                            right: -150px;
                        }

                        .contact-form-banner.parallax2 {
                            background-position-x: 115%;
                        }

                    }

                    @media (max-width: 766px) {

                        .contact-form-banner.parallax2 {
                            background-image: none;
                        }

                    }

                    @media (max-width: 500px) {

                        .contact-form-banner form input {
                            width: 100%;
                        }

                        .contact-form-banner p {
                            width: 100%;
                        }

                        .contact-form-banner form .main-cta {
                            margin-left: 0;
                            margin-top: 16px;
                        }

                        .contact-form-banner form a {
                            position: absolute;
                            left: unset;
                            right: 15px;
                            bottom: 20px;
                        }

                    }
                </style>
                <?php get_template_part('_components/footer-finance-form'); ?>
            <?php endif; ?>

            <div class="container py-5">
                <div class="row py-0 py-lg-4">
                    <div class="col-12 col-lg-4 location-info">
                        <h2>
                            Where to find us
                        </h2>
                        <p>
                            Lifestyle Dental
                        </p>
                        <p>
                            284 Garstang Road, Suite E
                        </p>
                        <p>
                            Preston
                        </p>
                        <p>
                            PR2 9RX
                        </p>
                    </div>
                    <div class="col-12 col-lg-8">
                        <iframe class="fullwidth" src="//maps.google.co.uk/maps?f=q&amp;hl=en&amp;geocode=&amp;q=Unit+E,+284+Garstang+Road,+Preston,+Fulwood,+PR2+9RX&amp;sll=53.800651,-4.064941&amp;sspn=9.144103,19.160156&amp;ie=UTF8&amp;s=AARTsJq8trcJTf5rzmgPQNm5Z3TtB8_Oag&amp;ei=ve2pSuaLG5SqvAOeubCuDA&amp;cd=7&amp;cid=14170350594836348545&amp;li=lmd&amp;ll=53.792223,-2.71313&amp;spn=0.004436,0.012875&amp;z=16&amp;output=embed" width="100%" height="350" frameborder="0" marginwidth="0" marginheight="0" scrolling="no">
                        </iframe>
                    </div>
                </div>
            </div>

        <?php elseif (get_row_layout() == 'testimonial_slider') :
            $testimonials  = get_sub_field('testimonials'); ?>

            <div class="comp_testimonial-slider">
                <div class="container py-5">

                    <?php foreach ($testimonials as $testimonial) : ?>
                        <div class="testimonial fade">
                            <div class="stars">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <?php echo wp_kses_post($testimonial['testimonial']); ?>
                        </div>
                    <?php endforeach; ?>

                    <?php if (count($testimonials) > 1) : ?>
                        <div style="text-align:center">
                            <?php $counter = 1; ?>
                            <?php foreach ($testimonials as $testimonial) : ?>
                                <span class="dot" onclick="currentSlide(<?php echo $counter; ?>)"></span>
                                <?php $counter++; ?>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <script>
                let slideIndex = 1;
                showSlides(slideIndex);

                function plusSlides(n) {
                    showSlides(slideIndex += n);
                }

                function currentSlide(n) {
                    showSlides(slideIndex = n);
                }

                function showSlides(n) {
                    let i;
                    let slides = document.getElementsByClassName("testimonial");
                    let dots = document.getElementsByClassName("dot");
                    if (n > slides.length) {
                        slideIndex = 1
                    }
                    if (n < 1) {
                        slideIndex = slides.length
                    }
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
                    }
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                    }
                    slides[slideIndex - 1].style.display = "block";
                    dots[slideIndex - 1].className += " active";
                }
            </script>

        <?php elseif (get_row_layout() == 'team_block') :
            $team_members  = get_sub_field('team_members');
            $header        = get_sub_field('header'); ?>

            <div class="comp__team-members py-5">
                <div class="container">
                    <?php if ($header) : ?>
                        <h2 class="text-center mt-2 mb-5">
                            <?php echo esc_html($header); ?>
                        </h2>
                    <?php endif; ?>

                    <?php if (is_page(4601)) : ?>
                        <p style="max-width: 810px; margin: 0 auto 32px; text-align: center; font-size: 18px; color: #000;">
                            Our Smile in a Day team is a carefully selected group of experienced professionals, each dedicated to providing you with the best possible care.
                        </p>
                    <?php endif; ?>

                    <div class="team-members-container mb-0 mb-lg-5">
                        <?php foreach ($team_members as $member) : ?>
                            <a href="<?php echo esc_url($member['link']); ?>">
                                <img width="auto" src="<?php echo esc_url($member['image']['url']); ?>" alt="<?php echo esc_html($member['name']) ?>" class="w-100 mb-2">
                                <h4>
                                    <?php echo esc_html($member['name']) ?>
                                </h4>
                                <?php if ($member['bio']) : ?>
                                    <p>
                                        <?php echo esc_html($member['bio']) ?>
                                    </p>
                                <?php endif; ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

        <?php elseif (get_row_layout() == 'banner_image') :
            $header        = get_sub_field('header');
            $body          = get_sub_field('body');
            $link          = get_sub_field('link');
            $bg_color      = get_sub_field('background_colour');
            $image         = get_sub_field('image'); ?>

            <style>
                .comp__banner-image h2 {
                    font-size: 32px;
                    margin-bottom: 2rem;
                    color: #ffffff;
                }

                .comp__banner-image p {
                    font-size: 18px;
                    margin-bottom: 2.5rem;
                }

                .comp__banner-image .btn.main-cta {
                    background-color: #b40963;
                    width: 350px;
                }
            </style>

            <div class="py-5 pb-md-0 pt-md-2 comp__banner-image" style="background-color: <?php print $bg_color; ?>;">
                <div class="container text-white">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-8 d-flex flex-column justify-content-center align-items-baseline">
                            <?php if ($header) : ?>
                                <h2>
                                    <?php echo esc_html($header); ?>
                                </h2>
                            <?php endif; ?>
                            <?php if ($body) : ?>
                                <p>
                                    <?php echo esc_html($body); ?>
                                </p>
                            <?php endif; ?>
                            <?php if ($link) :
                                $link_url = $link['url'];
                                $link_title = $link['title']; ?>

                                <a href="<?php echo esc_url($link_url); ?>" class="btn main-cta"><?php echo esc_html($link_title); ?><i class="fas fa-arrow-right"></i></a>
                            <?php endif; ?>
                        </div>
                        <?php if ($image) : ?>
                            <div class="d-none d-md-block col-md-6 col-lg-4">
                                <img width="auto" src="<?php echo esc_url($image['url']); ?>" class="w-100">
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        <?php elseif (get_row_layout() == 'before_after') : ?>

            <style>
                .comp__before-after {
                    padding-top: 5rem;
                    padding-bottom: 5rem;
                }

                .comp__before-after .row {
                    max-width: 1000px;
                    margin: auto;
                }

                @media (min-width: 1200px) {
                    .comp__before-after .row>.col-md-6:first-of-type {
                        max-width: 48%;
                    }

                    .comp__before-after .row>.col-md-6:first-of-type:after {
                        content: '\2794';
                        position: absolute;
                        font-size: 32px;
                        top: 75px;
                        right: -38px;
                        color: #b30962;

                    }

                    .comp__before-after .row>.col-md-6:last-of-type {
                        max-width: 48%;
                        margin-left: 4%;
                    }
                }
            </style>

            <div class="comp__before-after container">
                <div class="text-center">
                    <h2 class="mb-4">
                        Before and after results
                    </h2>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <img src="https://www.lifestyledental.co.uk/wp-content/uploads/2023/07/All4_before-1.jpg" alt="before" class="mb-2 w-100">
                        <h5 class="text-body mb-4">
                            Before
                        </h5>
                    </div>
                    <div class="col-12 col-md-6">
                        <img src="https://www.lifestyledental.co.uk/wp-content/uploads/2023/07/All4_after-1.jpg" alt="after" class="mb-2 w-100">
                        <h5 class="mb-4">
                            After
                        </h5>
                    </div>
                </div>
            </div>

        <?php elseif (get_row_layout() == 'google_reviews') :
            $reviews_option  = get_sub_field('reviews_option'); ?>

            <?php if ($reviews_option == 'standard') : ?>

                <section class="google-review-section mt-4">
                    <div class="container pt-5 d-none d-lg-block">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-4 google-reviews">
                                <div>
                                    <a href="https://www.google.com/search?q=lifestyle+dental+practice&oq=lifestyle+dental+practice#lrd=0x487b7201a5d18db7:0x80ccbcf6f6f638f0,1,,," target="_blank">
                                        <img src="https://www.lifestyledental.co.uk/wp-content/uploads/2021/04/google-stars.png" alt="">
                                    </a>
                                    <span>
                                        Mar 1, 2021
                                    </span>
                                </div>
                                As always superb treatment from Jade. I have been with the practice for 10ish years. Couldn’t want better treatment. xx
                            </div>
                            <div class="d-none d-md-block col-md-6 col-lg-4 google-reviews">
                                <div>
                                    <a href="https://www.google.com/search?q=lifestyle+dental+practice&oq=lifestyle+dental+practice#lrd=0x487b7201a5d18db7:0x80ccbcf6f6f638f0,1,,," target="_blank">
                                        <img src="https://www.lifestyledental.co.uk/wp-content/uploads/2021/04/google-stars.png" alt="">
                                    </a>
                                    <span>
                                        Aug 10, 2020
                                    </span>
                                </div>
                                I have always received excellent care from Nadim and his team at Lifestyle Dental for several years now. I was a nervous patient when I first attended but was Immediately put at ease.</a>
                            </div>
                            <div class="d-none d-lg-block col-lg-4 google-reviews">
                                <div>
                                    <a href="https://www.google.com/search?q=lifestyle+dental+practice&oq=lifestyle+dental+practice#lrd=0x487b7201a5d18db7:0x80ccbcf6f6f638f0,1,,," target="_blank">
                                        <img src="https://www.lifestyledental.co.uk/wp-content/uploads/2021/04/google-stars.png" alt="">
                                    </a>
                                    <span>
                                        June 21, 2020
                                    </span>
                                </div>
                                When it comes to Dental Treatment I’ve never been pushing myself to be first in the Queue. However, I could not recommend Nadim & the Team enough, they have always gone out of their way to explain procedures, making sure my anxiety Is reduced.
                            </div>
                        </div>
                    </div>
                    <div class="container py-4 d-lg-none">
                        <div class="slider">
                            <div class="slide google-reviews">
                                <div>
                                    <a href="https://www.google.com/search?q=lifestyle+dental+practice&oq=lifestyle+dental+practice#lrd=0x487b7201a5d18db7:0x80ccbcf6f6f638f0,1,,," target="_blank">
                                        <img src="https://www.lifestyledental.co.uk/wp-content/uploads/2021/04/google-stars.png" alt="">
                                    </a>
                                    <span>
                                        Mar 1, 2021
                                    </span>
                                </div>
                                As always superb treatment from Jade. I have been with the practice for 10ish years. Couldn’t want better treatment. xx
                            </div>
                            <div class="slide google-reviews">
                                <div>
                                    <a href="https://www.google.com/search?q=lifestyle+dental+practice&oq=lifestyle+dental+practice#lrd=0x487b7201a5d18db7:0x80ccbcf6f6f638f0,1,,," target="_blank">
                                        <img src="https://www.lifestyledental.co.uk/wp-content/uploads/2021/04/google-stars.png" alt="">
                                    </a>
                                    <span>
                                        Aug 10, 2020
                                    </span>
                                </div>
                                I have always received excellent care from Nadim and his team at Lifestyle Dental for several years now. I was a nervous patient when I first attended but was Immediately put at ease.</a>
                            </div>
                            <div class="slide google-reviews">
                                <div>
                                    <a href="https://www.google.com/search?q=lifestyle+dental+practice&oq=lifestyle+dental+practice#lrd=0x487b7201a5d18db7:0x80ccbcf6f6f638f0,1,,," target="_blank">
                                        <img src="https://www.lifestyledental.co.uk/wp-content/uploads/2021/04/google-stars.png" alt="">
                                    </a>
                                    <span>
                                        June 21, 2020
                                    </span>
                                </div>
                                When it comes to Dental Treatment I’ve never been pushing myself to be first in the Queue. However, I could not recommend Nadim & the Team enough, they have always gone out of their way to explain procedures, making sure my anxiety Is reduced.
                            </div>
                        </div>
                    </div>
                    <div class="text-center mb-4">
                        <a href="https://www.google.com/search?q=lifestyle+dental+practice&oq=lifestyle+dental+practice#lrd=0x487b7201a5d18db7:0x80ccbcf6f6f638f0,1,,," target="_blank">View Google Reviews</a>
                    </div>
                </section>

            <?php endif; ?>

            <?php if ($reviews_option == 'custom') : ?>

                <section class="google-review-section">
                    <div class="container pt-5 d-none d-lg-block">
                        <div class="row">
                            <?php while (have_rows('google_reviews')) : the_row(); ?>
                                <div class="col-12 col-md-6 col-lg-4 google-reviews">
                                    <div>
                                        <a href="https://www.lifestyledental.co.uk/dental-practice-reviews/">
                                            <img src="https://www.lifestyledental.co.uk/wp-content/uploads/2021/04/google-stars.png" alt="">
                                        </a>
                                        <span>
                                            <?php echo get_sub_field('date'); ?>
                                        </span>
                                    </div>
                                    <?php echo get_sub_field('review'); ?>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>


                    <div class="container py-4 d-lg-none">
                        <div class="slider">
                            <?php while (have_rows('google_reviews')) : the_row(); ?>
                                <div class="slide google-reviews">
                                    <div>
                                        <a>
                                            <img src="https://www.lifestyledental.co.uk/wp-content/uploads/2021/04/google-stars.png" alt="">
                                        </a>
                                        <span>
                                            <?php echo get_sub_field('date'); ?>
                                        </span>
                                    </div>
                                    <?php echo get_sub_field('review'); ?>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                    <div class="text-center mb-4">
                        <a href="https://www.google.com/search?q=lifestyle+dental+practice&oq=lifestyle+dental+practice#lrd=0x487b7201a5d18db7:0x80ccbcf6f6f638f0,1,,," target="_blank">View Google Reviews</a>
                    </div>
                </section>

            <?php endif; ?>

        <?php endif; ?>

    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>