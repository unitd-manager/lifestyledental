<?php
    // Template Name: Specials
    get_header(); 
?>
    <link rel="stylesheet" href="<?php print get_template_directory_uri() ?>/dist/offers/app.css">
    <style>
        .core__footer .comp__footer-cards {
            display: none;
        }
    </style>

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
                        <?php if( get_field('form_to_display') !== 'no-form') : ?>
                            <?php get_template_part('_misc/' . get_field('form_to_display') . '') ?>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php endif ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="offers">
                    <div class="offers__offer">
                        <div class="offers__offer__body">

                            <h2 class="offers__offer__body__header text-yellow">
                                FREE LIFESTYLE<br />
                                <strong>COMPLIMENTARY CONSULTATION</strong>
                            </h2>

                            <img src="<?php print get_template_directory_uri() ?>/dist/offers/img/free-examination.jpg" alt="">

                            <p class="text-yellow uppercase">
                                Includes
                            </p>

                            <ul>
                                <li>Pre-assessment to determine your needs</li>
                                <li>Discussion of your current situation and your desired goals</li>
                                <li>Thorough assessment of the mouth and the teeth</li>
                                <li>Relevant before and after pictures</li>
                                <li>Introduction to the staff and a tour of the practice. <br />This is especially helpful for nervous patients.</li>
                            </ul>

                            <p>
                                <a href="#bottom" class="offers__offer__body__button bg-yellow">
                                    Get the offer
                                </a>
                            </p>

                        </div>
                        <div class="offers__offer__img">
                            <img src="<?php print get_template_directory_uri() ?>/dist/offers/img/free-examination.jpg" alt="">
                        </div>
                    </div>

                    <div class="offers__offer">
                        <div class="offers__offer__body">

                            <h2 class="offers__offer__body__header text-grey">
                                HALF PRICE LIFESTYLE LIGHT<br />
                                <strong>WHITENING SOLUTIONS ONLY <u>&pound;350</u></strong>
                            </h2>

                            <img src="<?php print get_template_directory_uri() ?>/dist/offers/img/light-whitening.jpg" alt="">

                            <p class="text-grey uppercase">
                                Includes
                            </p>

                            <ul>
                                <li>Brighter whiter teeth within an hour</li>
                                <li>Pre-assessment to tailor the tooth whitening solution to your needs</li>
                                <li>A bespoke kit to take home that enables you to maintain whiter teeth for longer</li>
                            </ul>

                            <p>
                                <a href="#bottom" class="offers__offer__body__button bg-grey">
                                    Get the offer
                                </a>
                            </p>
                        </div>
                        <div class="offers__offer__img">
                            <img src="<?php print get_template_directory_uri() ?>/dist/offers/img/light-whitening.jpg" alt="">
                        </div>
                    </div>
                </div>

                
                <div class="our-promise">
                    <h2 class="text-pink">
                        Our promise to you
                    </h2>

                    <p>
                    Here at Lifestyle Dental, we pride ourselves in offering a gold standard treatment, helping our patients achieve their dream smile and the ability to eat without having to worry. We are always here to help!
                    </p>

                    <p>
                        <a href="https://www.lifestyledental.co.uk/dental-practice-reviews/" class="text-pink">Not sure if this is for you? Take a look at what our patients have to say.</a>
                    </p>
                </div>

                <div class="offers">
                    <div class="offers__offer">
                        <div class="offers__offer__body">

                            <h2 class="offers__offer__body__header text-purple">
                                LIFESTYLE EMERGENCY CARE<br />
                                <strong>FOR JUST <u>&pound;126</u></strong>
                            </h2>

                            <img src="<?php print get_template_directory_uri() ?>/dist/offers/img/broken-tooth.jpg" alt="">

                            <p class="text-purple uppercase">
                                Includes
                            </p>

                            <ul>
                                <li>Dental X-Rays</li>
                                <li>Antibiotics</li>
                                <li>Extraction</li>
                                <li>White Fillings</li>
                                <li>A review of work (if required)</li>
                                <li>We will do our best to get you out of pain that same day</li>

                            </ul>

                            <p>
                                <a href="#bottom" class="offers__offer__body__button bg-purple">
                                    Get the offer
                                </a>
                            </p>

                        </div>
                        <div class="offers__offer__img">
                            <img src="<?php print get_template_directory_uri() ?>/dist/offers/img/broken-tooth.jpg" alt="">
                        </div>
                    </div>

                    <div class="offers__offer">
                        <div class="offers__offer__body">

                            <h2 class="offers__offer__body__header text-teal">
                                THE LIFESTYLE DENTAL<br />
                                <strong>HOME WHITENING SOLUTIONS <br />ONLY <u>&pound;205</u></strong>
                            </h2>

                            <img src="<?php print get_template_directory_uri() ?>/dist/offers/img/home-whitening.jpg" alt="">

                            <p class="text-teal uppercase">
                                Includes
                            </p>

                            <ul>
                                <li>Whitening assessment to check eligibility</li>
                                <li>Tailor-made trays for both the upper and lower teeth</li>
                                <li>4 syringes of teeth whitening gel</li>
                                <li>Review after 2 weeks</li>
                            </ul>

                            <p>
                                <a href="#bottom" class="offers__offer__body__button bg-teal">
                                    Get the offer
                                </a>
                            </p>
                        </div>
                        <div class="offers__offer__img">
                            <img src="<?php print get_template_directory_uri() ?>/dist/offers/img/home-whitening.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div id="bottom"></div>
    <div class="offer-form">
        <div class="container">
            <div class="row">
                <div class="col">

                    <h2>1. Select your offer</h2>

                    <div class="offer-form__options">
                        <label class="offer-form__options__option">
                            <div class="offer-form__options__option__input">
                                <input type="radio" name="offer">
                            </div>
                            <div class="offer-form__options__option__label">
                                Free Complimentary <br />Consultation
                            </div>
                        </label>

                        <label class="offer-form__options__option">
                            <div class="offer-form__options__option__input">
                                <input type="radio" name="offer">
                            </div>
                            <div class="offer-form__options__option__label">
                                Whitening Solutions <br />For Only &pound;350
                            </div>
                        </label>

                        <label class="offer-form__options__option">
                            <div class="offer-form__options__option__input">
                                <input type="radio" name="offer">
                            </div>
                            <div class="offer-form__options__option__label">
                                Emergency Care for only &pound;126
                            </div>
                        </label>

                        <label class="offer-form__options__option">
                            <div class="offer-form__options__option__input">
                                <input type="radio" name="offer">
                            </div>
                            <div class="offer-form__options__option__label">
                                Home Whitening Solutions for only &pound;205
                            </div>
                        </label>
                    </div>

                    <h2>2. Complete your details below</h2>

                    <div class="offer-form__form">
                        <div class="offer-form__form__field">
                            <label for="first-name">First Name</label>
                            <input type="text" placeholder="First Name">
                        </div>
                        <div class="offer-form__form__field">
                            <label for="first-name">Email</label>
                            <input type="text" placeholder="Email">
                        </div>
                        <div class="offer-form__form__field">
                            <label for="last-name">Last Name</label>
                            <input type="text" placeholder="Last Name">
                        </div>
                        <div class="offer-form__form__field">
                            <label for="phone">Phone</label>
                            <input type="text" placeholder="Phone">
                        </div>
                        <div class="offer-form__form__field offer-form__form__field--checkbox">
                            <label for="phone">
                                <input type="checkbox">
                                Yes, I would like to be kept up-to-date with future treatments/offers that Lifestyle Dental may offer.<br />
                                <a href="https://www.lifestyledental.co.uk/digital-privacy-policy/" style="color: #ff9e16">Privacy Policy</a>
                            </label>
                        </div>
                    </div>

                    <h2>3. Click submit to receive the discount code</h2>

                    <button type="submit" class="offer-form__button">
                        Submit
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>

        var options = document.querySelectorAll(".offer-form__options__option");

        [].forEach.call(options, function(option) {
            option.addEventListener('click', function() {
                if (document.querySelector(".offer-form__options__option--active")) {
                    document
                        .querySelector(".offer-form__options__option--active")
                        .classList
                        .remove('offer-form__options__option--active');
                }

                this.classList.toggle("offer-form__options__option--active");
            });
        });

    </script>
<?php get_footer() ?>