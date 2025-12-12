<?php
/**
 * Accredition logos misc component.
 *
 * @package lifestyledental
 * @author Pop Creative
 */

?>

<div class="comp__accreditation-logos">
	<div class="container">
		<picture>
			<source
			data-srcset="https://www.lifestyledental.co.uk/wp-content/uploads/2019/01/clientlogos-v2.webp"
			type="image/webp"
			>

			<source
			data-srcset="<?php the_dist_path( 'img/clientlogos-v2.png' ); ?>"
			type="image/jpeg"
			> 

			<img
			class="lazyload"
			data-src="<?php the_dist_path( 'img/clientlogos-v2.png' ); ?>"
			alt="Accredition Logos"
			>
		</picture>
	</div>
</div>
