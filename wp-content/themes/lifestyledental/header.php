<?php

/**
 * Header file.
 *
 * @package lifestyledental
 * @author Pop Creative
 */

$top_bar = get_field('top_bar_settings', 'option');

$enable_top_bar    = $top_bar['enable_top_bar'];
$background_colour = $top_bar['background_colour'] ? $top_bar['background_colour'] : '#3396ae';
$text_colour       = $top_bar['text_colour'] ? $top_bar['text_colour'] : '#ffffff';
$text_hover_colour = $top_bar['text_hover_colour'] ? $top_bar['text_hover_colour'] : '#eaeaea';
$text              = $top_bar['text'];
$link              = $top_bar['link'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
	
	
	<meta name="google-site-verification" content="64Ij1EfOt8b5twybVWFZ9d54WS-8S3LcJWu69eRD44U" />
	
	
	
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MF5PXS4G');</script>
<!-- End Google Tag Manager -->
	
	
	
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-ZQ699QQHNN"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-ZQ699QQHNN');
</script>
	
	
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title><?php wp_title(); ?></title>

	<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<meta name="google-site-verification" content="AQPPJiBNiwlhtt_SDFOxt69wBTaBXLZzDwTK-nR4ODU" />
	<meta name="facebook-domain-verification" content="pctlnv2o2g0e3qzxngu7rmzn17kxx1" />

	<script type="text/javascript" src="https://cdn-4.convertexperiments.com/js/10034979-10034186.js"></script>

	<?php
	wp_enqueue_style('app', get_dist_path('css/app.css'));
	wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css');
	wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css2?family=PT+Serif:wght@700&family=Roboto:wght@100;300;400;700&display=swap');
	wp_enqueue_style('font', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Satisfy&display=swap');

	wp_enqueue_script('app', get_dist_path('js/app.js'), [], false, true);
	wp_enqueue_script('web-tracking', 'https://lifestyledental.infusionsoft.com/app/webTracking/getTrackingCode', [], false, true);
	?>

	<!-- Google Tag Manager (Popcreative's account) -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-53FSCTF');
	</script>
	<!-- End Google Tag Manager -->

	<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1082806889847318');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1082806889847318&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->

	<script type='text/javascript' src='data:text/javascript;base64, LyogQWxsaSBBSSB3aWRnZXQgZm9yIHd3dy5saWZlc3R5bGVkZW50YWwuY28udWsgKi8KKGZ1bmN0aW9uICh3LGQscyxvLGYsanMsZmpzKSB7d1snQWxsaUpTV2lkZ2V0J109bzt3W29dID0gd1tvXSB8fCBmdW5jdGlvbiAoKSB7ICh3W29dLnEgPSB3W29dLnEgfHwgW10pLnB1c2goYXJndW1lbnRzKSB9O2pzID0gZC5jcmVhdGVFbGVtZW50KHMpLCBmanMgPSBkLmdldEVsZW1lbnRzQnlUYWdOYW1lKHMpWzBdO2pzLmlkID0gbzsganMuc3JjID0gZjsganMuYXN5bmMgPSAxOyBmanMucGFyZW50Tm9kZS5pbnNlcnRCZWZvcmUoanMsIGZqcyk7fSh3aW5kb3csIGRvY3VtZW50LCAnc2NyaXB0JywgJ2FsbGknLCAnaHR0cHM6Ly9zdGF0aWMuYWxsaWFpLmNvbS93aWRnZXQvdjEuanMnKSk7YWxsaSgnaW5pdCcsICdzaXRlX0syYVJ3TExiY0I5QTNXUVYnKTthbGxpKCdvcHRpbWl6ZScsICdhbGwnKTs='></script>
	

	<?php wp_head(); ?>

	<script type='application/ld+json'>
		{
			"@context": "http://www.schema.org",
			"@type": "Dentist",
			"address": {
				"@type": "PostalAddress",
				"streetAddress": "Suite E, 284 Garstang Road",
				"addressLocality": "Fulwood",
				"addressRegion": "Preston",
				"postalCode": "PR2 9RX",
				"addressCountry": "England"
			},
			"hasMap": "https://g.page/lifestyledental?share",
			"openingHours": "Mo 08:30-17:30, Tu 09:30-16:30, We 09:30-16:30, Th 09:00-19:30, Fr 8:30-17:30, Sat 09:00-12:00",
			"contactPoint": {
				"@type": "ContactPoint",
				"contactType": "customer service",
				"telephone": "+441772717316",
				"email": "info@lifestyledental.co.uk"
			},
			"image": "https://www.lifestyledental.co.uk/wp-content/uploads/2018/11/meet-the-team.jpg",
			"name": "Lifestyle Dental and Implant Clinic"
		}
	</script>

	<style>

		@media(min-width: 992px) {
			.core__navigation ul.nav-menu>li>a {
				padding: 0.75rem 0.35rem;
				text-transform: capitalize;
			}

			.core__navigation ul.nav-menu ul.sub-menu {
				min-width: 200px;
			}
		}

		@media(min-width: 1200px) {
			.core__navigation ul.nav-menu>li>a {
				padding: 1.2rem 0.35rem;
				text-transform: uppercase;
			}

			.container {
				max-width: 1180px;
			}

			ul#menu-main-menu {
				justify-content: flex-start !important;
			}
		}

		.core__slider .wrapper {
			background-position: top right;
		}

		.btn-dark-pink {
			background: #BB025F;
			color: #FFF;
		}

		.btn-dark-pink:hover,
		.btn-dark-pink:focus {
			background: #D0237A;
			color: #FFF;
		}

		.btn-turquoise {
			background: #14A2B8;
			color: #FFF;
		}

		.btn-turquoise:hover,
		.btn-turquoise:focus {
			background: #36BED3;
			color: #FFF;
		}
		
		.comp__top-address .row {
			justify-content: flex-end;
		}
		@media(min-width: 1200px) {
			.comp__top-address .main-cta > span {
				transform: translateX(8px);
				display: inline-block;
			}
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
	</style>
	
	<!-- Meta Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window, document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '1478444305736651');
	fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	src="https://www.facebook.com/tr?id=1478444305736651&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Meta Pixel Code -->
	
</head>

<body <?php echo body_class(); ?>>
	
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MF5PXS4G"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

	<!-- Google Tag Manager (noscript) (Popcreative's account) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-53FSCTF" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<header class="core__header">
		<?php $is_landing_page = is_page(3978); ?>
		<style>
			.temp-top-bar {
				background-color: <?= $background_colour ?> !important
			}

			.temp-top-bar a {
				color: <?= $text_colour ?>
			}

			.temp-top-bar a:hover {
				color: <?= $text_hover_colour ?>
			}


			.core__header {
				transition: all 0.3s ease;
			}

			.core__header.scroll-up {
				top: -101px;
			}

			.hidden {
				visibility: hidden;
			}

			.top-bar-1 {
				padding: 8px 0;
				background-color: #434343;
				color: #ffffff;
				font-size: 14px;
				font-weight: 300;
			}

			.top-bar-1 .container {
				display: flex;
				justify-content: space-between;
			}

			.top-bar-1 .container a {
				color: #ffffff;
				margin: 0 3rem;
			}

			.top-bar-1 .container a .fa-clock {
				transform: translateX(-10px);
			}

			.top-bar-1 .container a .fa-circle {
				font-size: 8px;
				color: #36a22f;
				transform: translate(-10px, -2px);
			}

			.top-bar-2 {
				background-color: #3396ae;
				padding: 10px;
				color: #ffffff;
				letter-spacing: 0.5px;
				font-weight: 300;
			}

			.top-bar-2 a {
				color: #ffffff;
			}

			.core__navigation ul.nav-menu>li>a {
				padding: 1.2rem 9px;
				border-left: 1px solid #d8689a;
			}

			@media(min-width: 992px) {
				.core__navigation ul.nav-menu>li:last-of-type>a {
					border-right: 1px solid #d8689a;
				}
			}

			.core__navigation ul.nav-menu {
				background-color: #ce4783;
			}

			.core__header .mob-phone {
				font-size: 28px;
				line-height: 1.3;
			}

			@media (max-width: 1200px) {
				.top-bar-1 .container a {
					margin: 0;
				}

				.fa-bars {
					font-size: 35px;
					float: right;
				}

				.core__navigation ul.nav-menu>li>a {
					padding: 1.1rem 6px;
				}

				#menu-main-menu.sticky-nav {
					width: 930px;
				}
			}

			@media (max-width: 991px) {
				#top-bars {
					display: flex;
					overflow: hidden;
					transition: all 0.2s ease;
					height: 46px;
				}

				#top-bars.top-bars-scroll {
					height: 0px;
				}

				#header-logo {
					transition: all 0.2s ease-in;
				}

				#header-logo.header-logo-scroll {
					max-width: 250px;
				}

				.top-bar-1 {
					/* width: 30%; */
					width: 100%;
					/* TEMP - If another top bar is set, this will need to be set to 30% again */
					line-height: 2;
				}

				.top-bar-1 .container {
					justify-content: space-between;
				}

				.top-bar-2 {
					width: 70%;
				}

				.core__navigation ul.nav-menu>li>a {
					padding: 0 9px;
				}

				.core__navigation ul.nav-menu {
					background-color: #ffffff;
				}

				#menu-main-menu.sticky-nav {
					position: inherit;
					width: unset;
				}
			}

			@media (max-width: 500px) {
				.core__header .core__logo #header-logo {
					max-width: 100%;
				}

				.core__header .core__logo #header-logo.header-logo-scroll {
					max-width: 100%;
				}

				/*.top-bar-1 {
					width: 27%;
				}*/

				.top-bar-1 .container {
					font-size: 12px;
				}

				.top-bar-1 .container a {
					display: block;
					margin-top: 3px;
				}

				.top-bar-2 {
					width: 73%;
				}

				.top-bar-2 .container {
					padding: 0;
					font-size: 12px;
					line-height: 2;
				}

				.top-bar-2 .container a {
					display: block;
					margin-top: 2px;
				}

				.core__navigation {
					top: 80px !important;
				}

			}

			@media (max-width: 350px) {
				.top-bar-1 {
					/* width: 25%; */
					/* If another top bar is set, this will need to be set to 25% again */
				}

				.top-bar-1 .container {
					padding: 0;
				}

				.top-bar-2 {
					width: 75%;
					padding: 10px 2px;
				}
			}

			@media (min-width: 992px) {
				.core__navigation {
					z-index: 4;
					padding: .5rem 0;
					position: sticky;
					top: 0px;
					background-color: #ce4783;
					padding: 0px;
				}
			}

			.core__slider.big .hero-image {
				object-fit: contain;
			}

			html {
				scroll-behavior: smooth;
			}
		</style>
		<div id="top-bars">
			<div class="top-bar-1">
				<div class="container">
					<?php if ($is_landing_page) : ?>
						<span>We have rearranged our patient lounge to allow more space and social distancing where possible.</span>
					<?php else : ?>
						<div class="d-none d-lg-inline-block">
							<a href="https://www.lifestyledental.co.uk/dentists-in-fulwood-preston/#location" class="ml-0">
								<i class="far fa-map mr-3"></i><span class="d-none d-xl-inline-block">Lifestyle Dental, 284 Garstang Road, Suite E Preston, PR2 9RX</span>
							</a>
							<a href="https://www.lifestyledental.co.uk/dentists-in-fulwood-preston/#opening-hours">
								<i class="far fa-clock d-xl-none"></i>
							</a>
						</div>
						<div class="d-none d-lg-inline-block">
							<a href="https://www.lifestyledental.co.uk/dentists-in-fulwood-preston/#opening-hours" class=" d-none d-xl-inline-block">
								<i class="far fa-clock"></i>View opening hours
							</a>
							<!-- <a href="https://www.lifestyledental.co.uk/dentists-in-fulwood-preston/#opening-hours">
									<i class="fa fa-circle"></i> We are open until 6pm
								</a> -->
						</div>
						<div class="d-lg-none">
							<a href="https://www.lifestyledental.co.uk/dentists-in-fulwood-preston/#location" class="ml-0">
								<i class="far fa-map mr-2"></i>Find Us
							</a>
						</div>
						<div class="d-lg-none">
							<a href="https://www.lifestyledental.co.uk/dentists-in-fulwood-preston/#opening-hours" class="ml-0">
								<i class="far fa-clock"></i>View opening hours
							</a>
						</div>
					<?php endif; ?>
				</div>
			</div>

			<?php if ($enable_top_bar) : ?>
				<div class="text-center top-bar-2 temp-top-bar">
					<div class="container">
						<a href="<?= esc_url($link); ?>"><?= esc_html($text); ?></a>
					</div>
				</div>
			<?php endif; ?>


			<?php if ($is_landing_page) : ?>
				<div class="top-bar-2 text-center">
					<div class="container">
						<strong>Book your free consultation today PR2 9RX</strong>
						<?php // else : 
						?>
						<!-- <a href="https://www.lifestyledental.co.uk/blog/2020/06/18/5-reasons-you-should-feel-safe-about-coming-to-our-practice/">
								<strong>Latest COVID-19 Update:</strong> We are <strong>open</strong><span class="d-none d-lg-inline-block">and <strong>ensure maximum protection for our patients and staff. </strong> Find out <strong>more </span> <i class="fa fa-arrow-right"></i></strong>
							</a> -->
					</div>
				</div>
			<?php endif; ?>
		</div>

		<div class="container py-30">
			<div class="row align-items-center">


				<div class="col-6 col-lg-5">
					<div class="core__logo mb-lg-3">
						<a href="<?php echo home_url(); ?>">
							<img src="<?php the_dist_path('img/logo.svg'); ?>" alt="Lifestyle Dental and Implant Clinic Logo" id="header-logo" width="350" height="85">
						</a>
					</div>
				</div>

				<div class="col-6 d-flex align-items-center justify-content-end d-lg-none" style="gap: 1rem;">
					<a class="mob-phone" href="tel:+441772717316">
						<i class="fa fa-phone fa-flip-horizontal fa-fw"></i>
					</a>
					<a
					href="https://onlineappointment.carestack.uk/?dn=lifestyledental&ln=1#/home"
					target=""
					style="font-size: 26px;"
					>
						<i class="fas fa-calendar-alt"></i>

						<span class="sr-only">
							Book online
						</span>
					</a>
					<a class="mob-toggle" href="">
						<i class="fa fa-bars fa-fw"></i>
					</a>
				</div>

				<div class="col-4 col-lg-7 text-sm-right">
					<address class="comp__top-address">
						<div class="row">
							<div class="col-4">
								<span style="color: #BB0360;">
									Call our friendly team<br />
									<a
									href="tel:+441772717316"
									style="font-size: 1.2rem; font-weight: 600;"
									>
										<i class="fa fa-phone"></i> 01772 717 316
									</a>
								</span>
							</div>

							<div class="col-4">
								<a
								href="<?php the_permalink( 46 ); ?>"
								class="btn btn-dark-pink main-cta w-100"
								>
									<span>
										Contact us
									</span>

									<i class="fas fa-arrow-right"></i>
								</a>
							</div>

							<div class="col-4">
								<a
								href="https://onlineappointment.carestack.uk/?dn=lifestyledental&ln=1#/home"
								target=""
								class="btn btn-turquoise main-cta w-100"
								>
									<span>
										Book online
									</span>

									<i class="fas fa-arrow-right"></i>
								</a>
							</div>
						</div>
					</address>
				</div>
			</div>
		</div>
	</header>





	<?php if (!is_page(3978)) : ?>
		<script>
			window.onscroll = function() {
				if (window.pageYOffset > 1) {
					document.getElementById("top-bars").classList.add("top-bars-scroll");
					document.getElementById("header-logo").classList.add("header-logo-scroll");
				} else {
					document.getElementById("top-bars").classList.remove("top-bars-scroll");
					document.getElementById("header-logo").classList.remove("header-logo-scroll");
				}
			}
		</script>
	<?php endif; ?>