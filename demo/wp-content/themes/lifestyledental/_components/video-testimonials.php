<?php

/**
 * Video testimonials component.
 *
 * @package lifestyledental
 * @author Pop Creative
 */

?>

<?php if (! isset($_GET['dev'])) : ?>

	<style>
		.comp__video-testimonials {
			background-color: #d14480;
		}

		.comp__video-testimonials h2 {
			font-family: 'PT Serif', serif;
			font-weight: 400;
			/*font-size: 24px;*/
		}

		.comp__video-testimonials .testimonial-videos p {
			margin-top: 10px;
		}

		.comp__video-testimonials .testimonial-videos span {
			font-weight: 100;
		}

		.comp__video-testimonials .slider {
			display: flex;
			overflow-x: auto;
		}
		.comp__video-testimonials	.slide {
			width: 290px;
			margin-right: 24px;
			flex-shrink: 0;
		}

		@media (max-width: 991px) {
			.comp__video-testimonials h2 {
				font-size: 28px;
				line-height: 1.43;
				margin: 8px 0 -16px;
			}

			.comp__video-testimonials {
				padding: 1rem 0;
			}
		}
	</style>

	<div class="comp__video-testimonials text-center d-none d-lg-block sp-pt-pb">
		<div class="container">
		     <span class="tag"><i class="bi bi-stars"></i>
  Your Smile, Reimagined
</span>
		  
			<h4 class="inverted ">A Personal Approach To Restoring Smiles</h4>

			<div class="testimonial-videos inverted">
				<div class="row">
					<div class="col-lg-4">
						<lite-youtube videoid="eAbMEdqiAfc" style="width:100%;" height="170"></lite-youtube>

						<p class="text-white">The results have been fantastic!</p>
					</div>

					<div class="col-lg-4">
						<lite-youtube videoid="FL5KUgsXZ80" style="width:100%;" height="170"></lite-youtube>

						<p class="text-white">Made a massive impact to my smile - <span>Jo</span> </p>

					</div>

					<div class="col-lg-4">
						<lite-youtube videoid="8uo-BW7zKps" style="width:100%;" height="170"></lite-youtube>

						<p class="text-white">Really happy with the results! - <span>Nicola</span> </p>

					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="comp__video-testimonials text-center d-lg-none sp-pt-pb">
		<div class="container">
		<span class="tag"><i class="bi bi-stars"></i>
  Your Smile, Reimagined
</span>
		  
			<h4 class="inverted ">A Personal Approach To Restoring Smiles</h4>

			<div class="testimonial-videos inverted">
				<div class="slider">
					<div class="slide">
						<lite-youtube videoid="eAbMEdqiAfc" style="width:100%;" height="170"></lite-youtube>

						<p class="text-white">The results have been fantastic!</p>
					</div>

					<div class="slide">
						<lite-youtube videoid="FL5KUgsXZ80" style="width:100%;" height="170"></lite-youtube>

						<p class="text-white">Made a massive impact to my smile - <span>Jo</span> </p>

					</div>

					<div class="slide">
						<lite-youtube videoid="8uo-BW7zKps" style="width:100%;" height="170"></lite-youtube>

						<p class="text-white">Really happy with the results! - <span>Nicola</span> </p>

					</div>
				</div>
			</div>
		</div>
	</div>


<?php else : ?>

	<div class="comp__video-testimonials text-center">
		<div class="container">
			<span class="tag"><i class="bi bi-stars"></i>
  Your Smile, Reimagined
</span>
		  
			<h4 class="inverted ">A Personal Approach To Restoring Smiles</h4>

			<div class="testimonial-videos inverted">
				<div class="row">
					<div class="col-lg-4">
						<lite-youtube videoid="eAbMEdqiAfc" style="width:100%;" height="170"></lite-youtube>

						<strong>The results have been FANTASTIC!!!</strong>

						<span>Happy Patient</span>
					</div>

					<div class="col-lg-4">
						<lite-youtube videoid="FL5KUgsXZ80" style="width:100%;" height="170"></lite-youtube>

						<strong>Made a massive impact to my smile</strong>

						<span>Jo</span>
					</div>

					<div class="col-lg-4">
						<lite-youtube videoid="8uo-BW7zKps" style="width:100%;" height="170"></lite-youtube>

						<strong>Really happy with the results &amp; inman aligner</strong>

						<span>Nicola</span>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php endif; ?>