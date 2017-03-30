<?php
/**
 * The template used for displaying page content on the business print homepage
 *
 * @package _wonder-print
 */
?>


<?php 
$post_title = get_the_title();
$title_as_array = explode(' ', $post_title);
$last_word = array_pop($title_as_array);
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<div class="row is-flex">
			<div class="heading-container <?php echo strtolower($last_word); ?>-bg">
				<h1 class="category-title"><?php the_title(); ?></h1>
			</div>

			<div class="grid head-image main-image">
				<img src="<?php echo bloginfo ( 'url' ) ?>/wp-content/images/banners/raising-brand-awareness.gif" alt="raising brand awareness">
				<?php the_post_thumbnail(); ?>
			</div>
		</div>
	</header><!-- .entry-header -->
	
<div class="row">
	<div class="grid grid-middle">
		<div class="box-container">
			<a href="<?php echo bloginfo ( 'url' ) ?>/print-for-business/shop-signage/" title="Shop Signage design &amp; printing">
				<img src="<?php echo bloginfo ( 'url' ) ?>/wp-content/images/banners/shop-signage-banner.jpg" alt="shop signage">	
				<div class="box-heading">
					<h2>Shop Signage</h2>
				</div>
			</a>
		</div>
	</div>
	<div class="grid grid-middle">
		<div class="box-container">
			<a href="<?php echo bloginfo ( 'url' ) ?>/print-for-business/retail-branding/" title="Retail Branding printing">	
				<img src="<?php echo bloginfo ( 'url' ) ?>/wp-content/images/banners/retail-branding-banner.jpg" alt="retail branding">	
				<div class="box-heading">
					<h2>Retail Branding</h2>
				</div>
			</a>
		</div>
	</div>

	<div class="grid grid-bottom">
	<div class="box-container">
			<a href="<?php echo bloginfo ( 'url' ) ?>/print-for-business/wall-art/" title="Business wall art design &amp; printing">	
				<img src="<?php echo bloginfo ( 'url' ) ?>/wp-content/images/banners/wall-art-banner.jpg" alt="custom business wall art">	
				<div class="box-heading">
					<h2>Wall Art</h2>
				</div>
			</a>
		</div>
	</div>

	<div class="grid grid-bottom">
		<div class="box-container">
			<a href="<?php echo bloginfo ( 'url' ) ?>/print-for-business/glass-manifestation/" title="Glass Manifestation printing">	
				<img src="<?php echo bloginfo ( 'url' ) ?>/wp-content/images/banners/glass-manifestation-banner.jpg" alt="glass manifestation">	
				<div class="box-heading">
					<h2>Glass Manifestation</h2>
				</div>
			</a>
		</div>
	</div>

	<div class="grid grid-bottom">
		<div class="box-container">
			<a href="<?php echo bloginfo ( 'url' ) ?>/print-for-business/leaflet-design-and-printing/" title="Leaflet printing">	
				<img src="<?php echo bloginfo ( 'url' ) ?>/wp-content/images/banners/leaflets-banner.jpg" alt="leaflet printing for business">	
				<div class="box-heading">
					<h2>Leaflets</h2>
				</div>
			</a>
		</div>	
	</div>

	</div>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', '_tk' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php get_template_part('templates/clients'); ?>


	<?php edit_post_link( __( 'Edit', '_tk' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->