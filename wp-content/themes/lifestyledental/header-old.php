<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php wp_title() ?></title>
    
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <?php
        wp_enqueue_style('app', get_dist_path('css/app.css'));
        wp_enqueue_style('additional-css', get_template_directory_uri() . '/additional-css.css');

        wp_enqueue_style('style', get_stylesheet_uri());

        wp_enqueue_script('app', get_dist_path('js/app.js'), array(), false, true );
    ?>

    <!--[if gt IE 7]>
        <link rel="stylesheet" type="text/css" href="//www.lifestyledental.co.uk/all-ie-only.css" />
    <![endif]-->
    
<?php /*
    <!-- Global site tag (gtag.js) - Google Analytics (Nadim's analytics) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-6775623-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-6775623-1');
    </script>
*/ ?>

    <!-- Google Tag Manager (Popcreative's account) -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-53FSCTF');</script>
    <!-- End Google Tag Manager -->

    <?php wp_head() ?>

    <style>
        .btn-brand {
            background-color: #b21463;
            color: #FFF;
        }

        .btn-brand:hover,
        .btn-brand:focus {
            background-color: #890a49;
            color: #FFF;
        }
    </style>
</head>

<body>

<!-- Google Tag Manager (noscript) (Popcreative's account) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-53FSCTF"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<header class="core__header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-2 d-lg-none">
                <a class="mob-toggle" href="">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <div class="core__logo mb-lg-3">
                    <a href="<?php echo home_url() ?>">
                        <img class="img-fluid" src="<?php the_dist_path('img/logo.png') ?>" alt="logo">
                    </a>
                </div>
            </div>
            <div class="col-4 col-lg-7">
                <address class="comp__top-address">
                    Have any questions? CALL US  <a href="tel:01772977914"><span class="rTapNumber158077">01772 717316</span></a> <?php /*<a href="tel:01772977611">01772 97 76 11</a> */ ?> | <a href="mailto:info@Lifestyledental.co.uk">info@Lifestyledental.co.uk</a>

                    <div>284 Garstang Road Suite E Preston PR2 9RX</div>
                </address>
                <div class="comp__top-address--mob">
                    <a href="tel:01772977611">
                        <i class="fa fa-phone"></i>
                    </a>
                      <a href="mailto:info@Lifestyledental.co.uk" class="d-none d-sm-inline-block">
                        <i class="fa fa-envelope"></i>
                    </a>
                    <a href="https://goo.gl/maps/CNtbMwt1CWS2" target="_blank">
                        <i class="fa fa-map-marker"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-2 <?php /*?>d-none<?php */?> d-lg-block">
                <div class="comp__top-social-icons">
                    <a href="https://www.facebook.com/lifestyledental" class="fa-stack fa-lg" target="_blank">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                    </a>
                    <a href="https://plus.google.com/+LifestyledentalCoUk" class="fa-stack fa-lg" target="_blank">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
                    </a>
                    <a href="https://twitter.com/lifestyledental" class="fa-stack fa-lg" target="_blank">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
