<?php 

/* Template Name: Custom Prints Page*/ 

?>

<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part('includes/content/content', 'custom-prints'); ?>

		<?php
			// If comments are open or we have at least one comment, load up the comment template
			if ( comments_open() || '0' != get_comments_number() )
				comments_template();
		?>

	<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>