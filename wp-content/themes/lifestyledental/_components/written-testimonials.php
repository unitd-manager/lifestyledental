<?php
/**
 * Written testimonials component.
 *
 * @package lifestyledental
 * @author Pop Creative
 */

?>

<?php if ( have_rows( 'testimonials', 'option' ) ) : ?>
	<div class="comp__written-testimonials comp__section text-center">
		<div class="container">
			<h2 class="text-uppercase mb-5">
				<?php the_field( 'testimonials_title', 'option' ); ?>
			</h2>

			<div class="row">
				<?php
				while ( have_rows( 'testimonials', 'option' ) ) :
					the_row();
					?>
					<div class="col-lg-4">
						<img class="img-fluid mb-2 lazyload" data-src="<?php the_sub_field( 'image' ); ?>">

						<p>
							<strong><?php the_sub_field( 'title' ); ?></strong>
						</p>

						<?php the_sub_field( 'text' ); ?>
					</div>
				<?php endwhile ?>
			</div>
		</div>
	</div>
<?php endif; ?>
