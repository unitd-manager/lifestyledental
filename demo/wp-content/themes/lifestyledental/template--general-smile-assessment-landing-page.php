<?php
/**
 * Template Name: General smile assessment landing page
 *
 * @package Lifestyle Dental
 * @author Lifestyle Dental
 */

$current_url = get_permalink(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet" media="print" onload="this.onload=null;this.removeAttribute('media');">

    <noscript>
        <link href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    </noscript>

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                container: {
                    center: true,
                    padding: '1rem',
                },
            }
        }
    </script>

    <style>
        body {
            color: #000;
            font-family: 'Roboto', sans-serif;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'PT Serif', serif;
        }

        .wpcf7-form h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            font-weight: bold;
            color: #14A2B8;
        }

        .wpcf7-form label {
            display:inline-block;
            margin-bottom:.25rem
        }
        .wpcf7-form .wpcf7-form-control-wrap {
            display:block
        }

        .wpcf7-form .wpcf7-form-control-wrap[data-name="opt-in-email"] {
            margin: 1rem 0;
        }

        .wpcf7-form .wpcf7-form-control-wrap input:not([type=radio]),
        .wpcf7-form .wpcf7-form-control-wrap textarea {
            padding:.5rem .75rem;
            color:#000
        }
        .wpcf7-form .wpcf7-form-control-wrap input:not([type=radio]),
        .wpcf7-form .wpcf7-form-control-wrap select,
        .wpcf7-form .wpcf7-form-control-wrap textarea {
            -webkit-appearance:none;
            -moz-appearance:none;
            appearance:none;
            background-color:#fff;
            border-color:#ea5400;
            border-width:1px;
            border-radius:.25rem;
            font-size:1rem;
            line-height:1.5;
            width:100%
        }

        .wpcf7-form .wpcf7-form-control-wrap select {
            background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23a0aec0'%3E%3Cpath d='M15.3 9.3a1 1 0 011.4 1.4l-4 4a1 1 0 01-1.4 0l-4-4a1 1 0 011.4-1.4l3.3 3.29 3.3-3.3z'/%3E%3C/svg%3E");
            -webkit-print-color-adjust:exact;
            color-adjust:exact;
            background-repeat:no-repeat;
            padding:.5rem 2.5rem .5rem .75rem;
            background-position:right .5rem center;
            background-size:1.5em 1.5em;
            color:#000
        }
        .wpcf7-form .wpcf7-not-valid-tip {
            background:#ffe5e5;
            margin-top:.25rem;
            padding:.5rem
        }

        .smile-assessment-hero {
            background-color: #F5A528;
        }

        .smile-assessment-hero.has-bg-img {
            background-image: url(https://www.confidence2smile.co.uk/wp-content/uploads/2023/10/Stella_Smile_Assessment_general_hero@2x-scaled.jpg);
            background-size: cover;
            background-position-x: right;
        }

        .smile-assessment-hero .lp-logo {
            background-color: #F5F5F5;
            padding: 100px 32px 32px 32px;
            width: fit-content;
            display: block;
            margin-bottom: 50px;
        }

        .smile-assessment-hero h1 {
            color: #fff;
        }

        .smile-assessment-hero p {
            font-size: 24px;
            color: #fff;
            max-width: 550px;
            line-height: 1.4;
        }

        .smile-assessment-form {
            padding: 50px 1rem;
        }

        .smile-assessment-form label {
            color: #14A2B8;
            font-size: 24px;
            font-weight: 600;
        }

        .smile-assessment-form label span {
            color: initial;
            font-size: 18px;
            font-weight: 400;
        }

        .smile-assessment-form select,
        .smile-assessment-form input {
            border-radius: 5px;
            border: 2px solid #ea5400 !important;
        }

        .smile-assessment-form .gender,
        .smile-assessment-form .checkboxes,
        .smile-assessment-form .radio-buttons {
            margin-bottom: 40px;
        }

        .smile-assessment-form .gender p {
            display: flex;
            gap: 30px;
        }

        .smile-assessment-form .gender p .wpcf7-form-control-wrap {
            width: 300px;
            max-width: 40%;
        }

        .smile-assessment-form .checkboxes .wpcf7-list-item {
            width: 50%;
            margin: 0;
            display: inline-block;
        }

        .smile-assessment-form .contact-info {
            margin-bottom: 1rem;
        }

        .smile-assessment-form .checkboxes input,
        .smile-assessment-form .radio-buttons input {
            height: 30px;
            width: 30px !important;
            outline-color: #ea5400;
            cursor: pointer;
            transform: translateY(8px);
            margin-right: 8px;
        }

        .smile-assessment-form .radio-buttons input {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: 50%;
        }

        .smile-assessment-form .radio-buttons .wpcf7-list-item {
            margin: 0 1em 0 0;
        }

        .smile-assessment-form .checkboxes input:checked,
        .smile-assessment-form .radio-buttons input:checked {
            -webkit-appearance: auto !important;
            -moz-appearance: auto !important;
            appearance: auto !important;
        }

        .smile-assessment-form .contact-info>p {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .smile-assessment-form .contact-info .wpcf7-form-control-wrap {
            width: calc(50% - 10px);
        }

        .smile-assessment-form .wpcf7-acceptance .wpcf7-list-item {
            margin: 0;
        }

        .smile-assessment-form .wpcf7-acceptance input {
            height: 30px;
            width: 30px !important;
            outline-color: #ea5400;
            cursor: pointer;
            transform: translateY(8px);
            margin-right: 8px;
        }

        .smile-assessment-form .wpcf7-acceptance input:checked {
            -webkit-appearance: auto !important;
            -moz-appearance: auto !important;
            appearance: auto !important;
        }

        .smile-assessment-form .wpcf7-acceptance span {
            font-size: 16px;
        }

        .smile-assessment-form .wpcf7-submit {
            background-color: #D04483;
            color: #fff;
            padding: 10px;
            width: 300px;
            border-radius: 20px;
            border: none !important;
            margin-bottom: 40px;
            transition: background 0.2s ease;
        }

        .smile-assessment-form .wpcf7-submit:hover,
        .smile-assessment-form .wpcf7-submit:focus {
            background: orange;
            cursor: pointer;
        }

        @media (max-width: 1400px) {
            .smile-assessment-hero.has-bg-img {
                background-image: url(https://www.confidence2smile.co.uk/wp-content/uploads/2023/10/Stella_Smile_Assessment_general_hero-tablet.jpg);
            }

            .smile-assessment-hero h1 {
                font-size: 32px !important;
            }
        }

        @media (max-width: 1020px) {
            .smile-assessment-hero {
                padding-bottom: 32px;
            }

            .smile-assessment-hero .lp-logo {
                padding: 40px 20px 40px 20px;
                width: 250px;
                margin-bottom: 32px;
            }

            .smile-assessment-hero h1 {
                max-width: 300px;
                margin-bottom: 60px;
            }

            .smile-assessment-hero p {
                background-color: rgba(245, 168, 42, 0.8);
                margin: 0 -16px 0px;
                padding: 16px;
                font-size: 18px;
                max-width: 400px;
            }
        }

        @media (max-width: 767px) {

            .smile-assessment-form .checkboxes .wpcf7-list-item,
            .smile-assessment-form .contact-info .wpcf7-form-control-wrap,
            .smile-assessment-form .wpcf7-submit {
                width: 100%;
            }
        }

        @media (max-width: 500px) {
            .smile-assessment-hero.has-bg-img {
                background-image: url(https://www.confidence2smile.co.uk/wp-content/uploads/2023/10/Stella_Smile_Assessment_general_hero-mobile.jpg);
            }

            .smile-assessment-hero p {
                max-width: 500px;
            }
        }
    </style>

    <?php wp_head(); ?>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-53FSCTF');</script>
    <!-- End Google Tag Manager -->
</head>
<body class="antialiased bg-white">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-53FSCTF"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <header class="pb-[100px] smile-assessment-hero<?php echo ( ! strpos( $current_url, '/thank-you/' ) > 0 ) ? ' has-bg-img' : ''; ?>">
        <div class="container">
            <div class="grid grid-cols-1 gap-4">
                <div class="col-span-1">
                    <div class="lp-logo">
                        <img
                        loading="lazy"
                        class="w-[400px]"
                        src="https://www.lifestyledental.co.uk/wp-content/themes/lifestyledental/dist/img/logo.svg"
                        alt="Lifestyle Dental logo"
                        >
                    </div>
                    
                    <?php if ( ! strpos( $current_url, '/thank-you/' ) ) : ?>
                        <h1 class="text-[2.625rem] mb-4">
                            Looking for a Dentist?
                        </h1>
                        
                        <p class="mb-4">
                            Complete your free Smile Assessment below or call our friendly team on <a href="tel:+441772717316"><strong>01772 717316</strong></a> to talk to a dentist.
                        </p>
                    <?php else : ?>
                        <h1 class="text-[2.625rem] mb-4">
                            Thank you for filling out the Smile Assessment
                        </h1>

                        <p class="mb-4">
                            We'll get back to you with your results.
                        </p>

                        <p class="mb-4">
                            In the meantime, feel free to call our friendly team on <a href="tel:+441772717316"><strong>01772 717316</strong></a> to talk to a dentist.
                        </p>
                    <?php endif; ?>
                    
                    <p>
                        <small>Our Location is <strong>Lifestyle Dental 284 Garstang Road, Suite E, Preston, PR2 9RX.</strong> We have free parking available outside of the practice.</small>
                    </p>
                </div>

                <?php /*if ( strpos( $current_url, '/thank-you/' ) > 0 ) : ?>
                    <div class="col-span-1">
                        <div class="calendly-inline-widget" data-url="https://calendly.com/nadim-2/15min" style="min-width:320px;height:800px;"></div>
                        <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
                    </div>
                <?php endif;*/ ?>
            </div>
        </div>
    </header>

    <?php if ( ! strpos( $current_url, '/thank-you/' ) ) : ?>
        <section class="py-20 smile-assessment-form">
            <div class="container">
                <?php echo do_shortcode( '[contact-form-7 id="8150ebb" title="General Smile Assessment"]' ); ?>
            </div>
        </section>
    <?php endif; ?>

    <section class="py-8 bg-white">
        <div class="container">
            <div class="flex items-center flex-wrap -mx-4">
                <div class="flex-[0_0_100%] lg:flex-[0_0_40%] px-4 mb-8 lg:mb-0">
                    <div class="mb-8">
                        <h3 class="text-2xl mb-2">
                            Where to find us
                        </h3>

                        <ul class="list-style-none m-0 p-0">
                            <li>
                                Lifestyle Dental
                            </li>

                            <li>
                                284 Garstang Road, Suite E
                            </li>

                            <li>
                                Preston
                            </li>

                            <li>
                                PR2 9RX
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="text-2xl mb-2">
                            Opening Hours
                        </h3>

                        <ul class="list-style-none m-0 p-0">
                            <li>
                                Monday: 9:00am – 5:00pm
                            </li>

                            <li>
                                Tuesday: 10:00am – 5:00pm
                            </li>

                            <li>
                                Wednesday: 9:00am – 4:00pm
                            </li>

                            <li>
                                Thursday: 10:00am – 7:00pm
                            </li>

                            <li>
                                Friday: 9:00am – 5:00pm
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="flex-[0_0_100%] lg:flex-[0_0_60%] px-4">
                    <iframe
                    loading="lazy"
                    src="https://maps.google.co.uk/maps?f=q&hl=en&geocode=&q=Unit+E,+284+Garstang+Road,+Preston,+Fulwood,+PR2+9RX&sll=53.800651,-4.064941&sspn=9.144103,19.160156&ie=UTF8&s=AARTsJq8trcJTf5rzmgPQNm5Z3TtB8_Oag&ei=ve2pSuaLG5SqvAOeubCuDA&cd=7&cid=14170350594836348545&li=lmd&ll=53.792223,-2.71313&spn=0.004436,0.012875&z=16&output=embed"
                    frameborder="0"
                    width="100%"
                    height="350"
                    ></iframe>
                </div>
            </div>
        </div>
    </section>

    <section class="py-8 bg-[#F5F5F5]">
        <div class="container">
            <div class="flex items-center flex-wrap -mx-4">
                <div class="flex-[0_0_100%] lg:flex-[0_0_33.3334%] px-4 pb-4 lg:pb-0">
                    <img
                    class="block mx-auto"
                    src="https://www.lifestyledental.co.uk/wp-content/uploads/2021/08/Dentistry-awards.png"
                    alt="Dentistry Awards"
                    >
                </div>

                <div class="flex-[0_0_100%] lg:flex-[0_0_33.3334%] px-4 pb-4 lg:pb-0">
                    <img
                    class="block mx-auto"
                    src="https://www.lifestyledental.co.uk/wp-content/uploads/2021/08/BDA.png"
                    alt="BDA Award"
                    >
                </div>

                <div class="flex-[0_0_100%] lg:flex-[0_0_33.3334%] px-4">
                    <img
                    class="block mx-auto"
                    src="https://www.lifestyledental.co.uk/wp-content/uploads/2021/08/Finalist.png"
                    alt="Private Dentistry Awards"
                    >
                </div>
            </div>
        </div>
    </section>

    <footer class="py-8 bg-[#2F2F2F] text-white">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 lg:gap-12">
                <div class="col-span-1">
                    <h4 class="text-2xl text-[#D04483] mb-2">
                        Get in touch
                    </h4>

                    <ul class="list-style-none m-0 p-0">
						<li class="mb-2">
							Lifestyle Dental 284 Garstang Road, Suite E, Preston, PR2 9RX
						</li>

						<li class="mb-2">
							<a href="tel:+441772717316">
                                01772 717316
                            </a>
						</li>

						<li>
							<a href="mailto:info@lifestyledental.co.uk">
                                info@lifestyledental.co.uk
                            </a>
						</li>
					</ul>
                </div>

                <div class="col-span-1">
                    <h4 class="text-2xl text-[#D04483] mb-2">
                        Opening hours
                    </h4>

                    <ul class="list-style-none m-0 p-0">
						<li class="mb-2">
							Monday: 9:00am - 5:00pm
						</li>

						<li class="mb-2">
							Tuesday: 10:00am - 5:00pm
						</li>

						<li class="mb-2">
							Wednesday: 9:00am - 4:30pm
						</li>

						<li class="mb-2">
							Thursday: 10:00am - 7:00pm
						</li>

						<li class="mb-2">
							Friday: 9:00am - 5:00pm
						</li>

						<li>
							Phone advice is available outside these hours.
						</li>
					</ul>
                </div>
            </div>
        </div>
    </footer>

    <div class="bg-black text-white py-3 text-center">
        Optimising the digital experience by 

        <a
        class="text-[#D04483]"
        href="https://www.popcreative.co.uk"
        target="_blank">
            Pop Creative
        </a>
    </div>

    <?php wp_footer(); ?>

    <script>
        document.addEventListener('wpcf7mailsent', function (event) {
            window.location.replace('https://www.lifestyledental.co.uk/general-smile-assessment/thank-you/');
        });
    </script>
</body>
</html>
