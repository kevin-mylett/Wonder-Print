<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _tk
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico?v=2.2"/>
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico?v=2.2"/>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>

    <div class=" top-bar">
        <div class="container">
            <div class="top-content">
                <div class="contact-top">
                	<ul class="social-icons">
                	<li><a href="http://www.facebook.com/wonderprintuk" target="_blank" title="Wonder-Print Facebook Page">
                		<span class="fa-stack">
  							<i class="fa fa-circle facebook-circle fa-stack-2x" aria-hidden="true"></i>
  							<i class="fa fa-facebook fa-stack-1x" aria-hidden="true"></i>
						</span>
					</a></li>
		             <li><a href="http://www.twitter.com/wonderprintuk" target="_blank" title="Wonder-Print Twitter">
		                <span class="fa-stack">
  							<i class="fa fa-circle twitter-circle fa-stack-2x" aria-hidden="true"></i>
  							<i class="fa fa-twitter fa-stack-1x" aria-hidden="true"></i>
						</span>
					</a></li>
					<li class="phone"><a href="<?php echo bloginfo ( 'url' ) ?>/contact-us" title="Contact Us">
		                <span class="fa-stack">
  							<i class="fa fa-circle phone-circle fa-stack-2x" aria-hidden="true"></i>
  							<i class="fa fa-phone fa-stack-1x" aria-hidden="true"></i>
						</span>
					</a></li>
					</ul>
					<ul class="top-links">
		             <li><a href="<?php echo bloginfo ( 'url' ) ?>/about-us" title="About us">About Us</a></li>
		             <li><a href="<?php echo bloginfo ( 'url' ) ?>/contact-us" title="Contact us">Contact Us</a></li>
		             </ul>
     				</div>

                <div class="basket-top">
                    <div class="basket">
                    	<a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf (_n( '%d item', '%d items', WC()->cart->cart_contents_count ), WC()->cart->cart_contents_count ); ?> - <?php echo WC()->cart->get_cart_total(); ?></a>
                    	<a href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><i class="fa fa-lg fa-shopping-cart" aria-hidden="true"></i>
						</a>
                	</div>
            	</div>

        	</div>
    	</div>
    </div>

    <div class="alt-container">
    	<div class="row is-flex">
    	
			<div class="content-wrapper">

				<header id="masthead" class="site-header">
    
			        <nav class="site-navigation">
			        
				        <div class="stripes"></div>
				            
				            
							<div class="navbar-header">
							<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
									<span class="sr-only"><?php _e('Toggle navigation','_tk') ?> </span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<div class="brand-centered">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" class="navbar-brand">
				                	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/wonder-print-logo.png" alt="Wonder-Print Logo"/>
				                </a>
				                </div>

							</div>
							
							<!-- The WordPress Menu goes here -->
							<?php wp_nav_menu(
								array(
										'theme_location' => 'business-print-menu',
										'container_class' => 'collapse navbar-collapse navbar-responsive-collapse',
						                'container_id' => '',
						                'depth' => '',
										'menu_class' => 'nav navbar-nav',
										'fallback_cb' => '',
										'menu_id' => '',
										'walker' => new wp_bootstrap_navwalker()
									)
							); ?>

					</nav><!-- .site-navigation-->
			
				</header><!-- header -->

			<section class="main-content" role="main">
			

