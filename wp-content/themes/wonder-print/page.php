<?php
/*
* Page Template for all pages using the 'Default Template'
*/
?>

<?php if (is_page(array('terms-and-conditions', 'privacy-policy')) ) {

	get_template_part('includes/headers/header', 'us');

	} else {
		get_header();
	} 
?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'page' ); ?>

		<?php
			// If comments are open or we have at least one comment, load up the comment template
			if ( comments_open() || '0' != get_comments_number() )
				comments_template();
		?>

	<?php endwhile; // end of the loop. ?>


<?php if (is_page(array('terms-and-conditions', 'privacy-policy')) ) {

	get_template_part('includes/footers/footer', 'business');

	} else {
		get_footer();
	} 
?>
