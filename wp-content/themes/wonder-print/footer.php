<?php
/**
 * The template for displaying the footer on shop / home printing pages.
 *
 *
 */
?>
		
		</div><!-- close .content-wrapper -->
        <div class="branding"></div>
	</div><!-- close .row is-flex -->
</div><!-- close .alt-container-->

<footer class="site-footer" role="contentinfo">
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
                        <li><a href="<?php echo bloginfo ( 'url' ) ?>/shop/product-category/wall-stickers/" title="Wall Stickers">Wall Stickers</a></li>
                        <li><a href="<?php echo bloginfo ( 'url' ) ?>/shop/product-category/canvas-prints/" title="Canvas Prints">Canvas Prints</a></li>
                        <li><a href="<?php echo bloginfo ( 'url' ) ?>/shop/product-category/vinyl-wallpaper/" title="vinyl Wallpaper">Vinyl Wallpaper</a></li>
                        <li><a href="<?php echo bloginfo ( 'url' ) ?>/shop/product-category/wedding-prints/" title="Wedding Prints">Wedding Prints</a></li>
                        <li><a href="<?php echo bloginfo ( 'url' ) ?>/custom-prints/" title="Wedding Prints">Custom Prints</a></li>
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
