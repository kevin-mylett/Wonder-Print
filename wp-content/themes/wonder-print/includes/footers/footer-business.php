<?php
/**
 * The template for displaying the footer on all business printing pages.
 *
 * Contains the closing of the section .main-content div and all content after
 *
 */
?>
			</section> <!-- close .main-content -->
		</div><!-- close .content-wrapper -->
        <div class="branding"></div>
	</div><!-- close .row is-flex -->
</div><!-- close .alt-container-->

<footer class="site-footer">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
	<div class="container">
			<div class="site-footer-inner">
                <div class="footer-contact">
					<h4 class="footer-heading">Get In Touch</h4>
						<ul class="contact-list">
							<li>
	                		<span class="fa-stack fa-lg">
	  							<i class="fa fa-circle-thin fa-stack-2x" aria-hidden="true"></i>
	  							<i class="fa fa-phone fa-stack-1x" aria-hidden="true"></i>
							</span>
							01732 862 495
							</li>
							<li>
	                		<span class="fa-stack fa-lg">
	  							<i class="fa fa-circle-thin fa-stack-2x" aria-hidden="true"></i>
	  							<i class="fa fa-envelope fa-stack-1x" aria-hidden="true"></i>
							</span>
							<a href="<?php echo bloginfo ( 'url' ) ?>/contact-us" title="Email Us">Email Us</a>
							</li>
							<li>
	                		<span class="fa-stack fa-lg">
	  							<i class="fa fa-circle-thin fa-stack-2x" aria-hidden="true"></i>
	  							<i class="fa fa-twitter fa-stack-1x" aria-hidden="true"></i>
							</span>
							<a href="http://www.twitter.com/wonderprintuk" title="Wonder-Print Twitter">Tweet Us</a>
							</li>
							<li>
	                		<span class="fa-stack fa-lg">
	  							<i class="fa fa-circle-thin fa-stack-2x" aria-hidden="true"></i>
	  							<i class="fa fa-facebook fa-stack-1x" aria-hidden="true"></i>
							</span>
							<a href="http://www.facebook.com/wonderprintuk" title="Wonder-Print Facebook Page">Like Us</a>
							</li>
						</ul>

                </div><!--close .footer contact-->
                <div class="footer-help">
                    <h4 class="footer-heading">Help</h4>
                    <ul class="help-links">
                    	<li><a href="<?php echo bloginfo ( 'url' ) ?>/contact-us" title="Contact Us">Contact Us</a></li>
                    	<li><a href="<?php echo bloginfo ( 'url' ) ?>/terms-and-conditions" title="Terms &amp; Conditions">Terms &amp; Conditions</a></li>
                    	<li><a href="<?php echo bloginfo ( 'url' ) ?>/privacy-policy" title="Privacy Policy">Privacy Policy</a></li>
                    	<li><a href="<?php echo bloginfo ( 'url' ) ?>/sitemap_index.xml" title="Sitemap">Site Map</a></li>

                    </ul>
                 </div>

                <div class="footer-categories">
                	<h4 class="footer-heading">Categories</h4>
                    <ul class="help-links">
                    <?php if (! is_page(array('contact-us', 'about-us', 'terms-and-conditions', 'privacy-policy')) ) : ?>
                    	<li><a href="<?php echo bloginfo ( 'url' ) ?>/print-for-business/shop-signage" title="Shop Signage printing">Shop Signage</a></li>
                    	<li><a href="<?php echo bloginfo ( 'url' ) ?>/print-for-business/retail-branding" title="Retail Branding">Retail Branding</a></li>
                    	<li><a href="<?php echo bloginfo ( 'url' ) ?>/print-for-business/wall-art" title="Wall art design &amp; print">Wall Art</a></li>
                    	<li><a href="<?php echo bloginfo ( 'url' ) ?>/print-for-business/glass-manifestation" title="Glass Manifestation printing">Glass Manifestation</a></li>
                    	<li><a href="<?php echo bloginfo ( 'url' ) ?>/print-for-business/leaflet-design-and-printing" title="Leaflet design and print">Leaflets</a></li>
                        <?php else : ?>
                            <li><a href="<?php echo bloginfo ( 'url' ) ?>/print-for-business/" title="Business Printing">Print For Business</a></li>
                            <li><a href="<?php echo bloginfo ( 'url' ) ?>/shop/" title="Print Shop">Print Shop</a></li>
                    <?php endif ?>
                    </ul>
                </div>
                <div class="footer-twitter">
                    <h4 class="footer-heading">Latest Tweets</h4>
                        <div class="twitter-block">
                            <a class="twitter-timeline" href="https://twitter.com/wonderprintuk" data-tweet-limit="1" data-chrome="nofooter noheader transparent" data-link-color="#fff">Tweets by wonderprintuk</a>
                        </div>
                </div>
            </div>
	</div><!-- close .container -->
    
            <div class="site-info">
                <div class="alt-container">
                    <div class="row is-flex site-info-content">
                    	<div class="card-icons">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cards.png" alt="Wonder-Print"/>
                        </div>
                        <div class="copyright" >
                            <p>Copyright &copy; <?php echo date('Y'); ?> Wonder-Print t/a Wonder-Group (Int) Ltd.</p>
                        </div>
                        <div class="credits">
                            <p><a href="http://www.99pixels.co.uk">Website Design</a> by 99 Pixels</p>
                        </div>
                    </div>
                </div>
            </div><!-- close .site-info -->

</footer><!-- close .site-footer -->

<?php wp_footer(); ?>

</body>
</html>
