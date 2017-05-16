<?php
/**
 * Loop Rating
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/rating.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;
$rating_count = $product->get_rating_count();

if ( get_option( 'woocommerce_enable_review_rating' ) === 'no' )
	return;

if ( $rating_count == 0 ) {
	echo '<div class="no-rating">-</div>';
	} else {
		echo wc_get_rating_html( $product->get_average_rating() );
	}
?>