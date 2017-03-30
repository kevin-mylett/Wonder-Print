<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package _tk
 */
?>


<?php 
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
		<?php if (is_page('contact-us')) {
			echo '<div class="head-image" id="map-container">';
		} else {
			echo '<div class="head-image">';
		}
			?>
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
	</div>

	<?php if (!is_page (array('contact-us', 'about-us'))) {
		get_template_part('templates/call-to-action');
	}

	?>

	<?php get_template_part('templates/clients'); ?>

	<?php edit_post_link( __( 'Edit', '_tk' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
