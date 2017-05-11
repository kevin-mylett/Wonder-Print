<?php 
/* 
*  Template Name: Business Homepage 
*/ 
?>

<?php get_template_part('includes/headers/header', 'business'); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part('includes/content/content', 'business-homepage'); ?>

		<?php
			// If comments are open or we have at least one comment, load up the comment template
			if ( comments_open() || '0' != get_comments_number() )
				comments_template();
		?>

	<?php endwhile; // end of the loop. ?>

<?php get_template_part('includes/footers/footer', 'business'); ?>