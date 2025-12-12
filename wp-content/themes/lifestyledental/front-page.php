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
		font-size: 32px;
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
		height: 240px;
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
		height: 78px;
		position: absolute;
		bottom: 20px;
		right: 15px;
		left: 15px;
		transition: height 0.3s ease-in;
	}

	.service-cards:hover .service-card-inner {
		height: 188px;
	}

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
		font-size: 18px;
		line-height: 1.55;
		margin-bottom: 24px;
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

	.meet-the-team .meet-the-team-main .btn {
		background-color: #d04483;
		width: 350px;
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
			height: 70px;
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
			text-align: left;
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
			font-size: 24px;
		}

		.core__slider.big .wrapper .slide p,
		.icon-links {
			display: none;
		}

		.core__slider.big .wrapper .slide h1 {
			font-size: 24px;
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
			height: 88px;
			bottom: 26px;
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
			height: 90%;
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
			height: 104px;
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
			padding: 5px 10px;
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


<section class="home_hero_sec">
	<div class="home_hero_inner">
		<div class="home_hero_content_col">
			<h1>Trusted Dentists in Preston, Lancashire – Lifestyle Dental</h1>
			<p class="subheadline">Gentle, modern care for the whole family.</p>
			<p>The Lifestyle Dental team are dedicated to creating beautiful and healthy smiles for patients of all ages. We want you to have a smile that you are happy to show off.</p>
			<p>We offer both cosmetic and general dentistry treatments to allow you to maintain, restore and improve your smile. The latest technology aids us to effectively diagnose and treat a wide variety of problems.</p>
			<!-- <a href="tel:01772717316" class="btn btn-dark-pink">Secure Your No Obligation Consultation by Calling 01772 717316</a> -->
		</div>
		<div class="home_hero_form_col">
			<?php //get_template_part('_misc/consultation-form'); ?>
			<div class="infusion-form">
				<?php echo do_shortcode('[contact-form-7 id="309790f" title="Contact Form"]'); ?>
			</div>
		</div>
	</div>
	<div class="home_hero_icon_links">
		<div>
			<p><i class="far fa-star"></i>Google 5★ Rated</p>
		</div>
		<div>
			<p><i class="far fa-credit-card"></i>Affordable Payment Plans</p>
		</div>
		<div>
			<p><i class="far fa-clock"></i>Same-Day Appointments</p>
		</div>
		<div>
			<p><img src="/wp-content/uploads/2025/09/face-smile-beam-solid-full.svg">Gentle, Pain-Free Care</p>
		</div>
	</div>
</section>


<section class="service-cards-section">
	<div class="container">
		<h3 class="mb-4">
			How can we help?
		</h3>
		<div class="row mb-0 mb-md-5">
			<div class="col-6 col-lg-4 service-card-left">
				<a href="https://www.lifestyledental.co.uk/finance/" class="service-cards" style="background-image: url(https://www.lifestyledental.co.uk/wp-content/uploads/2021/05/Finance-box.jpg);">
					<div class="service-card-inner">
						<h5>
							Want to spread the cost of your dental care? <i class="fas fa-arrow-right"></i>
						</h5>
						<p>
							Our finance options make your payments more manageable, and help you toward getting the smile you’ve always wanted. Find out more
						</p>
					</div>
				</a>
			</div>
			<div class="col-6 col-lg-4 service-card-right">
				<a href="https://www.lifestyledental.co.uk/invisible-braces/" class="service-cards" style="background-image: url(https://www.lifestyledental.co.uk/wp-content/uploads/2021/11/Straight_teeth-min.jpg);">
					<div class="service-card-inner">
						<h5>
							Looking for an invisible, removable brace? <i class="fas fa-arrow-right"></i>
						</h5>
						<p>
							The Inman Aligner is barely visible and is designed to correct crooked teeth quickly and effectively. Find out more
						</p>
					</div>
				</a>
			</div>
			<div class="col-6 col-lg-4 service-card-left">
				<a href="https://www.lifestyledental.co.uk/preston-dental-implants-fulwood/" class="service-cards" style="background-image: url(https://www.lifestyledental.co.uk/wp-content/uploads/2021/06/missing-teeth.jpg);">
					<div class="service-card-inner">
						<h5>
							Want a permanent solution for missing teeth? <i class="fas fa-arrow-right"></i>
						</h5>
						<p>
							You can restore your former natural smile with our effective Dental Implants. Find out more
						</p>
					</div>
				</a>
			</div>
			<div class="col-6 col-lg-4 service-card-right">
				<a href="https://www.lifestyledental.co.uk/preston-teeth-whitening-dentists/" class="service-cards" style="background-image: url(https://www.lifestyledental.co.uk/wp-content/uploads/2021/06/broken-teeth.jpg);">
					<div class="service-card-inner">
						<h5>
							Want a whiter, brighter smile? <i class="fas fa-arrow-right"></i>
						</h5>
						<p>
							We offer long-lasting teeth whitening treatments to suit all patients.
						</p>
					</div>
				</a>
			</div>
			<div class="col-6 col-lg-4 service-card-left">
				<a href="https://www.lifestyledental.co.uk/dental-phobia/" class="service-cards" style="background-image: url(https://www.lifestyledental.co.uk/wp-content/uploads/2021/11/Nervous_patient-min.jpg);">
					<div class="service-card-inner">
						<h5>
							Are you a nervous patient? <i class="fas fa-arrow-right"></i>
						</h5>
						<p>
							We can give you all the help and guidance you need to feel calm and relaxed with our range of sedation options. Find out more
						</p>
					</div>
				</a>
			</div>
			<div class="col-6 col-lg-4 service-card-right">
				<a href="https://www.lifestyledental.co.uk/preston-porcelain-veneers-dentists/" class="service-cards" style="background-image: url(https://www.lifestyledental.co.uk/wp-content/uploads/2021/11/Discoloured_teeth-min.jpg);">
					<div class="service-card-inner">
						<h5>
							Looking to transform your smile? <i class="fas fa-arrow-right"></i>
						</h5>
						<p>
							Our porcelain veneers look natural and healthy and will help restore your confidence. Find out more
						</p>
					</div>
				</a>
			</div>

		</div>

		<div class="d-md-none py-3">
			<p>
				<strong>The Lifestyle Dental team are dedicated to creating beautiful and healthy smiles for patients of all ages. We want you to have a smile that you are happy to show off.</strong>
			</p>

			<p>
				We offer both cosmetic and general dentistry treatments to allow you to maintain, restore and improve your smile. The latest technology aids us to effectively diagnose and treat a wide variety of problems.
			</p>
		</div>
	</div>
</section>


<?php get_template_part('_components/video-testimonials'); ?>


<div class="container py-4">
	<?php echo do_shortcode('[trustindex no-registration=google]'); ?>
</div>


<section class="meet-the-team">
	<div class="container py-5">
		<div class="row">
			<div class="col-12 col-md-4 meet-the-team-sidebar text-center">
				<h4 class="mb-4 d-md-none text-left">
					Meet our principle dentist
				</h4>
				<div class="parallax"></div>
				<img class="meet-the-team-img" src="https://www.lifestyledental.co.uk/wp-content/uploads/2021/11/Meet_dr_nadim-min.jpg" alt="">
				<div class="d-none d-md-block">
					<strong>I was a finalist at</strong>
					<img data-src="https://www.lifestyledental.co.uk/wp-content/uploads/2021/04/Finalist_logos.jpg" class="lazyload" alt="">
				</div>
			</div>
			<div class="col-12 col-md-8 meet-the-team-main">
				<h4 class="mb-4 d-none d-md-block">
					Meet our principle dentist
				</h4>
				<p>
					<strong>Dr. Nadim Majid qualified from Liverpool Dental school in 2001 and since then has worked in Lancashire for a number of years. He decided to undertake a career in
						dentistry as he found it was a good mix of science and art and also gave him the ability to help people and make a difference for them.</strong>
					<a id="meet-the-team-read-more-btn" class="d-md-none" onclick="readMore()">More</a>
				</p>

				<div id="meet-the-team-read-more-block">
					<p>
						This really hit home when he worked in a nursing home for a short time and actually saw the impact upon the health and well being of patients whom had lost their
						teeth the impact was significant on the general health and well being and this is something Dr. Majid wanted to make sure he helped others avoid.
					</p>
					<p>
						Dr. Majid is trained in hypnosis, sedation for nervous people, dental implants as well as braces. He lives in Lancashire with his two children (twins) and his wife
						who is a teacher. Dr. Majid has always and will continue to be focused on producing top quality services that his patients have come to expect and appreciate.
					</p>
				</div>
				<a href="https://www.lifestyledental.co.uk/about-preston-dentists/" class="btn main-cta">Meet our team<i class="fas fa-arrow-right"></i></a>
			</div>
		</div>
	</div>
</section>

<section class="guarantee-banner">
	<div class="container py-5">
		<div class="row">
			<div class="col-12 inverted text-center">
				<h4 class="inverted ">
					Our promise to you
				</h4>
				<ul class="fa-ul text-left my-4">
					<li>
						<span class="fa-li"><i class="fas fa-check"></i></span> Dental implants guaranteed for 5 years*
					</li>
					<li>
						<span class="fa-li"><i class="fas fa-check"></i></span> Crowns and bridgework guaranteed for 5 years*
					</li>
					<li>
						<span class="fa-li"><i class="fas fa-check"></i></span> Professional & relaxing environment
					</li>
					<li>
						<span class="fa-li"><i class="fas fa-check"></i></span> Cutting edge technology including Imaging Software (allowing you to preview the end result of your treatment)
					</li>
				</ul>
				<a href="https://www.lifestyledental.co.uk/dentists-in-fulwood-preston/#open-form" class="btn main-cta">Arrange my consultation<i class="fas fa-arrow-right"></i></a>
			</div>

		</div>
	</div>
</section>

<section>
	<div class="container py-5 info-links">
		<h3 class="mb-4">
			Want to find out more?
		</h3>
		<div class="row">
			<div class="col-12 col-md-4 info-link-images">
				<a href="https://www.lifestyledental.co.uk/preston-dental-fees-fulwood/">
					<img data-src="https://www.lifestyledental.co.uk/wp-content/uploads/2021/11/Special_offers-min.jpg" class="lazyload" alt="">
					<div>
						Special Offers <i class="fas fa-arrow-right"></i>
					</div>
				</a>
			</div>
			<div class="col-12 col-md-4 info-link-images">
				<a href="https://www.lifestyledental.co.uk/about-preston-dentists/">
					<img data-src="https://www.lifestyledental.co.uk/wp-content/uploads/2021/11/Meet_our_team-min.jpg" class="lazyload" alt="">
					<div>
						Meet Our Team <i class="fas fa-arrow-right"></i>
					</div>
				</a>
			</div>
			<div class="col-12 col-md-4 info-link-images">
				<a href="https://www.lifestyledental.co.uk/referrals/">
					<img data-src="https://www.lifestyledental.co.uk/wp-content/uploads/2021/11/Referral-min.jpg" class="lazyload" alt="">
					<div>
						Do you have a referral? <i class="fas fa-arrow-right"></i>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>

<?php get_template_part('_components/footer-finance-form'); ?>
<?php if (isset($_GET['dev2'])) {
	get_template_part('_components/latest-news');
} ?>

<script src="https://unpkg.com/scrollreveal"></script>



<a class="btn d-sm-none main-cta" id="floating-btn" onclick="toggleForm()">Arrange my consultation</a>

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


<?php get_footer(); ?>