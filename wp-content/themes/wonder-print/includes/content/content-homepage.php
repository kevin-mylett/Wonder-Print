<?php
/**
 * The template used for displaying page content on the sites hompeage
 *
 */
?>

  <h1 class="home-heading">Large format printing services for home and business</h1>
  
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container-fluid">
      <div class="row is-flex">
        <div class="home-image-wrapper business-print"></div>
        <div class="home-text-wrapper">
          <div class="intro-text">
            <h2>Print for Business</h2>
            <p>We print and design a range of products ideal for any type of business with the primary objective of increasing brand awareness by creating an eye-catching display. Our products include internal &amp; external shop signage, retail branding, glass manifestation, wall art and business leaflets.</p>
            <a href="<?php echo bloginfo ( 'url' ) ?>/print-for-business/" class="btn" title="Business Printing - Signage and retail branding">Shop for Business</a>
          </div>
        </div>
      </div><!--end of row-->
        
      <div class="row is-flex">
        <div class="home-text-wrapper home-wrapper">
          <div class="intro-text home-intro">
            <h2>Print Shop</h2>
            <p>Our print shop contains a variety of removable wall art, consisting of wall stickers, wall murals, printed wallpaper and a range of framed and canvas prints. They are ideal for any room in your home, classrooms, sports changing rooms and many many more!</p>
            <p>All of our print items can be customised to bring your specific vision to reality.</p>
            <a href="<?php echo bloginfo ( 'url' ) ?>/shop/" class="btn" title="Print Shop - Stock and custom prints">Print Shop</a>
          </div>
        </div>
        <div class="home-image-wrapper home-print"></div>
      </div><!--end of row-->

    <div class="entry-content">
    	<?php the_content(); ?>
    	<?php
    		wp_link_pages( array(
    			'before' => '<div class="page-links">' . __( 'Pages:', '_tk' ),
    			'after'  => '</div>',
    		) );
    	?>  
    </div><!-- .entry-content -->

  	 <?php edit_post_link( __( 'Edit', '_tk' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
    </div><!-- container-fluid -->
  </article><!-- #post-## -->