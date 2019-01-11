<?php
/**
 * The page template file
 */

get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="panel u-paddingVert10gu">
	<div class="container container__grid">
		<div class="container__col container__col--spaced">
			<?php the_content(); ?>
		</div><!--.container__col-->
	</div><!--.container-->
</section><!--.panel-->

	<?php // do stuff here ?>

<?php endwhile; endif; ?>



<?php get_footer(); ?>
