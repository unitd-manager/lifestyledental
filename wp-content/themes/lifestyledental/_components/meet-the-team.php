<?php
/**
 * Meet the team component.
 *
 * @package lifestyledental
 * @author Pop Creative
 */

?>

<div class="comp__meet-the-team comp__section">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<picture>
					<source
					data-srcset="https://www.lifestyledental.co.uk/wp-content/uploads/2021/10/nadim-team.webp"
					type="image/webp"
					>

					<source
					data-srcset="<?php the_field( 'meet_the_team_image', 'option' ); ?>"
					type="image/jpeg"
					> 

					<img
					class="img-fluid lazyload"
					data-src="<?php the_field( 'meet_the_team_image', 'option' ); ?>"
					alt="team"
					>
				</picture>

				<lite-youtube
				videoid="KvmMtBAV_R0"
				style="width:100%;"
				height="300"
				></lite-youtube>
			</div>

			<div class="col-lg-6">
				<h2 class="text-uppercase">
					<?php the_field( 'meet_the_team_title', 'option' ); ?>
				</h2>

				<?php the_field( 'meet_the_team_text', 'option' ); ?>
			</div>
		</div>
	</div>
</div>
