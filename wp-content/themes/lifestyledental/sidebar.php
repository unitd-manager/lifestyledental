<?php
/**
 * Sidebar.
 *
 * @package lifestyledental
 * @author Pop Creative
 */

?>

<div class="comp__sidebar">

	<div class="widget mb-3">
		<h3 class="h4 mb-3">See our reviews</h3>

		<a
		class="reputation-widget"
		target="_blank"
		href="https://widgets.reputation.com/widgets/5e17284e55b9d8653de625f8/run?tk=4d0ccbfe161"
		data-tk="4d0ccbfe161"
		data-widget-id="5e17284e55b9d8653de625f8"
		env=""
		region="us"
		>
			Reputation Reviews
		</a>

		<script>!function(d,s,c){var js,fjs=d.getElementsByTagName(s)[0];js=d.createElement(s);js.className=c;js.src="https://widgets.reputation.com/src/client/widgets/widgets.js";fjs.parentNode.insertBefore(js,fjs);}(document,"script","reputation-wjs");</script>
	</div>

	<img class="mx-auto d-block" src="<?php echo esc_url( content_url( '/uploads/2014/06/seals2.jpg' ) ); ?>">

	<div class="widget mb-3">
		<div class="sidebar-testimonials">
			<h3 class="h4 mb-3">Our VERY Happy Clients</h3>

			<div class="testimonial">
				<div class="row">
					<div class="col-lg-4">
						<img class="img-fluid" src="<?php echo esc_url( content_url( '/uploads/2014/07/emma.png' ) ); ?>">
					</div>

					<div class="col-lg-8">
						<div class="rating">
							<?php for ( $i = 0; $i < 5; $i++ ) : ?>
								<i class="fa fa-star"></i>
							<?php endfor; ?>
						</div>

						<p>
							<strong>"The results have been fantastic"</strong>
						</p>

						<p>
							"I've had my teeth straightened in the past without success until coming to Lifestyle Dental".
						</p>

						<p>
							<strong>Emma</strong>
						</p>
					</div>
				</div>
			</div>

			<hr>

			<div class="testimonial">
				<div class="row">
					<div class="col-lg-4">
						<img class="img-fluid" src="<?php echo esc_url( content_url( '/uploads/2014/07/gary.png' ) ); ?>">
					</div>

					<div class="col-lg-8">
						<div class="rating">
							<?php for ( $i = 0; $i < 5; $i++ ) : ?>
								<i class="fa fa-star"></i>
							<?php endfor; ?>
						</div>

						<p>
							<strong>"Made an enormous difference”"</strong>
						</p>

						<p>
							"Highly recommended to anyone looking for a cost effective solution to getting your smile back".
						</p>

						<p>
							<strong>Gary McGaffney</strong><br>Trainer / Preston
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="widget mb-3 recognition-sidebar">
		<p class="purple">
			Recognition
		</p>

		<img class="sidebar-img img-fluid d-lg-block mx-auto" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/dentistry-awards.png">
		<img class="sidebar-img img-fluid d-lg-block mx-auto" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/img/private-dentistry.png">
	</div>

	<div class="widget">
		<p class="purple">
			Special Offers
		</p>

		<a class="special-offer-widget gold" href="//www.lifestyledental.co.uk/preston-dental-fees-fulwood/">
			<p class="lead">
				The Lifestyle Light Whitening Solution
			</p>

			<div class="price">
				All for &pound;549
			</div>
		</a>

		<a class="special-offer-widget grey" href="//www.lifestyledental.co.uk/preston-dental-fees-fulwood/">
			<p class="lead">
				The Lifestyle Dental Home Whitening Solution
			</p>

			<div class="price">
				All for &pound;349
			</div>
		</a>
	</div>

	<div class="widget popular-services">
		<p class="purple">
			Popular services
		</p>

		<ul>
			<li>
				<a href="<?php the_permalink( 3577 ); ?>">Dental Implants</a>
			</li>
			<li>
				<a href="<?php the_permalink( 3110 ); ?>">Braces</a>
			</li>
			<li>
				<a href="<?php the_permalink( 3632 ); ?>">Sedation</a>
			</li>
		</ul>
	</div>
</div>
