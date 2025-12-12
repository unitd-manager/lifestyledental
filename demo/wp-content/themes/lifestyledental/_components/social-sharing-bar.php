<?php
/**
 * Social Media sharing bar component.
 *
 * @package lifestyledental
 * @author Pop Creative
 */

?>

<div class="social-media-bar">
	<!-- <a
	href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"
	target="_blank"
	class="share-facebook"
	alt="Share this home on Facebook"
	>
		<span class="fa-stack fa-lg">
			<i class="fa fa-circle fa-stack-2x"></i>
			<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
		</span>
	</a> -->

	<a
	href="https://twitter.com/home?status=<?php the_title(); ?>%20-%20<?php the_permalink(); ?>"
	target="_blank"
	class="share-twitter"
	>
		<span class="fa-stack fa-lg">
			<i class="fa fa-circle fa-stack-2x"></i>
			<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
		</span>
	</a>

	<a
	href="mailto:?subject=<?php the_title(); ?>&amp;body=<?php the_permalink(); ?>"
	class="share-email"
	>
		<span class="fa-stack fa-lg">
			<i class="fa fa-circle fa-stack-2x"></i>
			<i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
		</span>
	</a>

	<a
	href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>&amp;summary="
	target="_blank"
	class="share-linkedin"
	>
		<span class="fa-stack fa-lg">
			<i class="fa fa-circle fa-stack-2x"></i>
			<i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
		</span>
	</a>
</div>
