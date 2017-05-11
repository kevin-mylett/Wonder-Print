<?php
/**
 * The template for displaying the footer on the main homepage.
 *
 * Contains the closing of the <main> tag and all content after
 *
 */
?>
</main> <!-- close main -->

<footer class="site-footer-home">
    <div class="site-info">
        <div class="alt-container">
            <div class="site-info-content">
            	<div class="card-icons">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cards.png" alt="Credit &amp; debit card icons"/>
                </div>
                <div class="copyright" >
                    <p>Copyright &copy; <?php echo date('Y'); ?> Wonder-Print t/a Wonder-Group (Int) Ltd.</p>
                </div>
                <div class="credits">
                    <p><a href="http://www.99pixels.co.uk" title="Website Design by 99 Pixels">Website Design</a> by 99 Pixels</p>
                </div>
            </div>
        </div>
    </div><!-- close .site-info -->
</footer><!-- close .site-footer-home -->

<?php wp_footer(); ?>

</body>
</html>
