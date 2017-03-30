<?php
/**
 * The template used for displaying page content in page.php
 *
 * 
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
	</header><!-- .entry-header -->

<div class="row">
	<div class="custom-process">
		<div class="custom-stage">
			<i class="fa fa-3x fa-lightbulb-o" aria-hidden="true"></i>
			<span class="stage-heading">Your idea</span>
			<p>Let us know your vision in as much detail as possible</p>
		</div>
		<div class="custom-stage">
			<i class="fa fa-3x fa-picture-o" aria-hidden="true"></i>
			<span class="stage-heading">Our creativity</span>
			<p>We create your personalised print and send you a final visual prior to printing</p>
		</div>
		<div class="custom-stage">
			<i class="fa fa-3x fa-truck" aria-hidden="true"></i>
			<span class="stage-heading">Your custom print</span>
			<p>We print your finished product and deliver it to you</p>
		</div>
	</div>
</div>
	
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

	<!--<?php if (!is_page (array('contact-us', 'about-us'))) {
		get_template_part('templates/call-to-action');
	}

	?>-->

	<?php edit_post_link( __( 'Edit', '_tk' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->