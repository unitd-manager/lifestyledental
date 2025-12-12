<?php
// Template Name: Services
?>

<?php
get_header();

if (!is_page(4679)) {
	get_template_part('_includes/navigation');
}

if (is_page(4679)) {
	get_template_part('_includes/usp-bar');
}
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
		width: 100vw;
	}

	.popup-finance-form.open .gradient-form {
		display: block;
	}

	.core__slider {
		margin-bottom: 1rem;
	}

	.core__slider.big {
		background-color: #eaeaea;
		height: 566px;
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
		padding-top: 3rem;
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

	.core__slider .wrapper.grey-bg .text p {
		color: #ffffff;
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

	.contact-form-banner.parallax2 {
		background-image: url(https://www.lifestyledental.co.uk/wp-content/uploads/2021/04/Finance.png);
		background-repeat: no-repeat;
		background-position-x: 90%;
		background-position-y: 100%;
	}

	#floating-btn.main-cta {
		background-color: #ea5400;
		position: fixed;
		width: 90vw !important;
		left: 5vw;
		bottom: 16px;
		z-index: 1;
		transform: translateY(100px);
		transition: all 0.3s ease;
		color: #ffffff;
	}

	#floating-btn.main-cta.show {
		transform: translateY(0);
	}

	.content-left-media-right .btn.main-cta,
	.accordion-section .btn.main-cta {
		background-color: #ea5400;
		width: 350px;
	}

	.content-left-media-right.alternative .btn.main-cta {
		color: #b40963;
		border: #b40963 2px solid;
		background-color: transparent;
		padding: 6px 15px;
	}

	.content-left-media-right .col-lg-4.d-flex,
	.guarantee-banner .col-lg-4.d-flex {
		align-items: center;
		justify-content: center;
	}

	.content-left-media-right img {
		max-width: 100%;
	}

	.content-left-media-right ol {
		padding-left: 15px;
	}

	.content-left-media-right li {
		margin-bottom: 10px;
	}

	.scrolling-gallery .scroll-container.d-flex {
		overflow-x: auto;
	}

	.scrolling-gallery .container {
		position: relative;
	}

	.scrolling-gallery .container .fas {
		color: #bb005e;
		position: absolute;
		top: 50%;
	}

	.scrolling-gallery .container .fa-arrow-left {
		left: -10px;
	}

	.scrolling-gallery .container .fa-arrow-right {
		right: -10px;
	}

	.scrolling-gallery-slide {
		background-color: #fefefe;
		height: 200px;
		width: 280px;
		margin: 0 45px;
		display: flex;
		flex-shrink: 0;
		flex-direction: column;
		align-items: center;
		justify-content: space-evenly;
	}

	.scrolling-gallery-slide img {
		width: 100px;
	}

	.scrolling-gallery-slide p {
		max-width: 75%;
	}

	.guarantee-banner .row.centered-content {
		width: fit-content;
		margin: 0 auto;
	}

	.accordion {
		border: 2px solid #eee;
		cursor: pointer;
		padding: 18px;
		width: 100%;
		color: #626262;
		text-align: left;
		outline: none;
		transition: 0.4s;
		font-family: 'Roboto', sans-serif;
		padding-right: 38px;
	}

	.active,
	.accordion:hover {
		background-color: #eee;
	}

	.panel {
		padding: 5px 18px;
		max-height: 0;
		overflow: hidden;
		transition: max-height 0.2s ease-out;
		margin-bottom: 5px;
		opacity: 0;
	}

	.accordion:after {
		content: '\f067';
		font-family: 'Font Awesome 5 Free';
		font-size: 20px;
		color: #b40963;
		font-weight: 900;
		float: right;
		margin-right: -20px;
	}

	.active:after {
		content: "\f068";
	}

	.content-left-media-right,
	.accordion-section,
	.scrolling-gallery {
		font-size: 18px;
	}

	#lightbox {
		display: none;
		position: fixed;
		top: 0;
		left: 0;
		bottom: 0;
		width: 100%;
		z-index: 101;
		background: rgba(0, 0, 0, 0.7);
	}

	.open>#lightbox {
		display: block;
	}

	.lightbox-container {
		display: flex;
		height: 100%;
		width: 100vw;
		justify-content: center;
		align-items: center;
		position: relative;
	}

	#lightbox .close-btn {
		color: #ffffff;
		font-size: 32px;
		position: absolute;
		right: 6%;
		top: 12%;
		cursor: pointer;
	}

	#lightbox .lightbox-container>div {
		background: #ffffff;
		padding: 30px 0 5px;
	}

	#lightbox .lightbox-container img {
		max-width: 33vw;
	}

	#lightbox .lightbox-container p {
		margin-top: 5px;
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

	.meet_the_team_block .team_member {
		padding: 2rem 0;
	}

	.meet_the_team_block .team_member h3 {
		font-size: 24px;
	}

	.meet_the_team_block .team_member h3 span {
		color: #535353;
	}

	.meet_the_team_block .team_member .quals {
		color: #acacac;
		font-size: 18px;
		font-weight: 300;
	}

	.meet_the_team_block .team_member img {
		max-width: 100%;
		margin-bottom: 1rem;
	}

	.meet_the_team_block .team_member .info-box {
		border: #ea5400 1px solid;
		padding: 2rem;
	}

	.meet_the_team_block .team_member .info-box h4 {
		color: #ea5400;
		font-size: 22px;
		margin-bottom: 20px;
	}

	.table-block {
		padding-top: 4rem;
		padding-bottom: 2rem;
	}

	.table-block+.table-block {
		padding-top: 0;
	}

	.table-block table {
		width: 935px;
		max-width: 100%;
		margin: auto;
	}

	.table-block tbody tr:nth-child(odd) {
		background-color: #fafafa;
	}

	.table-block thead th,
	.table-block tbody td {
		padding: 12px 24px;
	}

	.table-block thead.three-cols tr:first-of-type th:first-of-type {
		width: 40%;
	}

	.table-block thead.two-cols tr:first-of-type th:first-of-type {
		width: 70%;
	}

	@media (min-width: 1200px) {
		#lightbox .lightbox-container img {
			width: 300px;
		}

		.core__slider.big {
			height: 700px;
		}

		.core__slider.big .hero-image {
			height: 650px;
			z-index: -1;
		}
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
			height: 325px;
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

		.contact-form-banner.parallax2 {
			background-position-x: 84%;
		}

		.service-cards .service-card-inner {
			height: 70px;
		}

		.service-cards .service-card-inner h5 {
			font-size: 18px;
		}

	}

	@media (max-width: 991px) {
		.slider-form {
			text-align: center;
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

		.icon-links {
			margin-left: 0;
			margin-top: 24px;
		}

		.slider-form {
			text-align: left;
		}

		.contact-form-banner.parallax2 {
			background-position-x: 115%;
		}

		.core__navigation ul.nav-menu>li>a {
			border: none;
		}

		.service-cards-section h3 {
			text-align: left;
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
			height: 400px;
			right: 0;
			top: -80px;
			z-index: -1;
		}

		.contact-form-banner.parallax2 {
			background-image: none;
		}

		.core__slider.big {
			height: 288px;
		}

		.slide .icon-links,
		.slide p {
			display: none;
		}

		.core__slider.big .wrapper .slide {
			height: 125px;
			display: flex;
			align-items: center;
		}

		.content-left-media-right.alternative .btn.main-cta {
			padding: 15px;
		}

		.service-cards {
			background-size: inherit;
			background-position-x: center;
		}

		.service-cards .service-card-inner {
			height: 88px;
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

		.table-block thead th {
			padding: 6px 0px;
		}

		.table-block tbody td {
			padding: 6px 10px;
		}

		.table-block h4 {
			font-size: 20px;
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

		.core__slider.big .hero-image {
			top: -30px;
			height: 300px;
			right: -65px;
		}

		.core__slider.big {
			height: 259px;
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
	}

	@media (max-width: 370px) {

		.main-cta {
			font-size: 16px;
		}

		.service-cards .service-card-inner {
			padding: 5px 10px;
		}
	}

	@media (min-width: 992px) {
		.core__slider .wrapper .gradient-form {
			position: absolute;
			top: 3rem;
			right: 1rem;
		}
	}

	@media (max-width: 600px) {
		.scroll-container {
			width: 90%;
			margin: 0 auto;
		}

		.scrolling-gallery .container .fa-arrow-left {
			left: 5px;
		}

		.scrolling-gallery .container .fa-arrow-right {
			right: 5px;
		}
	}
</style>

<style>
	.dental-emergancy_hero.big {
		background: rgb(22, 176, 200);
		background: linear-gradient(90deg, rgba(22, 176, 200, 1) 0%, rgba(23, 162, 184, 1) 100%);
		height: 612px;
	}

	.dental-emergancy_hero .wrapper {
		background: unset;
	}

	.dental-emergancy_hero .wrapper .layer {
		display: grid;
		grid-template-columns: repeat(2, minmax(0, 1fr));
	}

	.dental-emergancy_hero .wrapper .layer .image {
		position: relative;
	}

	.dental-emergancy_hero .wrapper .layer .image .hero-img {
		height: 570px;
		width: 520px;
		object-fit: cover;
		object-position: top;
	}


	.dental-emergancy_hero h1 {
		color: #fff;
	}

	.dental-emergancy_hero .mobile-header {
		display: flex;
		align-items: center;
	}

	.dental-emergancy_hero .mobile-header .bubble-image {
		width: 123px;
		height: 123px;
		background: #fff;
		object-fit: cover;
		border-radius: 100%;
	}

	.dental-emergancy_hero .sub-header * {
		color: #fff;
	}


	.dental-emergancy_hero .google-reviews {
		background: #fff;
		max-width: fit-content;
		border-radius: 30px;
		width: 250px;
		height: 180px;
		padding: 2rem;

		position: absolute;
		right: 0;
		left: unset;
		bottom: 0;
		z-index: 20;
		filter: drop-shadow(0 1px 1px rgb(0 0 0 / 0.05));
	}

	.dental-emergancy_hero .google-reviews .score {
		display: flex;
		flex-direction: row;
		gap: 10px;
		align-items: center;
	}

	.dental-emergancy_hero .google-reviews .score,
	.dental-emergancy_hero .google-reviews .score p {
		margin-bottom: unset;
	}

	.dental-emergancy_hero .google-reviews .score .average-score {
		font-size: 1.4rem;
	}

	.dental-emergancy_hero .google-reviews .reviews-count {
		text-align: center;
	}

	@media (max-width: 1200px) {
		.dental-emergancy_hero.big {
			height: 650px;
		}

		.dental-emergancy_hero .wrapper .layer .image .hero-img {
			height: 610px;
		}
	}

	@media (max-width: 992px) {
		.dental-emergancy_hero .wrapper .layer .image .hero-img {
			width: 365px;
		}
	}

	@media (min-width:766px) {
		.mobile-google-reviews {
			display: none;
		}
	}

	@media (max-width: 766px) {
		.dental-emergancy_hero .slide .icon-links {
			display: flex;
		}

		.dental-emergancy_hero .wrapper .slide {
			flex-direction: column;
		}

		.dental-emergancy_hero .wrapper .layer {
			display: block;
		}

		.dental-emergancy_hero .wrapper .slide p {
			display: block;
		}

		.dental-emergancy_hero .wrapper .layer .image {
			display: none;
		}

		.dental-emergancy_hero .wrapper .layer .main-cta {
			padding: 1rem 0 2.2rem 0;
		}

		.mobile-google-reviews>.container {
			display: flex;
			justify-content: space-between;
			align-items: center;
		}
	}

	.mobile-google-reviews {
		padding: 1.5rem 0;
	}

	.mobile-google-reviews .score {
		display: flex;
	}

	.mobile-google-reviews p {
		margin: unset;
	}

	/* .dental-emergancy_hero .layer .image {
		position: relative;
		max-height: 100%;
		z-index:1;
		outline: 2px dashed red;
	}
	.dental-emergancy_hero .layer .image .google-reviews {
		position: absolute;
		top:65%;
		right:0;
		background: #fff;
		z-index: 100;
		outline: 2px dashed red;
	} */
</style>

<?php if (have_rows('flexible_content')) : ?>
	<?php while (have_rows('flexible_content')) : the_row(); ?>

		<?php if (get_row_layout() == 'hero_banner') :
			$header        		= get_sub_field('header');
			$sub_header       	= get_sub_field('sub_header');
			$image       		= get_sub_field('image'); ?>

		<?php if (is_page(3577)) : ?>	
				<section class="home_hero_sec">
	<div class="home_hero_inner">
		<div class="home_hero_content_col">
			<?php if ($header) : ?>
												<h1>
													Dental Implants in Preston – From £77/Month
												</h1>
											<?php endif; ?>
							<?php if ($sub_header) : ?>

												<p class="subheadline">
													Eat, smile, and live with confidence again – with affordable dental implants.
												</p>
											<?php endif; ?>
			<p>Struggling with missing teeth or loose dentures? At Lifestyle Dental in Preston, our dental implants provide a permanent solution that looks, feels, and works just like real teeth. With flexible monthly payment plans starting from only £77, you can restore your bite and smile without compromise.</p>
			<!-- <a href="tel:01772717316" class="btn btn-dark-pink">Secure Your No Obligation Consultation by Calling 01772 717316</a> -->
		</div>
		<div class="home_hero_form_col">
			<?php //get_template_part('_misc/consultation-form'); ?>
			<div class="infusion-form gradient-form">
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
<?php endif ?>
<?php if (!is_page(4679) && !is_page(3577)) : // Not the dental emergancy landing page 
			?>
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


										<img src="<?php echo esc_url($image['url']); ?>" alt="" class="hero-image">
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
			<?php endif; ?>


			<?php if (is_page(4679)) : ?>
				<div class="core__slider big mb-0 dental-emergancy_hero">
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

												<div class="mobile-header" style="display:none">
													<h1>
														<?php echo esc_html($header); ?>
													</h1>
													<img src="<?php echo esc_url($image['url']); ?>" class="bubble-image">
												</div>
											<?php endif; ?>



											<?php if ($sub_header) : ?>
												<div class="sub-header">
													<?php echo wp_kses_post($sub_header); ?>
												</div>
											<?php endif; ?>

										</div>

										<div class="icon-links" style="border-color: #fff;">
											<div>
												<a href="" style="color: #fff;">
													<svg width="44px" height="50px" viewBox="0 0 44 50" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
														<g id="Same_day_appointments" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<g id="calendar-day" transform="translate(8, 9)" fill="#FFFFFF" fill-rule="nonzero">
																<path d="M8,0 C9.10624981,0 10,0.893749237 10,2 L10,4 L18,4 L18,2 C18,0.893749237 18.8937492,0 20,0 C21.1062508,0 22,0.893749237 22,2 L22,4 L25,4 C26.65625,4 28,5.34375 28,7 L28,10 L0,10 L0,7 C0,5.34375 1.34375,4 3,4 L6,4 L6,2 C6,0.893749237 6.89375019,0 8,0 Z M0,12 L28,12 L28,29 C28,30.65625 26.65625,32 25,32 L3,32 C1.34375,32 0,30.65625 0,29 L0,12 Z M5,16 C4.44999981,16 4,16.4500008 4,17 L4,23 C4,23.5499992 4.44999981,24 5,24 L11,24 C11.5500002,24 12,23.5499992 12,23 L12,17 C12,16.4500008 11.5500002,16 11,16 L5,16 Z" id="Shape"></path>
															</g>
														</g>
													</svg> <br>
													Same-day appointments
												</a>
											</div>
											<div>
												<a href="" style="color: #fff;">
													<svg width="54px" height="50px" viewBox="0 0 54 50" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
														<g id="Expert_Care" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<g id="hand-holding-medical" transform="translate(9.9919, 8.9888)" fill="#FFFFFF" fill-rule="nonzero">
																<path d="M10.0005889,10.9999738 L14.000577,10.9999738 L14.000577,14.9999642 C14.000577,15.5518428 14.448696,15.9999619 15.0005746,15.9999619 L19.0005651,15.9999619 C19.5525047,15.9999619 20.0005627,15.5518428 20.0005627,14.9999642 L20.0005627,10.9999738 L24.0005531,10.9999738 C24.5524927,10.9999738 25.0005507,10.5518547 25.0005507,9.99997616 L25.0005507,5.99998569 C25.0005507,5.44804609 24.5524927,4.99998808 24.0005531,4.99998808 L20.0005627,4.99998808 L20.0005627,1 C20.0005627,0.448058014 19.5525047,0 19.0005651,0 L15.0005746,0 C14.448696,0 14.000577,0.448058014 14.000577,1 L14.000577,4.99998808 L10.0005889,4.99998808 C9.44870794,4.99998808 9.00058889,5.44804609 9.00058889,5.99998569 L9.00058889,9.99997616 C9.00058889,10.5518547 9.44870794,10.9999738 10.0005889,10.9999738 Z M35.5124275,21.019298 C35.0583271,20.400281 34.3256628,19.9980602 33.4998591,19.9980602 C32.9449898,19.9980602 32.4313192,20.1830573 32.0167694,20.4899414 L24.5374171,26.0011587 L16.9993491,26.0011587 C16.4474095,26.0011587 15.9993515,25.5531007 15.9993515,25.0011611 C15.9993515,24.4492825 16.4474095,24.0011635 16.9993491,24.0011635 L21.8892911,24.0011635 C22.8892887,24.0011635 23.8111615,23.3217828 23.9749184,22.3380815 C23.9932289,22.2293171 24.0027504,22.117623 24.0027504,22.0036707 C24.0027504,20.8977773 23.1045592,20.0017834 21.9986658,20.0017834 L11.9986897,20.0017834 L11.9971638,20.0017834 C10.2450928,20.0017834 8.63028948,20.618237 7.36625441,21.6424045 L4.46001134,24.0011635 L1,24.0011635 C0.449828029,24.0049477 0.00372313565,24.4509915 0,25.0011611 L0,31.0011468 C0.00372313565,31.5513164 0.449828029,31.9974213 1,32.0011444 L22.6874459,32.0011444 C24.1268346,31.9977264 25.4638065,31.5256817 26.5436989,30.7343017 L34.9830099,24.511172 C35.5998907,24.0557288 36.0002193,23.3236138 36.0002193,22.4987257 C36.0002193,21.9457485 35.8168702,21.4334816 35.5124275,21.019298 Z" id="Shape"></path>
															</g>
														</g>
													</svg> <br>
													Expert Care
												</a>
											</div>
											<div>
												<a href="" style="color: #fff;">
													<svg width="44px" height="50px" viewBox="0 0 44 50" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
														<g id="Transparent_Pricing" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<g id="pound-sign" transform="translate(12, 11.0001)" fill="#FFFFFF" fill-rule="nonzero">
																<path d="M19.2499541,19.9999523 L16.4065161,19.9999523 C15.9923325,19.9999523 15.6565178,20.3357669 15.6565178,20.7499505 L15.6565178,23.9279215 L7.99998093,23.9279215 L7.99998093,15.9999619 L13.2499684,15.9999619 C13.664152,15.9999619 13.9999666,15.6641472 13.9999666,15.2499636 L13.9999666,12.7499696 C13.9999666,12.335786 13.664152,11.9999714 13.2499684,11.9999714 L7.99998093,11.9999714 L7.99998093,8.02775186 C7.99998093,6.01109407 9.53507248,4.45988927 11.8619712,4.45988927 C13.3406054,4.45988927 14.729335,5.17894273 15.4652341,5.63792601 C15.7871328,5.8387312 16.2082133,5.76609953 16.4457005,5.47014077 L18.226519,3.25054157 C18.4911058,2.92083044 18.4314746,2.43773833 18.0940731,2.18297819 C17.0702108,1.40996978 14.7859755,0 11.7456385,0 C6.62663215,0 3,3.29637886 3,7.87253982 L3,11.9999714 L1.24999702,11.9999714 C0.835813437,11.9999714 0.5,12.335786 0.5,12.7499696 L0.5,15.2499636 C0.5,15.6641472 0.835813437,15.9999619 1.24999702,15.9999619 L3,15.9999619 L3,23.9999428 L0.749998212,23.9999428 C0.335814629,23.9999428 0,24.3357574 0,24.749941 L0,27.249935 C0,27.6641186 0.335814629,27.9999332 0.749998212,27.9999332 L19.2499541,27.9999332 C19.6641377,27.9999332 19.9999523,27.6641186 19.9999523,27.249935 L19.9999523,20.7499505 C19.9999523,20.3357669 19.6641377,19.9999523 19.2499541,19.9999523 Z" id="Path"></path>
															</g>
														</g>
													</svg> <br>
													Transparent Pricing
												</a>
											</div>
											<div>
												<a href="" style="color: #fff;">
													<svg width="54px" height="50px" viewBox="0 0 54 50" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
														<g id="Rapid_Relief" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<g id="face-smile-beam" transform="translate(11, 9)" fill="#FFFFFF" fill-rule="nonzero">
																<path d="M16,32 C21.7162502,32 26.9982822,28.9504166 29.8564079,24 C32.7145317,19.0495834 32.7145317,12.9504175 29.8564079,8 C26.9982822,3.04958344 21.7162502,0 16,0 C10.2837512,0 5.00171828,3.04958344 2.14359355,8 C-0.714531183,12.9504175 -0.714531183,19.0495834 2.14359355,24 C5.00171828,28.9504166 10.2837512,32 16,32 Z M10.2562511,20.34375 C11.3750007,21.6375008 13.2875011,23 16.0000007,23 C18.7125003,23 20.6250007,21.6375008 21.7437503,20.34375 C22.1062496,19.9249992 22.7375,19.8812504 23.1562507,20.2437496 C23.5750015,20.6062489 23.6187503,21.2374992 23.2562511,21.65625 C21.8625,23.2562504 19.4437511,25 16.0000007,25 C12.5562503,25 10.1375005,23.2562504 8.74375033,21.65625 C8.38125014,21.2374992 8.42499995,20.6062508 8.84375072,20.2437496 C9.26250148,19.8812485 9.89375091,19.9249992 10.2562511,20.34375 Z M13.6000011,14.3000002 L13.6000011,14.3000002 L13.5875013,14.2875004 C13.5750015,14.2750006 13.5625017,14.2562504 13.5437515,14.2312508 C13.5062511,14.1812506 13.4437511,14.1062508 13.3687513,14.0187511 C13.2125013,13.843751 12.9937513,13.6062508 12.7312515,13.375001 C12.1812513,12.8875008 11.5562513,12.5 11.0000007,12.5 C10.4437521,12.5 9.81875205,12.8875008 9.26875186,13.375001 C9.00625205,13.6062508 8.78750205,13.843751 8.63125205,14.0187511 C8.55625224,14.1062508 8.49375224,14.1812515 8.45625186,14.2312508 C8.43750167,14.2562504 8.41875148,14.2750006 8.41250205,14.2875004 L8.40000224,14.3000002 L8.40000224,14.3000002 C8.26875186,14.4750004 8.04375243,14.5437498 7.84375167,14.4750004 C7.64375091,14.406251 7.50000072,14.21875 7.50000072,14 C7.50000072,12.8812504 7.91875052,11.7749996 8.5375011,10.9500008 C9.15000129,10.1375008 10.0312507,9.5 11.0000007,9.5 C11.9687526,9.5 12.8500021,10.1375008 13.4625013,10.9500008 C14.0812509,11.7749996 14.5000007,12.8812494 14.5000007,14 C14.5000007,14.2124996 14.3625019,14.40625 14.1562517,14.4750004 C13.9500015,14.5437508 13.7250021,14.4750004 13.6000021,14.3000002 L13.6000021,14.3000002 L13.6000011,14.3000002 Z M23.6000001,14.3000002 L23.5874994,14.2875004 C23.5749986,14.2750006 23.5624998,14.2562504 23.5437486,14.2312508 C23.5062482,14.1812506 23.4437482,14.1062508 23.3687494,14.0187511 C23.2124994,13.843751 22.9937494,13.6062508 22.7312486,13.375001 C22.1812494,12.8875008 21.5562494,12.5 20.9999959,12.5 C20.4437463,12.5 19.8187482,12.8875008 19.2687471,13.375001 C19.0062463,13.6062508 18.7874963,13.843751 18.6312463,14.0187511 C18.5562456,14.1062508 18.4937456,14.1812515 18.4562471,14.2312508 C18.4374979,14.2562504 18.4187467,14.2750006 18.4124963,14.2875004 L18.3999956,14.3000002 L18.3999956,14.3000002 C18.2687452,14.4750004 18.0437448,14.5437498 17.8437459,14.4750004 C17.6437471,14.406251 17.4999959,14.21875 17.4999959,14 C17.4999959,12.8812504 17.9187467,11.7749996 18.5374963,10.9500008 C19.1499956,10.1375008 20.0312459,9.5 20.9999959,9.5 C21.9687459,9.5 22.8499963,10.1375008 23.4624956,10.9500008 C24.0812452,11.7749996 24.4999959,12.8812494 24.4999959,14 C24.4999959,14.2124996 24.3624952,14.40625 24.1562459,14.4750004 C23.9499967,14.5437508 23.7249963,14.4750004 23.5999963,14.3000002 L23.5999963,14.3000002 L23.6000001,14.3000002 Z" id="Shape"></path>
															</g>
														</g>
													</svg> <br>
													Rapid Relief
												</a>
											</div>
										</div>

										<a href="tel:01772717316" class="btn main-cta" style="margin-top:1rem; background-color:#ea5400; width:350px;">Call 01772 717316<i class="fas fa-arrow-right"></i></a>

										<!-- <img src="<?php echo esc_url($image['url']); ?>" alt="" class="hero-image"> -->
									</div>
								</div>

								<div class="image">
									<div class="google-reviews">
										<img src="https://www.lifestyledental.co.uk/wp-content/uploads/2023/12/google-reviews.png" alt="google reviews logo">
										<div class="score">
											<p class="average-score" id="hero-google-reviews_average-score">12</p>
											<p class="stars">
												<i class="fas fa-star" style="color:#F8B80C;"></i>
												<i class="fas fa-star" style="color:#F8B80C;"></i>
												<i class="fas fa-star" style="color:#F8B80C;"></i>
												<i class="fas fa-star" style="color:#F8B80C;"></i>
												<i class="fas fa-star" style="color:#F8B80C;"></i>
											</p>
										</div>
										<p class="reviews-count" id="hero-google-reviews_reviews-count">13 reviews</p>
									</div>
									<img class="hero-img" src="<?php echo esc_url($image['url']); ?>" alt="">


								</div>

							</div>



							<!-- <div class="hero-google-reviews">
								hello world
							</div> -->
						</div>

					</div>
				</div>

				<div class="mobile-google-reviews">
					<div class="container">
						<img src="https://www.lifestyledental.co.uk/wp-content/uploads/2023/12/google-reviews.png" alt="google reviews logo">
						<div class="score">
							<p class="average-score" id="hero-google-reviews_average-score">12</p>
							<p class="stars">
								<i class="fas fa-star" style="color:#F8B80C;"></i>
								<i class="fas fa-star" style="color:#F8B80C;"></i>
								<i class="fas fa-star" style="color:#F8B80C;"></i>
								<i class="fas fa-star" style="color:#F8B80C;"></i>
								<i class="fas fa-star" style="color:#F8B80C;"></i>
							</p>
						</div>
						<p class="reviews-count" id="hero-google-reviews_reviews-count">13 reviews</p>
					</div>
				</div>
			<?php endif; ?>

		<?php elseif (get_row_layout() == 'content_left_media_right') :
			$header        		= get_sub_field('header');
			$main_content       = get_sub_field('main_content');
			$media       		= get_sub_field('media');
			$bg_color       	= get_sub_field('background_colour');
			$link_style       	= get_sub_field('link_style');
			$image       		= get_sub_field('image');
			$iframe       		= get_sub_field('iframe');
			$lightbox       	= get_sub_field('lightbox_button_text');
			$before1       		= get_sub_field('before_image_1');
			$before2       		= get_sub_field('before_image_2');
			$after1       		= get_sub_field('after_image_1');
			$after2       		= get_sub_field('after_image_2');
			$aos       			= get_sub_field('aos'); ?>

			<section class="content-left-media-right <?php echo esc_html($link_style); ?> " style="background-color: <?php echo esc_html($bg_color); ?>;" <?php echo ($aos == 'yes') ? 'data-aos="fade-up" data-aos-delay="100" data-aos-duration="800"' : ''; ?>>
				<div class="container py-5">
					<div class="row">
						<div class="col-12 col-lg-8 <?php echo ($media == 'none') ? 'col-lg-12' : ''; ?>">

							<?php if ($header) : ?>
								<h2>
									<?php echo esc_html($header); ?>
								</h2>
							<?php endif; ?>

							<?php if ($main_content) : ?>
								<p>
									<?php echo wp_kses_post($main_content); ?>
								</p>
							<?php endif; ?>

							<?php $link = get_sub_field('link');
							if ($link) :
								$link_url = $link['url'];
								$link_title = $link['title']; ?>

								<a href="<?php echo esc_url($link_url); ?>" class="btn main-cta mt-3"><?php echo esc_html($link_title); ?><i class="fas fa-arrow-right"></i></a>
							<?php endif; ?>

							<?php if ($lightbox) : ?>

								<div>

									<a class="btn main-cta mt-3 open-lightbox"><?php echo esc_html($lightbox); ?><i class="fas fa-arrow-right"></i></a>

									<div id="lightbox">
										<div class="lightbox-container">
											<div>
												<?php if ($before1) : ?>
													<div class="col-12">
														<img src="<?php echo esc_url($before1['url']); ?>">
														<p>
															<strong>Before</strong>
														</p>
													</div>
												<?php endif; ?>
												<?php if ($before2) : ?>
													<div class="col-12">
														<img src="<?php echo esc_url($before2['url']); ?>">
														<p><strong>Before</strong>
														</p>
													</div>
												<?php endif; ?>
											</div>
											<div>
												<?php if ($after1) : ?>
													<div class="col-12">
														<img src="<?php echo esc_url($after1['url']); ?>">
														<p><strong>After</strong>
														</p>
													</div>
												<?php endif; ?>
												<?php if ($after2) : ?>
													<div class="col-12">
														<img src="<?php echo esc_url($after2['url']); ?>">
														<p><strong>After</strong>
														</p>
													</div>
												<?php endif; ?>
											</div>
											<span class="close-btn close-lightbox"><i class="fa fa-times"></i></span>
										</div>

									</div>

								</div>
							<?php endif; ?>
						</div>

						<?php if ($media == 'image') : ?>
							<?php if ($image) : ?>
								<div class="col-12 col-lg-4 d-flex mt-5 mt-lg-0">
									<img src="<?php echo esc_url($image['url']); ?>" alt="">
								</div>
							<?php endif; ?>
						<?php endif; ?>

						<?php if ($media == 'iframe') : ?>
							<?php if ($iframe) : ?>
								<div class="col-12 col-lg-4 d-flex mt-5 mt-lg-0">
									<iframe src="<?php echo esc_url($iframe); ?>" width="100%" height="200" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
								</div>
							<?php endif; ?>
						<?php endif; ?>
					</div>
				</div>
			</section>

		<?php elseif (get_row_layout() == 'scrolling_gallery') :
			$header  	= get_sub_field('header'); ?>

			<section class="scrolling-gallery text-center pb-5" style="background-color: #efefef;">
				<?php if ($header) : ?>
					<h4>
						<?php echo esc_html($header); ?>
					</h4>
				<?php endif; ?>

				<div class="container">

					<div class="aligner-slider py-5">

						<?php while (have_rows('scrolling_gallery')) : the_row();
							$image 	= get_sub_field('gallery_image'); ?>

							<div class="scrolling-gallery-slide pt-3">
								<img src="<?php echo $image['url']; ?>" alt="">
								<p>
									<?php echo get_sub_field('gallery_item'); ?>
								</p>
							</div>

						<?php endwhile; ?>

						<style>
							.slick-list.draggable {
								overflow: hidden;
							}

							.slick-track {
								display: flex;
							}


							.slick-prev,
							.slick-next {
								font-size: 0;
								position: absolute;
								bottom: 40%;
								color: #bb005e;
								border: 0;
								background: none;
								z-index: 1;
							}

							.slick-prev {
								left: 20px;
							}

							.slick-prev:after {
								content: "\f060";
								font: 24px 'FontAwesome';
							}

							.slick-next {
								right: 20px;
								text-align: right;
							}

							.slick-next:after {
								content: "\f061";
								font: 24px 'FontAwesome';
							}

							.slick-prev:hover:after,
							.slick-next:hover:after {
								color: #7e7e7e;
							}
						</style>

					</div>
				</div>
			</section>

		<?php elseif (get_row_layout() == 'guarantee_banner') :
			$header  	= get_sub_field('header');
			$image  	= get_sub_field('image');
			$bg_image  	= get_sub_field('background_image');
			$bg_color  	= get_sub_field('background_color'); ?>

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
								<h4 class="inverted ">
									<?php echo esc_html($header); ?>
								</h4>
							<?php endif; ?>
							<?php while (have_rows('bullets')) : the_row(); ?>
								<ul class="fa-ul text-left my-4">
									<li>
										<span class="fa-li"><i class="fas fa-check"></i></span> <?php echo get_sub_field('bullet_point'); ?>
									</li>
								</ul>
							<?php endwhile; ?>
							<?php $link = get_sub_field('link');
							if ($link) :
								$link_url = $link['url'];
								$link_title = $link['title']; ?>

								<a href="<?php echo esc_url($link_url); ?>" class="btn main-cta mt-3"><?php echo esc_html($link_title); ?><i class="fas fa-arrow-right"></i></a>
							<?php endif; ?>
						</div>

						<div class="col-12 col-lg-4 d-flex">
							<img src="<?php echo esc_url($image['url']); ?>" alt="">
						</div>

					</div>
				</div>
			</section>

		<?php elseif (get_row_layout() == 'accordion_section') :
			$header  	= get_sub_field('header');
			$bg_color  	= get_sub_field('bg_color');
			$button		= get_sub_field('button'); ?>

			<section class="accordion-section pb-5" style="background-color: <?php echo esc_html($bg_color); ?>;">
				<div class="container" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
					<?php if ($header) : ?>
						<h2>
							<?php echo esc_html($header); ?>
						</h2>
					<?php endif; ?>
					<div class="row py-5">
						<div class="col-12 col-lg-6">
							<?php while (have_rows('faqs_left')) : the_row(); ?>
								<h5 class="accordion" style="border-color: <?php echo ($bg_color == '#ffffff') ? '#eeeeee' : '#ffffff'; ?>" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
									<?php echo get_sub_field('question_left'); ?>
								</h5>
								<p class="panel" style="background-color: <?php echo ($bg_color == '#ffffff') ? '' : '#ffffff'; ?>">
									<?php echo get_sub_field('answer_left'); ?>
								</p>
							<?php endwhile; ?>
						</div>
						<div class="col-12 col-lg-6">
							<?php while (have_rows('faqs_right')) : the_row(); ?>
								<h5 class="accordion" style="border-color: <?php echo ($bg_color == '#ffffff') ? '#eeeeee' : '#ffffff'; ?>" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
									<?php echo get_sub_field('question_right'); ?>
								</h5>
								<p class="panel" style="background-color: <?php echo ($bg_color == '#ffffff') ? '' : '#ffffff'; ?>">
									<?php echo get_sub_field('answer_right'); ?>
								<?php endwhile; ?>
						</div>
					</div>
					<?php if ($button == 'yes') : ?>
						<a href="https://onlineappointment.carestack.uk/?dn=lifestyledental&ln=1#/home" class="btn main-cta">Arrange my consultation<i class="fas fa-arrow-right"></i></a>
					<?php endif; ?>
				</div>
			</section>

		<?php elseif (get_row_layout() == 'service_cards') :
			$header  	= get_sub_field('header');
			$bg_color  	= get_sub_field('bg_color');
			$cards		= get_sub_field('service_cards'); ?>

			<section class="service-cards-section" style="background-color: <?php echo esc_html($bg_color); ?>;">
				<div class="container">
					<?php if ($header) : ?>
						<h3 class="mb-4" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
							<?php echo esc_html($header); ?>
						</h3>
					<?php endif; ?>
					<div class="row mb-0 mb-md-5">
						<?php foreach ($cards as $card) : ?>
							<div class="col-6 col-lg-4">
								<a href="<?php echo esc_url($card['link']); ?>" class="service-cards" style="background-image: url(<?php echo esc_url($card['image']['url']); ?>);">
									<div class="service-card-inner">
										<h5>
											<?php echo esc_html($card['title']); ?> <i class="fas fa-arrow-right"></i>
										</h5>
										<p>
											<?php echo esc_html($card['text']); ?>
										</p>
									</div>
								</a>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</section>

		<?php elseif (get_row_layout() == 'video_testimonials') :
			$display_video  = get_sub_field('display_video'); ?>

			<?php if ($display_video == 'yes') : ?>
				<?php get_template_part('_components/video-testimonials'); ?>
			<?php endif; ?>

		<?php elseif (get_row_layout() == 'google_reviews') :
			$reviews_option  = get_sub_field('reviews_option'); ?>

			<?php if ($reviews_option == 'standard') : ?>

				<div class="container py-4">
					<?php echo do_shortcode('[trustindex no-registration=google]'); ?>
				</div>

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

		<?php elseif (get_row_layout() == 'info_links') :
			$display_links  = get_sub_field('display_links'); ?>

			<?php if ($display_links == 'yes') : ?>

				<section>
					<div class="container py-5 info-links">
						<h3 class="mb-4">
							Want to find out more?
						</h3>
						<div class="row">
							<div class="col-12 col-md-4 info-link-images">
								<a href="https://www.lifestyledental.co.uk/preston-dental-fees-fulwood/">
									<img src="https://www.lifestyledental.co.uk/wp-content/uploads/2021/04/Special_offers.jpg" alt="">
									<div>
										Special Offers <i class="fas fa-arrow-right"></i>
									</div>
								</a>
							</div>
							<div class="col-12 col-md-4 info-link-images">
								<a href="https://www.lifestyledental.co.uk/about-preston-dentists/">
									<img src="https://www.lifestyledental.co.uk/wp-content/uploads/2021/04/Meet_our_team.jpg" alt="">
									<div>
										Meet Our Team <i class="fas fa-arrow-right"></i>
									</div>
								</a>
							</div>
							<div class="col-12 col-md-4 info-link-images">
								<a href="https://www.lifestyledental.co.uk/referrals/">
									<img src="https://www.lifestyledental.co.uk/wp-content/uploads/2021/04/Referral.jpg" alt="">
									<div>
										Do you have a referral? <i class="fas fa-arrow-right"></i>
									</div>
								</a>
							</div>
						</div>
					</div>
				</section>

			<?php endif ?>

		<?php elseif (get_row_layout() == 'team_block') :
			$members  	= get_sub_field('team_blocks'); ?>

			<section class="meet_the_team_block">
				<div class="container">
					<?php foreach ($members as $member) : ?>
						<?php $member_id = strtolower(str_replace(' ', '', $member['name'])); ?>
						<div class="team_member" id="<?php echo $member_id; ?>">
							<h3>
								<?php echo esc_html($member['name']); ?> - <span><?php echo esc_html($member['title']); ?></span>
							</h3>
							<?php if ($member['qualifications']) : ?>
								<p class="quals">
									<?php echo esc_html($member['qualifications']); ?>
								</p>
							<?php endif; ?>
							<div class="row">
								<?php if ($member['image']) : ?>
									<div class="col-12 col-md-4 text-center <?php echo ($member['image_position'] == 'right') ? 'order-md-1' : ''; ?>">
										<img src="<?php echo esc_url($member['image']['url']); ?>" alt="">
									</div>
								<?php endif; ?>
								<?php if ($member['body']) : ?>
									<div class="col-12 col-md-4">
										<?php echo wp_kses_post($member['body']); ?>
									</div>
								<?php endif; ?>
								<div class="col-12 col-md-4">
									<div class="info-box">
										<?php if ($member['info_box_title']) : ?>
											<h4>
												<?php echo esc_html($member['info_box_title']); ?>
											</h4>
										<?php endif; ?>
										<?php if ($member['info_box_body']) : ?>
											<?php echo wp_kses_post($member['info_box_body']); ?>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</section>

		<?php elseif (get_row_layout() == 'table_block') :
			$col1Header  	= get_sub_field('column_1_header');
			$col2Header  	= get_sub_field('column_2_header');
			$col3Header  	= get_sub_field('column_3_header');
			$rows  			= get_sub_field('rows'); ?>


			<section class="table-block">
				<div class="container">
					<table>
						<thead class="<?php echo ($col2Header) ? 'three-cols' : 'two-cols' ?>">
							<tr>
								<?php if ($col1Header) : ?>
									<th>
										<h4><?php echo esc_html($col1Header); ?></h4>
									</th>
								<?php endif; ?>
								<?php if ($col2Header) : ?>
									<th>
										<h6><?php echo esc_html($col2Header); ?></h6>
									</th>
								<?php endif; ?>
								<?php if ($col3Header) : ?>
									<th>
										<h6><?php echo esc_html($col3Header); ?></h6>
									</th>
								<?php endif; ?>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($rows as $row) : ?>
								<tr>
									<?php if ($row['column_1']) : ?>
										<td>
											<?php echo esc_html($row['column_1']); ?>
										</td>
									<?php endif; ?>
									<?php if ($row['column_2']) : ?>
										<td>
											<?php echo esc_html($row['column_2']); ?>
										</td>
									<?php endif; ?>
									<?php if ($row['column_3']) : ?>
										<td>
											<?php echo esc_html($row['column_3']); ?>
										</td>
									<?php endif; ?>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</section>


		<?php elseif (get_row_layout() == 'contact_form_banner') :
			$display_form  = get_sub_field('display_form'); ?>

			<?php if ($display_form == 'yes') : ?>

				<?php get_template_part('_components/footer-finance-form'); ?>

			<?php endif; ?>

		<?php endif; ?>

	<?php endwhile; ?>
<?php endif; ?>

<!--<div class="popup-finance-form" id="popup-finance-form">

	<?php //if (!isset($_GET['dengro'])) : ?>

		<form class="infusion-form gradient-form">

			<a class="close-popup" href="#" onclick="toggleForm()">
				<i class="fa fa-times" aria-hidden="true"></i>
			</a>

			<h3 class="h4 plain inverted text-center mt-0">Request your FREE<br /> consultation and visit</h3>

			<div data-dengro-hosted="cb4b3b93-cdea-46fc-b921-b991d41266bb"></div>

		</form>

	<?php //else : ?>
		<form accept-charset="UTF-8" action="#" class="infusion-form gradient-form" id="finance-popup-form" method="POST">
			<a class="close-popup" onclick="toggleForm()">
				<i class="fa fa-times" aria-hidden="true"></i>
			</a>

			<input name="inf_form_xid" type="hidden" value="4d1df02562f3f1a28fc3f4a72528e7e5" />
			<input name="inf_form_name" type="hidden" value="Web Form submitted" />
			<input name="infusionsoft_version" type="hidden" value="1.70.0.75009" />
			<input type="text" id="sirname" name="sirname" class="d-none">

			<h3 class="h4 plain inverted text-center mt-0 mb-3">Request your FREE consultation and visit</h3>

			<div class="row">
				<div class="col-sm-6 col-lg-12">
					<div class="infusion-field field-row">
						<label for="inf_field_FirstName" class="d-none">First Name *</label>
						<input class="infusion-field-input-container" id="inf_field_FirstName" name="inf_field_FirstName" placeholder="First Name *" type="text" required>
					</div>
					<div class="infusion-field field-row">
						<label for="inf_field_LastName" class="d-none">Last Name *</label>
						<input class="infusion-field-input-container" id="inf_field_LastName" name="inf_field_LastName" placeholder="Last Name *" type="text" required>
					</div>
				</div>

				<div class="col-sm-6 col-lg-12">
					<div class="infusion-field field-row">
						<label for="inf_field_Email" class="d-none">Email *</label>
						<input class="infusion-field-input-container" id="inf_field_Email" name="inf_field_Email" placeholder="Email *" type="text" required>
					</div>
					<div class="infusion-field field-row">
						<label for="inf_field_Phone1" class="d-none">Phone *</label>
						<input class="infusion-field-input-container" id="inf_field_Phone1" name="inf_field_Phone1" placeholder="Phone *" type="text" required>
					</div>

					<label style="width: auto;" for="inf_option_YesIwouldliketobekeptuptodatewithfuturetreatmentsoffersthatLifestyleDentalmayoffer" class="checkbox-label">
						<input style="width: 15px; height: 15px;" id="inf_option_YesIwouldliketobekeptuptodatewithfuturetreatmentsoffersthatLifestyleDentalmayoffer" name="inf_option_YesIwouldliketobekeptuptodatewithfuturetreatmentsoffersthatLifestyleDentalmayoffer" type="checkbox" value="1397" /> Yes, I would like to be kept up-to-date with future treatments/offers that Lifestyle Dental may offer
					</label>

					<input name="inf_custom_GaSource" value="null" type="hidden">
					<input name="_GaReferurl" value="null" type="hidden">
					<input name="_GaTerm" value="null" type="hidden">
					<input name="_GaMedium" value="null" type="hidden">
					<input name="_GaContent" value="null" type="hidden">
					<input name="_GaCampaign" value="null" type="hidden">

					<div class="infusion-submit mt-3">
						<button class="infusion-recaptcha" id="recaptcha_4d1df02562f3f1a28fc3f4a72528e7e5" type="submit">Send</button>
					</div>
				</div>
			</div>
		</form>
	<?php //endif; ?>
</div>-->

<script src="https://unpkg.com/scrollreveal"></script>

<a class="btn d-sm-none main-cta" id="floating-btn" onclick="toggleForm()">Arrange my consultation</a>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<!-- <script type="text/javascript" src="js/main.js"></script> -->

<?php get_footer(); ?>


<script>
	// Script to change Google Reviews stats on hero widget

	var rawRating = Array.from(document.querySelectorAll('.ti-rating-text .nowrap'))

	var reviewCount = rawRating[2]['children'][0]['childNodes'][0]['data']
	var avgScore = rawRating[1]['children'][0]['childNodes'][0]['data']

	var elementReviewsCount = document.querySelectorAll('#hero-google-reviews_reviews-count')
	var elementAverageScore = document.querySelectorAll('#hero-google-reviews_average-score')

	if (reviewCount.length > 0) {

		elementReviewsCount.forEach(function(i) {
			i.innerHTML = reviewCount
		})
	}

	if (avgScore.length > 0) {

		elementAverageScore.forEach(function(i) {
			i.innerHTML = avgScore
		})
	}
</script>