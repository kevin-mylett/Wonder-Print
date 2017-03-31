<?php 

/* Template Name: Business Category 
*  (Shop Signage, Retail Branding, Glass Manifestation etc.)
*/ 

?>

<?php if (is_page(array('contact-us', 'about-us')) ) : ?>

	<?php get_template_part ('/templates/us-header') ?>

<?php else : ?> 
<?php get_header('business'); ?>
<?php endif ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'business' ); ?>

		<?php
			// If comments are open or we have at least one comment, load up the comment template
			if ( comments_open() || '0' != get_comments_number() )
				comments_template();
		?>

	<?php endwhile; // end of the loop. ?>


<?php get_footer('business'); ?>