<?php
/**
 * The page template file
 */

get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php // do stuff here ?>

<?php endwhile; endif; ?>



<?php get_footer(); ?>
