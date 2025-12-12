<?php

/**
 * Home page.
 *
 * @package lifestyledental
 * @author Pop Creative
 */

?>

<?php get_header(); ?>

<?php get_template_part('_includes/navigation'); ?>


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

	/* .core__slider.big .wrapper {
			background-image: url(https://www.lifestyledental.co.uk/wp-content/uploads/2021/04/Hero_background.jpg);
			background-repeat: no-repeat;
		} */

	.popup-finance-form.open {
		display: block;
		animation: none !important;
	}

	.popup-finance-form.open form.gradient-form {
		display: block;
	}

	.core__slider.big {
		background-color: #eaeaea;
		height: 566px;
		clip-path: polygon(0% 0%, 100% 0%, 100% 93%, 100% 93%, 51% 100%, 0 93%, 0 93%);
	}

	.core__slider.big .hero-image {
		position: absolute;
		top: 165px;
		height: 447px;
		right: 290px;
	}

	.layer .slides .slide.homepage {
		background-image: none !important;
	}

	.core__slider .wrapper form.gradient-form {
		margin: -32px;
		right: 2rem;
	}

	.core__slider .wrapper {
		background-color: #eaeaea;
	}

	.core__slider.big .wrapper .slide {
		height: 469px;
	}

	.core__slider.big .wrapper .slide h1 {
		margin-bottom: 2rem;
		/*font-size: 32px;*/
	}

	.core__slider .wrapper .text {
		max-width: 505px;
	}

	.core__slider.big .wrapper .slide p {
		line-height: 1.75;
		margin-bottom: 24px;
		color: #434343;
		font-weight: 300;
	}

	.icon-links {
		display: flex;
		justify-content: space-between;
		max-width: 450px;
		margin-top: 2rem;
		border-top: 1px solid #434343;
		border-bottom: 1px solid #434343;
		padding: 20px 5px;
	}

	.icon-links div {
		text-align: center;
	}

	.icon-links div i {
		font-size: 32px;
		margin-bottom: 20px;
		color: #bb005e;
	}

	.icon-links div a {
		color: #434343;
	}

	.service-cards {
		background-repeat: no-repeat;
		background-size: cover;
		
		margin-bottom: 20px;
		display: block;
	}

	.service-cards-section h3 {
		color: #434343;
		text-align: center;
	}

	.service-cards .service-card-inner {
		background-color: rgba(234, 84, 0, 0.85);
		color: #ffffff;
		padding: 15px;
		height: 58px;
		position: absolute;
		bottom: 0px;
		right: 15px;
		left: 15px;
		transition: height 0.3s ease-in;
	}

	/*.service-cards:hover .service-card-inner {*/
	/*	height: 188px;*/
	/*}*/

	.service-cards .service-card-inner h5 {
		font-family: 'Roboto', sans-serif;
		color: #ffffff;
		font-weight: 400;
		max-width: 90%;
	}

	.service-cards .service-card-inner h5 i {
		position: absolute;
		right: 20px;
		top: 20px;
	}

	.service-cards .service-card-inner p {
		opacity: 0;
		visibility: hidden;
		transition: all 0.3s ease;
		transition-delay: 0.2s;
	}

	.service-cards:hover .service-card-inner p {
		opacity: 1;
		visibility: visible;
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

	.meet-the-team {
		background-color: #efefef;
	}

	.meet-the-team-sidebar div {
		background-color: #ffffff;
		display: flex;
		flex-direction: column;
		justify-content: space-around;
		height: auto;
		padding: 32px;
		font-size: 18px;
	}

	.meet-the-team-sidebar div strong {
		display: block;
		margin-bottom: 16px;
	}

	.meet-the-team-sidebar img {
		width: 100%;
	}

	.meet-the-team-sidebar h4 {
		font-size: 28px;
	}

	.meet-the-team .meet-the-team-main p {
		/*font-size: 18px;*/
		/*line-height: 1.55;*/
		margin-bottom: 15px;
	}

	.main-cta {
		color: #fff;
		/*text-transform: uppercase;*/
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
		transform: translateX(5px);
	}

	.main-cta:hover {
		color: #ffffff;
	}

	.meet-the-team .meet-the-team-main .btn {
		background-color: #d04483;
		/*width: 350px;*/
		margin-top: 16px;
	}

	.guarantee-banner {
		background-image: url('https://www.lifestyledental.co.uk/wp-content/uploads/2021/05/Our_promise-2.jpg');
		background-attachment: fixed;
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
		position: relative;
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

	.guarantee-banner .row {
		width: fit-content;
		margin: 0 auto;
	}

	.guarantee-banner .btn.main-cta {
		background-color: #ea5400;
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

	.info-links h3 {
		color: #434343;
		text-align: center;
	}

	.info-link-images img {
		width: 100%;
		position: relative;
	}

	.info-link-images div {
		background-color: rgba(180, 9, 99, 0.85);
		padding: 15px 30px;
		color: #ffffff;
		font-size: 18px;
		position: absolute;
		bottom: 0;
		right: 15px;
		left: 15px;
	}

	.info-link-images div i {
		position: absolute;
		right: 24px;
		line-height: 1.4;
		transition: all 0.3s ease-in-out;
	}

	.info-link-images:hover div i {
		position: absolute;
		right: 48px;
		line-height: 1.4;
		transition: all 0.3s ease-in-out;
	}

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
	}

	.contact-form-banner form .main-cta:hover .fa-arrow-right {
		transform: translateX(20px);
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

	.meet-the-team .parallax {
		background-image: url('https://www.lifestyledental.co.uk/wp-content/uploads/2021/05/Dr_Nadim.jpg');
		height: 290px;
		width: 350px;
		background-repeat: no-repeat;
		background-color: #efefef
	}

	.meet-the-team-img {
		display: none;
	}

	.contact-form-banner.parallax2 {
		background-image: url('https://www.lifestyledental.co.uk/wp-content/uploads/2021/04/Finance.png');
		background-repeat: no-repeat;
		background-position-x: 90%;
		background-position-y: 140%
	}

	#floating-btn.main-cta {
		background-color: #ea5400;
		position: fixed;
		width: auto;
		left: 5vw;
		width: 90vw;
		bottom: 16px;
		z-index: 1;
		transform: translateY(100px);
		transition: all 0.3s ease;
		color: #ffffff;
	}

	#floating-btn.main-cta.show {
		transform: translateY(0);
	}


	@media (max-width: 1200px) {
		.icon-links {
			margin-top: 1rem;
			padding: 10px 5px;
		}

		.icon-links div i {
			font-size: 24px;
			margin-bottom: 10px;
		}

		.service-cards .service-card-inner {
			height: 50px;
		}

		.service-cards .service-card-inner h5 {
			font-size: 18px;
		}

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

		.core__slider.big .wrapper .slide {
			height: 450px;
		}

		.core__slider.big {
			height: 600px;
		}

		.slider-form .d-xl-none.main-cta {
			width: 450px;
		}

		.core__slider.big .hero-image {
			/* height: 600px; */
			right: 0;
		}

		.meet-the-team .parallax {
			width: 289px;
		}

		.contact-form-banner.parallax2 {
			background-position-x: 84%;
		}

	}

	@media (max-width: 991px) {
	    .service-cards:hover .service-card-inner { height: 50%!important; }
		.core__header {
			border-bottom: none;
			padding-bottom: 0;
			padding-top: 0;
		}

		.core__slider {
			padding-top: 0;
		}

		.core__slider.big .wrapper {
			background-position-x: center;
			height: 467px;
			background-size: cover;
		}

		.core__slider.big .wrapper .slide {
			height: 331px;
		}

		.core__slider.big .wrapper .slide h1 {
			margin-bottom: 1rem;
		}

		.core__slider.big .wrapper .slide p {
			margin-bottom: 10px;
		}

		.icon-links {
			margin: 0 auto;
		}

		.slider-form {
			text-align: center;
		}

		.service-cards-section h3 {
			/*text-align: left;*/
		}

		.meet-the-team-sidebar div {
			padding: 32px 16px;
		}

		.guarantee-banner li {
			margin-bottom: 5px;
		}

		.info-link-images div {
			position: inherit;
			height: 88px;
		}

		.info-link-images div i {
			bottom: 42px;
		}

		.contact-form-banner img {
			right: -150px;
		}

		.core__slider.big .wrapper .slide {
			height: 400px;
		}

		.core__slider.big {
			height: 531px;
		}

		.core__slider.big .hero-image {
			/* height: 600px; */
			right: -140px;
		}

		.core__slider .slide {
			text-align: left;
		}

		.slider-form .d-xl-none.main-cta {
			width: 424px;
		}

		.icon-links {
			margin-left: 0;
			margin-top: 24px;
		}

		.slider-form {
			text-align: left;
		}

		.meet-the-team .parallax {
			background-image: none;
			height: unset;
			width: unset;
		}

		.meet-the-team-img {
			display: block;
		}

		.contact-form-banner.parallax2 {
			background-position-x: 115%;
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
			/*font-size: 24px;*/
		}

		.core__slider.big .wrapper .slide p,
		.icon-links {
			display: none;
		}

		.core__slider.big .wrapper .slide h1 {
			/*font-size: 24px;*/
			max-width: 217px;
			margin-top: 3rem;
			transform: translateY(-24px);
		}

		.core__slider.big .wrapper .slide {
			height: 100px;
		}

		.core__slider.big .wrapper {
			background-position-x: center;
			height: 316px;
			background-size: 131%;
		}

		.main-cta {
			width: 100%;
			padding: 1rem;
			line-height: 22px;
		}

		.main-cta .fa-arrow-right {
			display: none;
		}

		.service-cards {
			background-size: inherit;
			background-position-x: center;
		}

		.service-cards .service-card-inner {
			height: 48px;
			bottom: 0px;
		}

		.service-cards .service-card-inner h5 i {
			right: 15px;
			bottom: 25px;
		}

		.service-cards .service-card-inner h5 {
			padding-right: 24px;
		}

		.service-cards .service-card-inner p {
			font-size: 14px;
		}

		.service-cards:hover .service-card-inner {
			height: 70%;
		}

		.service-cards-section .d-md-none p {
			font-size: 18px;
		}

		.meet-the-team-sidebar img {
			width: 80%;
			display: block;
			margin-bottom: 32px;
		}

		.meet-the-team .meet-the-team-main .btn {
			width: 100%;
		}

		#meet-the-team-read-more-btn {
			color: #b40963;
			cursor: pointer;
			font-weight: 600;
		}

		#meet-the-team-read-more-btn.less {
			position: absolute;
			bottom: 81px;
			left: 50%;
			transform: translateX(-50%);
		}

		#meet-the-team-read-more-block {
			height: 0;
			overflow: hidden;
			transition: height 0.3s ease-in;
		}

		#meet-the-team-read-more-block.show-more {
			height: 380px;
		}

		.guarantee-banner li {
			margin-bottom: 16px;
		}

		.guarantee-banner {
			background-image: url('https://www.lifestyledental.co.uk/wp-content/uploads/2021/11/Our_promise_V2-min.jpg');
			background-attachment: unset;
		}

		.guarantee-banner .btn.main-cta {
			width: 100%;
		}

		.info-links h3 {
			text-align: left;
		}

		.info-link-images div {
			position: absolute;
			height: inherit;
		}

		.info-link-images div i {
			bottom: unset;
		}

		.info-link-images {
			margin-bottom: 16px;
		}

		.slider-form .d-xl-none.main-cta {
			width: 100%;
		}

		.core__slider.big .hero-image {
			/* height: 400px; */
			left: 150px;
			right: 0;
			top: 0px;
			z-index: -1;
		}

		.contact-form-banner.parallax2 {
			background-image: none;
		}

		.core__slider.big {
			height: 288px;
		}
	}

	@media (max-width: 500px) {
		.core__slider.big .wrapper {
			height: 259px;
			background-size: 153%;
		}

		.core__slider.big .wrapper .slide h1 {
			margin-top: 3rem;
		}

		.core__slider.big .wrapper .slide {
			height: 75px;
		}

		.service-cards .service-card-inner {
			padding: 15px 10px;
			height: 48px;
		}

		.service-cards .service-card-inner h5 {
			font-size: 16px;
			padding-right: 18px;
		}

		.service-cards .service-card-inner h5 i {
			right: 10px;
		}

		.service-card-left {
			padding-right: 8px;
		}

		.service-card-left .service-card-inner {
			right: 8px;
		}

		.service-card-right {
			padding-left: 8px;
		}

		.service-card-right .service-card-inner {
			left: 8px;
		}

		#meet-the-team-read-more-block.show-more {
			height: 500px;
		}

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

		.core__slider.big .hero-image {
			top: 20px;
			/* height: 300px; */
			right: auto;
			left: 95px;
		}

		.core__slider.big {
			height: 259px;
			overflow: hidden;
		}
	}

	@media (max-width: 370px) {
		.core__slider.big .wrapper {
			background-size: 200%;
			height: 259px;
		}

		.main-cta {
			font-size: 16px;
		}
	}

	@media (max-width: 360px) {
		#meet-the-team-read-more-block.show-more {
			height: 600px;
		}

		.service-cards .service-card-inner {
			padding: 15px 10px;
		}

		.core__slider.big .hero-image {
			right: -60px;
		}
	}

	@media (min-width: 1200px) {
		.core__slider.big {
			height: 700px;
		}

		.core__slider.big .hero-image {
			height: 550px;
		}
	}
	.colr-white p, .colr-white h4{
	    color:#fff!important;
	}
		.colr-white{
	    color:#fff!important;
	}
	.tag { font-size: 18px; font-weight: 600; display: inline-block; color:#000; }
	.font-s-16{
	    font-size:16px!important;
	}
@media (max-width:992px) {
    
    .sp-pt-pb{
    padding: 80px 0px!important;
}
	.sp-pt-80{
		padding-top:50px!important;
	}
}
.sp-pt-pb{
    padding: 120px 0px;
}
.sp-pt-80{
		padding-top:80px!important;
	}
</style>

<!--<div class="core__slider big mb-0 mb-lg-5">
	<div class="container">
		<div class="wrapper no-arrow">
			<div class="layer">
				<div class="slides">
					<div class="slide homepage">
						<div class="text">
							<h1>Improve your smile with Lifestyle Dental in Preston</h1>

							<p>
								The Lifestyle Dental team are dedicated to creating beautiful and healthy smiles for patients of all ages. We want you to have a smile that you are happy to show off.
							</p>

							<p>
								We offer both cosmetic and general dentistry treatments to allow you to maintain, restore and improve your smile. The latest technology aids us to effectively diagnose and treat a wide variety of problems.
							</p>

						</div>

						<div class="icon-links">
							<div>
								<a href="https://www.lifestyledental.co.uk/about-preston-dentists/">
									<i class="far fa-star"></i><br>
									Relaxing<br>Environment
								</a>
							</div>
							<div>
								<a href="https://www.lifestyledental.co.uk/about-preston-dentists/">
									<i class="fas fa-thumbs-up"></i><br>
									Latest<br>Technology
								</a>
							</div>
							<div>
								<a href="https://www.lifestyledental.co.uk/finance/">
									<i class="fas fa-pound-sign"></i><br>
									Payment<br>Plans
								</a>
							</div>
							<div>
								<a href="https://www.lifestyledental.co.uk/preston-dental-sedation/">
									<i class="far fa-moon"></i><br>
									Sedation<br>Relaxation
								</a>
							</div>
						</div>
						<img src="https://www.lifestyledental.co.uk/wp-content/uploads/2023/03/hero-home.png" alt="" class="hero-image">
					</div>
				</div>

				<div class="slider-form">
					<?php //get_template_part('_misc/consultation-form'); ?>
				</div>

			</div>
		</div>

	</div>

</div>-->

<link rel="stylesheet"
 href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
<!-- Owl CSS links (include once in head or above this block) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
<style>
    
    /* Carousel container overrides so each .item is full width inside Owl */
.service-cards-carousel .item {
  display: block;
  padding: 0 8px; /* gutter between items */
  box-sizing: border-box;
}

/* Make the card itself behave responsively (keeps your existing card look) */
.service-cards {
  display: block;
  height: 350px;
  background-repeat: no-repeat;
  background-size: cover;
  border-radius: 6px;
  overflow: hidden;
  position: relative;
  box-shadow: 0 6px 18px rgba(0,0,0,0.08);
}

/* Card content panel */
.service-card-inner {
  background-color: rgba(234,84,0,0.85);
  color: #fff;
  padding: 15px;
  height: 78px;
  position: absolute;
  bottom: 0px;
  left: 15px;
  right: 15px;
  transition: height .28s ease-in, background-color .2s;
}

.service-cards:hover .service-card-inner { height: 50%; }

.service-card-inner h5 {
  font-weight: 400;
  margin: 0 46px 6px 0;
}

.service-card-inner p {
  opacity: 0;
  visibility: hidden;
  transition: opacity .25s ease .12s, visibility .25s;
}
.service-cards:hover .service-card-inner p {
  opacity: 1;
  visibility: visible;
}

/* Better spacing for small screens */
@media (max-width: 576px) {
  /*.service-cards { height: 220px; }*/
  .service-card-inner { bottom: 0px; left: 12px; right: 12px; height: 104px; }
  .service-card-inner h5 { font-size: 16px; }
}

/* Owl nav style (optional) */
.service-cards-carousel .owl-nav button.owl-prev,
.service-cards-carousel .owl-nav button.owl-next {
    color:#fff;
  border: 0;
  margin: 0 6px;
  font-size: 35px;
    background: #d04483;
    padding: 0 20px !important;
    border-radius: 50%;
}
.service-cards-carousel .owl-nav button.owl-prev:hover,
.service-cards-carousel .owl-nav button.owl-next:hover {
     background: #000;
}
.service-cards-carousel  .owl-dots{
    display:none;
}
.br-radius-color-br{
    border-radius: 180px 10px 0 0;
    border: 5px solid #bb005e;
    border-bottom: none;
    border-left: none;
}
/* REMOVE top & bottom default arrows completely */
.accordion-button::after {
    display: none !important;
}

/* ADD your own single arrow icon (down arrow) */
.accordion-button {
    position: relative;
    padding: 15px 40px 15px 20px;
    width: 100%;
    border-radius: 10px;
        text-align: start;
        border: 1px solid #000;
}

.accordion-button:before {
    content: "\f282"; /* Bootstrap Icon: chevron-down */
    font-family: "bootstrap-icons" !important;
    font-size: 18px;
    position: absolute;
    right: 20px;
    top: 50%;
    transform: translateY(-50%);
    transition: transform .3s ease;
    color: #bb005e;
}
.accordion-item{
    background: #ffff;
    border-radius: 10px;
}
/* Rotate arrow when accordion is open */
.accordion-button:not(.collapsed):before {
    transform: translateY(-50%) rotate(180deg);
}
.accordion-collapse{
    padding: 10px 20px 5px;
    margin-bottom: 20px;
}
.accordion-header{
    margin-bottom: 15px;
}

</style>

<section class="home_hero_sec text-m-center">
	<div class="home_hero_inner">
		<div class="home_hero_content_col col-lg-7 ps-0">
		    <span class="tag text-white"><i class="bi bi-stars"></i>
Gentle Care, Beautiful Smiles
</span>
			<h1>Lifestyle Dental and Implant Clinic in Fulwood</h1>
			<p class="text-white">Experience expert dental care with advanced technology, flexible payment plans, and a friendly team dedicated to your perfect smile.</p>
			<span><a href="https://onlineappointment.carestack.uk/?dn=lifestyledental&amp;ln=1#/home" target="" class="btn btn-turquoise main-cta ">
									<span>
										Book online
									</span>
								</a></span>
			<!-- <a href="tel:01772717316" class="btn btn-dark-pink">Secure Your No Obligation Consultation by Calling 01772 717316</a> -->
		</div>
		<div class="home_hero_form_col col-lg-5 text-center">
			<?php //get_template_part('_misc/consultation-form'); ?>
			<div class="infusion-form">
				<?php echo do_shortcode('[contact-form-7 id="309790f" title="Contact Form"]'); ?>
			</div>
		</div>
	</div>
	<div class="home_hero_icon_links">
		<div>
			<p class="font-s-16"><i class="bi bi-people-fill"></i>Expert Dental Team You Trust</p>
		</div>
		<div>
			<p class="font-s-16"><i class="bi bi-heart-pulse-fill"></i>Gentle, Pain-Free Care</p>
		</div>
		<div>
			<p class="font-s-16"><i class="bi bi-cpu-fill"></i>Advanced Technology Used</p>
		</div>
		<div>
			<p class="font-s-16"><i class="bi bi-credit-card-2-front-fill"></i>Flexible Payment Plans</p>
		</div>
	</div>
</section>

<section class="meet-the-team bg-white text-m-center sp-pt-pb sp-pt-80">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-5  text-center">
			
				<img class="br-10 w-100" src="https://www.lifestyledental.co.uk/demo/image/about/lifestyle-dental-implant-clinic.png" alt="">
				
			</div>
			<div class="col-12 col-lg-7 meet-the-team-main">
			    <span class="tag"><i class="bi bi-stars"></i>
About us
</span>
				<h2 class="mb-3">
				Lifestyle Dental and Implant Clinic
				</h2>
				<p class="text-l-justify">
			Lifestyle Dental and Implant Clinic in Fulwood provides trusted, high-quality dental care for patients of all ages. Our experienced team focuses on gentle, pain-free treatments while using the latest technology to ensure accurate diagnosis and effective results. From routine check-ups and hygiene care to cosmetic treatments, orthodontics, and dental implants, we offer a full range of services tailored to your needs. We understand that visiting the dentist can be stressful, so we provide a relaxing environment and sedation options for nervous patients. With flexible payment plans, evening appointments, and a personal approach, Lifestyle Dental is committed to creating beautiful, healthy smiles that last a lifetime.
				</p>

				
				<a href="" class="btn main-cta mt-0"><span>Discover More<i class="fas fa-arrow-right"></i></span></a>
			</div>
		</div>
	</div>
</section>

<section class="service-cards-section sp-pt-pb text-center" style="background-color: #efefef;">
  <div class="container">
      <span class="tag text-center"><i class="bi bi-stars"></i> Healthy Smiles Made Easy</span>
    <h2 class="mb-4">Comprehensive Dental Care For Everyone</h2>

    <!-- Owl carousel wrapper -->
    <div class="owl-carousel owl-theme service-cards-carousel">

      <div class="item">
        <a href="" class="service-cards" style="background-image: url(https://www.lifestyledental.co.uk/demo/image/services/cosmetic-dentistry.webp);">
          <div class="service-card-inner">
            <h5>Cosmetic Dentistry <i class="fas fa-arrow-right"></i></h5>
            <p class="text-white">Transform your teeth with veneers, whitening, and contouring for a confident, natural-looking smile.</p>
          </div>
        </a>
      </div>

      <div class="item">
        <a href="" class="service-cards" style="background-image: url(https://www.lifestyledental.co.uk/demo/image/services/orthodontics.webp);">
          <div class="service-card-inner">
            <h5>Clear Orthodontics <i class="fas fa-arrow-right"></i></h5>
            <p  class="text-white">Invisible braces provide comfortable, removable solutions to align teeth without affecting your daily appearance.</p>
          </div>
        </a>
      </div>

      <div class="item">
        <a href="" class="service-cards" style="background-image: url(https://www.lifestyledental.co.uk/demo/image/services/dental-implants.webp);">
          <div class="service-card-inner">
            <h5>Dental Implants <i class="fas fa-arrow-right"></i></h5>
            <p  class="text-white">Replace missing teeth with strong, natural-looking implants that restore function and improve overall oral health.</p>
          </div>
        </a>
      </div>

      <div class="item">
        <a href="" class="service-cards" style="background-image: url(https://www.lifestyledental.co.uk/demo/image/services/teeth-whitening.webp);">
          <div class="service-card-inner">
            <h5>Teeth Whitening <i class="fas fa-arrow-right"></i></h5>
            <p  class="text-white">Professional teeth whitening removes stains safely and effectively for a whiter, brighter smile.</p>
          </div>
        </a>
      </div>

      <div class="item">
        <a href="" class="service-cards" style="background-image: url(https://www.lifestyledental.co.uk/demo/image/services/crowns-bridges.webp);">
          <div class="service-card-inner">
            <h5>Crowns & Bridges <i class="fas fa-arrow-right"></i></h5>
            <p  class="text-white">Durable crowns and bridges repair damaged or missing teeth, maintaining your bite and smile aesthetics.</p>
          </div>
        </a>
      </div>

      <div class="item">
        <a href="" class="service-cards" style="background-image: url(https://www.lifestyledental.co.uk/demo/image/services/dentures.webp);">
          <div class="service-card-inner">
            <h5>Dentures <i class="fas fa-arrow-right"></i></h5>
            <p  class="text-white">Custom dentures offer removable, comfortable replacements for missing teeth, improving chewing and speaking ability.</p>
          </div>
        </a>
      </div>
<div class="item">
        <a href="" class="service-cards" style="background-image: url(https://www.lifestyledental.co.uk/demo/image/services/sedation-dentistry.webp);">
          <div class="service-card-inner">
            <h5>Sedation Dentistry <i class="fas fa-arrow-right"></i></h5>
            <p  class="text-white">Gentle sedation helps nervous patients feel calm and comfortable during dental procedures.</p>
          </div>
        </a>
      </div>
      <div class="item">
        <a href="" class="service-cards" style="background-image: url(https://www.lifestyledental.co.uk/demo/image/services/emergency-dentistry.webp);">
          <div class="service-card-inner">
            <h5>Emergency Dentistry <i class="fas fa-arrow-right"></i></h5>
            <p  class="text-white">Prompt treatment for dental emergencies ensures fast relief and prevents further complications.</p>
          </div>
        </a>
      </div>
    </div> <!-- /.owl-carousel -->

    
  </div>
</section>
<section class="meet-the-team bg-white sp-pt-pb">
	<div class="container ">
		<div class="row ">
		
			<div class="col-12 col-lg-6 meet-the-team-main md-mb-30">
			    <span class="tag"><i class="bi bi-stars"></i>
Step-By-Step Smile Transformation
</span>
				<h3 class="mb-3">
				Our Simple Dental Care Process
				</h3>
				<p class="text-l-justify">
			Our dental process is designed for comfort, precision, and predictable results for every patient.
				</p>
<ul class="fa-ul text-left my-4 " style="color: #000;">
									<li class="text-l-justify">
										<span class="fa-li"><i class="fas fa-check"></i></span> <b>Initial Consultation:</b> We assess your dental concerns and explain treatment options clearly for informed decision-making.								</li>
								</ul>
															<ul class="fa-ul text-left my-4" style="color: #000;">
									<li class="text-l-justify">
										<span class="fa-li"><i class="fas fa-check"></i></span> <b>Treatment Planning:</b> Each plan is tailored to your needs using advanced diagnostics and patient preferences.									</li>
								</ul>
															<ul class="fa-ul text-left my-4" style="color: #000;">
									<li class="text-l-justify">
										<span class="fa-li"><i class="fas fa-check"></i></span> <b>Procedure Execution:</b> Our team performs treatments efficiently, ensuring comfort and precision throughout every dental procedure.									</li>
								</ul>
															<ul class="fa-ul text-left my-4" style="color: #000;">
									<li class="text-l-justify">
										<span class="fa-li"><i class="fas fa-check"></i></span> <b>Follow-Up Care:</b> We provide follow-ups to ensure results, adjust treatments, and maintain long-lasting oral health.									</li>
								</ul>
				
				<a href="" class="btn main-cta mt-0"><span>Book Consultation Now<i class="fas fa-arrow-right"></i></span></a>
			</div>
				<div class="col-12 col-lg-6  text-center">
			
				<img class="w-100" src="https://www.lifestyledental.co.uk/demo/image/about/dental-care-process.webp" alt="">
				
			</div>
		</div>
	</div>
</section>
<section class="meet-the-team text-center sp-pt-pb">
	<div class="container ">
     <span class="tag"><i class="bi bi-stars"></i>
Tailored Smiles For Everyone
</span>
				<h2 class="mb-5">
			Personalized Dental Care Services
				</h2>
    <div class="row">
  <div class="col-lg-3 col-md-6 md-mb-30">
    <div class="card" style=" border-radius: 20px;">
      <div class="card-body">
           <i class="bi bi-people-fill fs-2 me-2" style="font-size: 40px;"></i>
        <h4 class="card-title">Expert Team</h4>
        <p class="card-text">Our experienced dentists and specialists provide care using advanced techniques for every patient’s needs.</p>
       
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 md-mb-30">
    <div class="card" style=" border-radius: 20px;">
      <div class="card-body">
          <i class="bi bi-calendar2-check-fill fs-3 me-2" style="font-size: 40px;"></i>
        <h4 class="card-title">Gentle Approach</h4>
        <p class="card-text">We prioritize comfort and use sedation options for nervous patients during all dental procedures.</p>
       
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 md-mb-30">
    <div class="card" style=" border-radius: 20px;">
      <div class="card-body">
          <i class="bi bi-gear-fill fs-3 me-2" style="font-size: 40px;"></i>
        <h4 class="card-title">Modern Dental Tech</h4>
        <p class="card-text">We utilize the latest imaging and treatment technologies for accurate diagnoses and effective results.</p>
       
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6">
    <div class="card" style=" border-radius: 20px;">
      <div class="card-body">
           <i class="bi bi-wallet-fill fs-3 me-2" style="font-size: 40px;"></i>
        <h4 class="card-title">Flexible Plans</h4>
        <p class="card-text">Customized payment and financing plans make dental treatments accessible and stress-free for every patient.</p>
       
      </div>
    </div>
  </div>
</div></div>
</section>
<section class="meet-the-team bg-white  text-m-center sp-pt-pb">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-6 text-center md-mb-30">
			
				<img class="br-10 w-100" src="https://www.lifestyledental.co.uk/demo/image/about/experienced-preston-dentists.webp" alt="">
				
			</div>
			<div class="col-12 col-lg-6 meet-the-team-main">
			    <span class="tag"><i class="bi bi-stars"></i>
Caring Expertise You Trust
</span>
				<h2 class="mb-3">
			Fulwood Dental Experts
				</h2>
				<p class="text-l-justify">
		Our dentists provide compassionate, high-quality care tailored to every patient’s needs. Each treatment begins with a thorough assessment, ensuring you receive the most suitable and effective dental solutions. From routine check-ups to advanced cosmetic and restorative procedures, our team delivers precise, gentle, and reliable care at every stage. We focus on creating a comfortable environment where patients feel understood, supported, and reassured throughout their visit. Using modern technology and up-to-date techniques, we aim to deliver long-lasting oral health and confident smiles. Whether you’re seeking preventive care, smile enhancement, or treatment for dental issues, our dedicated dentists are committed to delivering exceptional results with a personalised approach. Your comfort, wellbeing, and satisfaction remain our top priorities.
				</p>

				
				<a href="" class="btn main-cta mt-0"><span>Book Appointment Now<i class="fas fa-arrow-right"></i></span></a>
			</div>
		</div>
	</div>
</section>
<?php get_template_part('_components/footer-finance-form'); ?>
<?php if (isset($_GET['dev2'])) {
	get_template_part('_components/latest-news');
} ?>
<section class="meet-the-team  text-m-center sp-pt-pb">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12 col-lg-5 text-center md-mb-30">
			
				<img class="br-10 w-100" src="https://www.lifestyledental.co.uk/demo/image/about/tooth-replacement-implants.webp" alt="">
				
			</div>
			<div class="col-12 col-lg-7 meet-the-team-main">
			    <span class="tag"><i class="bi bi-stars"></i>
Secure, Strong, Natural Results
</span>
				<h3 class="mb-3">
		Reliable Tooth Replacement Implants
				</h3>
				<p class="text-l-justify">
	Dental implants offer a permanent, reliable solution for replacing missing teeth and restoring full function to your smile. Using advanced technology and precision planning, implants are placed securely into the jawbone to create a strong foundation for natural-looking crowns. They look, feel, and function just like real teeth, allowing you to eat, speak, and smile with confidence. Our implant process includes a detailed consultation, digital imaging, and a personalised treatment plan tailored to your unique needs. Whether replacing a single tooth, multiple teeth, or supporting full-arch restorations, our team ensures comfort, accuracy, and long-lasting results. With expert care and modern techniques, dental implants deliver exceptional durability and improve overall oral health.
				</p>

				
				<a href="" class="btn main-cta mt-0"><span>Book Appointment Now<i class="fas fa-arrow-right"></i></span></a>
			</div>
		</div>
	</div>
</section>
<section class="meet-the-team bg-white sp-pt-pb">
	<div class="container ">
		<div class="row ">
		
			<div class="col-12 col-lg-7 meet-the-team-main md-mb-30">
			    <span class="tag"><i class="bi bi-stars"></i>
Precision, Comfort, Better Results
</span>
				<h3 class="mb-3">
				Advanced Dental Technology Solutions
				</h3>
			
<ul class="fa-ul text-left my-3" style="color: #000;">
									<li class="text-l-justify">
										<span class="fa-li"><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" style="    color: #d14480;">
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8.032 12 1.984 1.984 4.96-4.96m4.55 5.272.893-.893a1.984 1.984 0 0 0 0-2.806l-.893-.893a1.984 1.984 0 0 1-.581-1.403V7.04a1.984 1.984 0 0 0-1.984-1.984h-1.262a1.983 1.983 0 0 1-1.403-.581l-.893-.893a1.984 1.984 0 0 0-2.806 0l-.893.893a1.984 1.984 0 0 1-1.403.581H7.04A1.984 1.984 0 0 0 5.055 7.04v1.262c0 .527-.209 1.031-.581 1.403l-.893.893a1.984 1.984 0 0 0 0 2.806l.893.893c.372.372.581.876.581 1.403v1.262a1.984 1.984 0 0 0 1.984 1.984h1.262c.527 0 1.031.209 1.403.581l.893.893a1.984 1.984 0 0 0 2.806 0l.893-.893a1.985 1.985 0 0 1 1.403-.581h1.262a1.984 1.984 0 0 0 1.984-1.984V15.7c0-.527.209-1.031.581-1.403Z"/>
</svg>
</span> <b>Digital X-Rays:</b> Provide detailed images with reduced radiation, allowing accurate diagnosis and safer treatment planning for every patient.								</li>
								</ul>
															<ul class="fa-ul text-left my-3" style="color: #000;">
									<li class="text-l-justify">
										<span class="fa-li"><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" style="    color: #d14480;">
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8.032 12 1.984 1.984 4.96-4.96m4.55 5.272.893-.893a1.984 1.984 0 0 0 0-2.806l-.893-.893a1.984 1.984 0 0 1-.581-1.403V7.04a1.984 1.984 0 0 0-1.984-1.984h-1.262a1.983 1.983 0 0 1-1.403-.581l-.893-.893a1.984 1.984 0 0 0-2.806 0l-.893.893a1.984 1.984 0 0 1-1.403.581H7.04A1.984 1.984 0 0 0 5.055 7.04v1.262c0 .527-.209 1.031-.581 1.403l-.893.893a1.984 1.984 0 0 0 0 2.806l.893.893c.372.372.581.876.581 1.403v1.262a1.984 1.984 0 0 0 1.984 1.984h1.262c.527 0 1.031.209 1.403.581l.893.893a1.984 1.984 0 0 0 2.806 0l.893-.893a1.985 1.985 0 0 1 1.403-.581h1.262a1.984 1.984 0 0 0 1.984-1.984V15.7c0-.527.209-1.031.581-1.403Z"/>
</svg>
</span> <b>Intraoral Scanners:</b> Capture precise digital impressions, improving comfort, speed, and accuracy during orthodontic and restorative procedures.									</li>
								</ul>
															<ul class="fa-ul text-left my-3" style="color: #000;">
									<li class="text-l-justify">
										<span class="fa-li"><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" style="    color: #d14480;">
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8.032 12 1.984 1.984 4.96-4.96m4.55 5.272.893-.893a1.984 1.984 0 0 0 0-2.806l-.893-.893a1.984 1.984 0 0 1-.581-1.403V7.04a1.984 1.984 0 0 0-1.984-1.984h-1.262a1.983 1.983 0 0 1-1.403-.581l-.893-.893a1.984 1.984 0 0 0-2.806 0l-.893.893a1.984 1.984 0 0 1-1.403.581H7.04A1.984 1.984 0 0 0 5.055 7.04v1.262c0 .527-.209 1.031-.581 1.403l-.893.893a1.984 1.984 0 0 0 0 2.806l.893.893c.372.372.581.876.581 1.403v1.262a1.984 1.984 0 0 0 1.984 1.984h1.262c.527 0 1.031.209 1.403.581l.893.893a1.984 1.984 0 0 0 2.806 0l.893-.893a1.985 1.985 0 0 1 1.403-.581h1.262a1.984 1.984 0 0 0 1.984-1.984V15.7c0-.527.209-1.031.581-1.403Z"/>
</svg>
</span> <b>3D Imaging:</b> Offers high-resolution views for implants and complex treatments, ensuring predictable outcomes and enhanced patient satisfaction.								</li>
								</ul>
															<ul class="fa-ul text-left my-3" style="color: #000;">
									<li class="text-l-justify">
										<span class="fa-li"><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" style="    color: #d14480;">
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8.032 12 1.984 1.984 4.96-4.96m4.55 5.272.893-.893a1.984 1.984 0 0 0 0-2.806l-.893-.893a1.984 1.984 0 0 1-.581-1.403V7.04a1.984 1.984 0 0 0-1.984-1.984h-1.262a1.983 1.983 0 0 1-1.403-.581l-.893-.893a1.984 1.984 0 0 0-2.806 0l-.893.893a1.984 1.984 0 0 1-1.403.581H7.04A1.984 1.984 0 0 0 5.055 7.04v1.262c0 .527-.209 1.031-.581 1.403l-.893.893a1.984 1.984 0 0 0 0 2.806l.893.893c.372.372.581.876.581 1.403v1.262a1.984 1.984 0 0 0 1.984 1.984h1.262c.527 0 1.031.209 1.403.581l.893.893a1.984 1.984 0 0 0 2.806 0l.893-.893a1.985 1.985 0 0 1 1.403-.581h1.262a1.984 1.984 0 0 0 1.984-1.984V15.7c0-.527.209-1.031.581-1.403Z"/>
</svg>
</span> <b>Laser Dentistry:</b> Enables gentle, minimally invasive treatments that reduce discomfort, bleeding, and recovery time for various procedures.									</li>
								</ul>
					<ul class="fa-ul text-left my-3" style="color: #000;">
									<li class="text-l-justify">
										<span class="fa-li"><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" style="    color: #d14480;">
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8.032 12 1.984 1.984 4.96-4.96m4.55 5.272.893-.893a1.984 1.984 0 0 0 0-2.806l-.893-.893a1.984 1.984 0 0 1-.581-1.403V7.04a1.984 1.984 0 0 0-1.984-1.984h-1.262a1.983 1.983 0 0 1-1.403-.581l-.893-.893a1.984 1.984 0 0 0-2.806 0l-.893.893a1.984 1.984 0 0 1-1.403.581H7.04A1.984 1.984 0 0 0 5.055 7.04v1.262c0 .527-.209 1.031-.581 1.403l-.893.893a1.984 1.984 0 0 0 0 2.806l.893.893c.372.372.581.876.581 1.403v1.262a1.984 1.984 0 0 0 1.984 1.984h1.262c.527 0 1.031.209 1.403.581l.893.893a1.984 1.984 0 0 0 2.806 0l.893-.893a1.985 1.985 0 0 1 1.403-.581h1.262a1.984 1.984 0 0 0 1.984-1.984V15.7c0-.527.209-1.031.581-1.403Z"/>
</svg>
</span> <b>Same-Day Restorations:</b> Advanced systems create crowns and restorations quickly, providing faster, efficient care without multiple appointments.									</li>
								</ul>
				<a href="" class="btn main-cta mt-0"><span>Book Consultation Now<i class="fas fa-arrow-right"></i></span></a>
			</div>
				<div class="col-12 col-lg-5  text-center">
			
				<img class="w-100" src="https://www.lifestyledental.co.uk/demo/image/about/advanced-dental-technology-solutions.webp" alt="">
				
			</div>
		</div>
	</div>
</section>
<section class="meet-the-team text-center sp-pt-pb" style="background-color:#0096ad;">
	<div class="container ">
     <span class="tag"><i class="bi bi-stars"></i>
Trusted Care You Deserve
</span>
				<h3 class="mb-5 text-white">
		Why Choose Our Fulwood Clinic
				</h3>
    <div class="row">
  <div class="col-lg-4 col-md-6 md-mb-30">
    <div class="card br-radius-color-br">
      <div class="card-body">
           <i class="bi bi-people-fill fs-2 me-2" style="font-size: 40px;"></i>
        <h4 class="card-title">Highly Skilled Dentists</h4>
        <p class="card-text">Our experienced dental team delivers precise, gentle treatments using advanced techniques to ensure excellent outcomes for every patient.</p>
       
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-6 md-mb-30">
    <div class="card br-radius-color-br">
      <div class="card-body">
          <i class="bi bi-gear-fill fs-3 me-2" style="font-size: 40px;"></i>
        <h4 class="card-title">Modern Digital Technology</h4>
        <p class="card-text">We use state-of-the-art equipment for accurate diagnosis, comfortable procedures, and predictable results that enhance your oral health.</p>
       
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-6 md-mb-30">
    <div class="card br-radius-color-br">
      <div class="card-body">
          <i class="bi bi-calendar2-check-fill fs-3 me-2" style="font-size: 40px;"></i>
        <h4 class="card-title">Personalised Care Plans</h4>
        <p class="card-text">Each treatment plan is tailored to your needs, ensuring comfort, clarity, and long-lasting results throughout your dental journey.</p>
       
      </div>
    </div>
  </div>
  
</div></div>
</section>

<section class="meet-the-team bg-white text-m-center sp-pt-pb">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-5  text-center md-mb-30">
			
				<img class="w-100 br-10" src="https://www.lifestyledental.co.uk/demo/image/about/affordable-dental-care-services.webp" alt="">
				
			</div>
			<div class="col-12 col-lg-7 meet-the-team-main">
			    <span class="tag"><i class="bi bi-stars"></i>
Quality Care Made Affordable
</span>
				<h3 class="mb-3">
			Affordable Dental Care Services
				</h3>
				<p class="text-l-justify">
		Our affordable dental services are designed to give every patient access to high-quality care without financial stress. We believe great oral health should be achievable for everyone, which is why we offer transparent pricing, flexible plans, and cost-effective treatment options. Whether you need routine check-ups, cosmetic improvements, or advanced restorative procedures, our team ensures you receive exceptional care at a price that suits your budget. Each treatment plan is customised to your needs, helping you achieve long-lasting dental health without compromise. With modern technology and a patient-focused approach, we deliver reliable results while keeping costs manageable. Experience comfortable, professional, and affordable dentistry designed around your wellbeing and peace of mind.
				</p>

				
				<a href="" class="btn main-cta mt-0"><span>Book Now<i class="fas fa-arrow-right"></i></span></a>
			</div>
			
		</div>
	</div>
</section>
<section class="meet-the-team text-m-center sp-pt-pb">
	<div class="container ">
		<div class="row ">
		
			<div class="col-12 col-lg-6 meet-the-team-main md-mb-30">
			    <span class="tag"><i class="bi bi-stars"></i>
Comfort Care For Everyone
</span>
				<h3 class="mb-3">
			Gentle Dental Care For All Ages
				</h3>
				<p class="text-l-justify">
		Lifestyle Dental and Implant Clinic in Fulwood provides friendly, reliable dental care for patients of all ages. From young children attending their first check-up to adults seeking advanced treatments, our team ensures every patient feels comfortable, supported, and well-informed. We focus on preventive care, helping families maintain healthy teeth and gums through regular visits and personalised guidance. For teens and adults, we offer modern orthodontics, cosmetic treatments, and restorative solutions designed to enhance both confidence and oral health. Older adults benefit from our expert implant and denture services, restoring function and comfort. With gentle care, advanced technology, and a patient-first approach, we make dental visits simple, reassuring, and suitable for every stage of life.
				</p>

				
				<a href="" class="btn main-cta mt-0"><span>Book Consultation Now<i class="fas fa-arrow-right"></i></span></a>
			</div>
				<div class="col-12 col-lg-6  text-center">
			
				<img class="br-10 w-100" src="https://www.lifestyledental.co.uk/demo/image/about/family-friendly-dental-care.webp" alt="">
				
			</div>
		</div>
	</div>
</section>
<?php get_template_part('_components/video-testimonials'); ?>

<section class="sp-pt-pb text-center">
    <div class="container ">
         <span class="tag text-center"><i class="bi bi-stars"></i>
Real Stories, Real Smiles
</span>
				<h3 class="mb-4 text-center">
			What Our Patients Say
				</h3>
	<?php echo do_shortcode('[trustindex no-registration=google]'); ?>
</div>
</section>

<section class="meet-the-team text-m-center sp-pt-pb">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-5  text-center md-mb-30">
			
				<img class="w-100 br-10" src="https://www.lifestyledental.co.uk/demo/image/about/invisible-removable-braces.webp" alt="">
				
			</div>
			<div class="col-12 col-lg-7 meet-the-team-main">
			    <span class="tag"><i class="bi bi-stars"></i>
Straighten Teeth Discreetly Comfortably
</span>
				<h3 class="mb-3">
		Invisible Removable Braces For Adults
				</h3>
				<p class="text-l-justify">
	Lifestyle Dental and Implant Clinic in Fulwood offers invisible removable braces, providing adults with a discreet, convenient way to straighten their teeth. These modern aligners are custom-made to fit comfortably and gradually move teeth into the desired position without the appearance of traditional braces. Patients can remove them during meals and while brushing, ensuring better oral hygiene and flexibility in daily life. Our team creates personalised treatment plans based on detailed digital scans, guaranteeing precision and predictable results. Invisible removable braces are ideal for individuals seeking subtle orthodontic treatment without compromising aesthetics. With professional monitoring and advanced technology, we ensure your teeth shift safely and efficiently, giving you a confident, beautiful smile at the end of treatment.
				</p>

				
				<a href="" class="btn main-cta mt-0"><span>Book Now<i class="fas fa-arrow-right"></i></span></a>
			</div>
			
		</div>
	</div>
</section>

<section class="guarantee-banner text-center">
	<div class="container py-5">
		<div class="row justify-content-center align-items-center">
			<div class="col-12 col-lg-8 inverted text-center">
			    	<span class="tag text-white"><i class="bi bi-stars"></i>
  Start Your Journey Now
</span>
				<h4 class="inverted ">
				Book Your Smile Transformation Today
				</h4>
			<p class="text-white">Take the first step towards a confident, healthy smile. Our expert team in Fulwood is ready to provide personalised dental care tailored to your needs. Don’t wait any longer!</p>
				<a href="" class="btn main-cta">Arrange my consultation<i class="fas fa-arrow-right"></i></a>
			</div>

		</div>
	</div>
</section>

<script src="https://unpkg.com/scrollreveal"></script>

<section class="meet-the-team  sp-pt-pb">
	<div class="container">
		<div class="row">
		
			<div class="col-12 col-lg-6 meet-the-team-main md-mb-30">
			    <span class="tag"><i class="bi bi-stars"></i>
FAQ's
</span>
				<h4 class="mb-3">
			Frequently Asked Questions
				</h4>
				<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h5 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
       How often should I visit the dentist?
      </button>
    </h5>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body"><p>
       Regular check-ups every six months help maintain oral health, prevent issues, and ensure early treatment when needed.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h5 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        What treatments are available for missing teeth?
      </button>
    </h5>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body"><p>
       We offer dental implants, bridges, and dentures, providing strong, natural-looking solutions tailored to your individual needs.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h5 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
       Are braces suitable for adult patients also?
      </button>
    </h5>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body"><p>
       Yes, modern orthodontic options like clear aligners and ceramic braces effectively straighten adult teeth comfortably and discreetly.</p>
      </div>
    </div>
  </div>
  
  <div class="accordion-item">
    <h5 class="accordion-header" id="headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
       Does teeth whitening damage natural tooth enamel?
      </button>
    </h5>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body"><p>
      Professional whitening treatments are safe, controlled, and designed to brighten teeth without harming enamel or causing sensitivity.</p>
      </div>
    </div>
  </div>
   <div class="accordion-item">
    <h5 class="accordion-header" id="headingFive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
       What should I do during dental emergencies?
      </button>
    </h5>
    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
      <div class="accordion-body"><p>
    Contact our clinic immediately for guidance, fast assessment, and prompt treatment to relieve pain and prevent complications.</p>
      </div>
    </div>
  </div>
</div>
			</div>
				<div class="col-12 col-lg-6  text-center">
			<a href="https://maps.app.goo.gl/jG7oWwsjRZa7DDYZ9" target="_blank">
				<img class="br-10 w-100" src="https://www.lifestyledental.co.uk/demo/image/about/lifestyle-dental-implant-clinic-map.webp" alt="" style="box-shadow: 1px 2px 10px #000;"></a>
				
			</div>
		</div>
	</div>
</section>

<a class="btn d-sm-none main-cta" id="floating-btn" onclick="toggleForm()">Arrange my consultation</a>
<script>
(function(){
  // helper to load script
  function loadScript(url, cb){
    var s = document.createElement('script');
    s.src = url;
    s.onload = cb || function(){};
    s.onerror = function(){ console.error('Failed to load: ' + url); cb && cb(); };
    document.head.appendChild(s);
  }

  // init function that wires accordion buttons to bootstrap Collapse API
  function initAccordion() {
    if (typeof bootstrap === 'undefined' || !bootstrap.Collapse) {
      console.warn('Bootstrap Collapse not available — accordion fallback cannot initialize.');
      return;
    }

    // ensure every collapse element has a Collapse instance (but do not toggle immediately)
    document.querySelectorAll('.accordion .accordion-collapse').forEach(function(el){
      if (!bootstrap.Collapse.getInstance(el)) {
        new bootstrap.Collapse(el, { toggle: false });
      }
    });

    // Wire buttons (handles cases where data-bs-* not processed)
    document.querySelectorAll('.accordion .accordion-button').forEach(function(btn){
      // avoid adding duplicate listeners
      if (btn.dataset._accordionInit) return;
      btn.dataset._accordionInit = '1';

      btn.addEventListener('click', function(e){
        // determine target ID/selector
        var targetSelector = btn.getAttribute('data-bs-target') || ('#' + (btn.getAttribute('aria-controls') || ''));
        if (!targetSelector) {
          // fallback: try aria-controls, or nearest .accordion-item .accordion-collapse
          var item = btn.closest('.accordion-item');
          var fallback = item && item.querySelector('.accordion-collapse');
          if (!fallback) return;
          var target = fallback;
        } else {
          var target = document.querySelector(targetSelector);
          if (!target) return;
        }

        // parent accordion to enforce single-open behaviour
        var parentAccordion = target.closest('.accordion');
        // get or create collapse instance
        var instance = bootstrap.Collapse.getInstance(target) || new bootstrap.Collapse(target, { toggle: false });

        // if target is shown -> hide it
        if (target.classList.contains('show')) {
          instance.hide();
          return;
        }

        // hide other shown panels within same accordion (data-bs-parent behaviour)
        if (parentAccordion) {
          parentAccordion.querySelectorAll('.accordion-collapse.show').forEach(function(openEl){
            if (openEl !== target) {
              var inst2 = bootstrap.Collapse.getInstance(openEl) || new bootstrap.Collapse(openEl, { toggle: false });
              inst2.hide();
            }
          });
        }

        // show target
        instance.show();
      });
    });

    console.info('Accordion fallback initialized.');
  }

  // If bootstrap (bundle) not present, load it then init
  if (typeof bootstrap === 'undefined' || !bootstrap.Collapse) {
    loadScript('https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', function(){
      // give it a tick to register
      setTimeout(initAccordion, 50);
    });
  } else {
    // already available
    initAccordion();
  }
})();
</script>
<script>
	jQuery(function($) {

		//Mobile footer button
		var isScrolling;

		$(window).on('scroll', function() {
			var y = $(this).scrollTop();
			window.clearTimeout(isScrolling);

			isScrolling = setTimeout(function() {
				if (y > 300 && y < 4500) {
					$("#floating-btn").addClass("show");
				}
				$(window).on('scroll', function() {
					$("#floating-btn").removeClass("show");
				})
			}, 500);
		});

		var $ = jQuery.noConflict()
		$(window).scroll(function() {
			var scroll = $(this).scrollTop() - 2100
			$(".parallax").css({
				"background-position": "0px " + scroll / 5 + "px"
			})
		})

		var $ = jQuery.noConflict()
		$(window).scroll(function() {
			var scroll = $(this).scrollTop() - 1580
			$(".parallax2").css({
				"background-positionY": scroll / 10 + "px"
			})
		})


	});



	function readMore() {
		var hiddenText = document.getElementById("meet-the-team-read-more-block");
		var btn = document.getElementById("meet-the-team-read-more-btn");
		hiddenText.classList.toggle("show-more");
		if (btn.innerHTML === "Less") {
			btn.innerHTML = "More";
		} else {
			btn.innerHTML = "Less";
		};
		btn.classList.toggle("less");
	}

	var form = document.getElementById("finance-popup-form");
	form.addEventListener("submit", function(e) {

		if (document.getElementById('sirname').value == "") {

			dataLayer.push({
				'event': 'form-submission',
				'form_name': 'finance-popup'
			});

			document.getElementById('finance-popup-form').action = 'https://lifestyledental.infusionsoft.com/app/form/process/4d1df02562f3f1a28fc3f4a72528e7e5';
		}

	});

	AOS.init({
		once: true,
	});
</script>


    <!-- jQuery + Owl JS (include once, before this script) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
jQuery(document).ready(function($){
  $('.service-cards-carousel').owlCarousel({
    loop: true,
    margin: 12,
    nav: true,            // set to false if you don't want arrows
    dots: true,
    autoplay: true,
    autoplayTimeout: 3500,
    autoplayHoverPause: true,
    navText: ['‹','›'],
    responsive:{
      0:   { items: 1 },
      576: { items: 2 },
      992: { items: 3 }
    }
  });

  // Optional: prevent links from being activated while swiping
  var dragging = false;
  $('.service-cards-carousel').on('drag.owl.carousel translated.owl.carousel', function(e){
    dragging = (e.type === 'drag.owl.carousel');
  }).on('click', '.service-cards', function(e){
    if (dragging) { e.preventDefault(); }
  });
});
</script>
<?php get_footer(); ?>