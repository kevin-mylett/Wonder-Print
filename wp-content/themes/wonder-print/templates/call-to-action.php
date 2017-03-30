	
	<div class="row">
		<div class="contact-box">
			<i class="fa fa-3x fa-thumbs-o-up" aria-hidden="true"></i>
			<h3>Let's start printing!</h3>
			<hr />
				<?php if(is_page('custom-prints')) : ?>
					<p>Please get in touch with a member of our team if you have any ideas that you would like assistance with.</p>
					<p>We will promptly provide a non-obligation quote free of charge.</p>
				<?php else : ?>
					<p>Get in touch with us today to discuss your project &amp; find out how we can meet your business printing needs.</p>
				<?php endif ?>
			<hr />
			<a href="<?php echo bloginfo ( 'url' ) ?>/contact-us" title="Contact us" class="btn-cta">Contact Us</a>
		</div>
	</div>