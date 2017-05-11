<?php
/**
 * The template used for displaying page content on business category pages.
 *
 */
$post_title = get_the_title();
$title_as_array = explode(' ', $post_title);
$last_word = array_pop($title_as_array);

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<div class="row is-flex category-wrapper">
			<div class="heading-container <?php echo strtolower($last_word); ?>-bg">
				<h1 class="category-title"><?php the_title(); ?></h1>
			</div>
			<div class="head-image">
				<?php the_post_thumbnail(); ?>
			</div>
		</div>
	</header><!-- .entry-header -->
	
	<div class="row">
		<div class="entry-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', '_tk' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
	</div><!-- .row -->

	<?php get_template_part('includes/call-to-action'); ?>

	<?php get_template_part('includes/clients'); ?>

	<?php edit_post_link( __( 'Edit', '_tk' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>

</article><!-- #post-## -->
