<?php

//Bootstrap CDN setup
// Only on front-end pages, NOT in admin area
if (!is_admin()) {

	// Load CSS
	add_action('wp_enqueue_scripts', 'twbs_load_styles', 11);
	function twbs_load_styles() {
        //Wonder-Print Theme CSS (minified if production)
        if(get_site_url() == "https://www.wonder-print.co.uk" || get_site_url() == "http://staging.wonder-print.co.uk" ) {
            wp_register_style('wonder-bar', get_stylesheet_directory_uri() . '/style.min.css', array(), null, 'all');
            wp_enqueue_style('wonder-bar');
        } else {
        // Theme Styles
        wp_register_style('theme-styles', get_stylesheet_uri(), array(), null, 'all');
        wp_enqueue_style('theme-styles');
         }
		// Font Awesome
		wp_register_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', array(), null, 'all');
		wp_enqueue_style('font-awesome');
        //Cookie Notice
        wp_register_style('cookie-note', '//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css', array(), null, 'all');
        wp_enqueue_style('cookie-note');
	}

	// Load Javascript
	add_action('wp_enqueue_scripts', 'twbs_load_scripts', 12);
	function twbs_load_scripts() {
		// De-register jQuery
	    //wp_deregister_script('jquery');
        //Twitter Feed in Footer
        wp_register_script('twitter-timeline-async', '//platform.twitter.com/widgets.js', array(), null, null, true);
        wp_enqueue_script('twitter-timeline-async');
        //Cookie Notice
        wp_register_script('cookie-notice-async', '//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js', array(), null, null, true);
        wp_enqueue_script('cookie-notice-async');
        //Maps
        wp_register_script('maps', 'https://maps.google.com/maps/api/js?key=AIzaSyBixkrcaZ8_DNCRkuiH2SGoE-B1Df6D8Rc', array(), null, null, true);
        wp_enqueue_script('maps');
        //Google Fonts 
        wp_register_script('google-fonts', get_stylesheet_directory_uri() . '/js/google-fonts.js' );
        wp_enqueue_script('google-fonts');
        //wonder-print
        wp_register_script('wonder-print', get_stylesheet_directory_uri() . '/js/wonder-print.js' );
        wp_enqueue_script('wonder-print');
            
    }

} // end if !is_admin

//Disable css files from _tk parent theme (Using Grunt / CDN instead )

add_action( 'wp_print_styles', 'my_deregister_styles', 100 );

function my_deregister_styles() {
	wp_deregister_style( '_tk-style' );
    wp_deregister_style( '_tk-bootstrap' );
    wp_deregister_style( '_tk-font-awesome' );
}

//Removes bootstrap.min.js from _tk parent theme (Using Grunt instead)

add_action( 'wp_print_scripts', 'wpdocs_dequeue_script', 100 );

function wpdocs_dequeue_script() {
   wp_dequeue_script( '_tk-bootstrapjs' );
}

/**
* Add async or defer attributes to script enqueues
* @author Mike Kormendy
* @param  String  $tag     The original enqueued <script src="...> tag
* @param  String  $handle  The registered unique name of the script
* @return String  $tag     The modified <script async|defer src="...> tag
*/
// only on the front-end
if(!is_admin()) {
    function add_asyncdefer_attribute($tag, $handle) {
        // if the unique handle/name of the registered script has 'async' in it
        if (strpos($handle, 'async') !== false) {
            // return the tag with the async attribute
            return str_replace( '<script ', '<script async ', $tag );
        }
        // if the unique handle/name of the registered script has 'defer' in it
        else if (strpos($handle, 'defer') !== false) {
            // return the tag with the defer attribute
            return str_replace( '<script ', '<script defer ', $tag );
        }
        // otherwise skip
        else {
            return $tag;
        }
    }
    add_filter('script_loader_tag', 'add_asyncdefer_attribute', 10, 2);
}

//Add Menu's
function register_my_menus() {
register_nav_menus(
array(
'business-print-menu' => __( 'Business Print Navigation Menu' ),
'shop-menu' => __( 'Shop Navigation Menu' ),
'default-menu' => __('Alternative Menu')
)
);
}
add_action( 'init', 'register_my_menus' );

################################################################################## - WOOCOMMERCE - ######################################################################

//Remove sidebar from all WooCommerce pages
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

//Add Woocommerce theme support
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
    //Add product gallery support
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}

/*
*Remove woocommerce content wrappers & replace with custom wrappers - **Shop pages only**
*/
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

add_action('woocommerce_before_main_content', 'theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'theme_wrapper_end', 10);

function theme_wrapper_start() {
  echo '<section class="main-content" role="main">';
}

function theme_wrapper_end() {
  echo '</section>';
}

 
// Ensure cart contents update when products are added to the cart via AJAX (place the following in functions.php)
add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );
function woocommerce_header_add_to_cart_fragment( $fragments ) {
ob_start();
?>
<a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf (_n( '%d item', '%d items', WC()->cart->cart_contents_count ), WC()->cart->cart_contents_count ); ?> - <?php echo WC()->cart->get_cart_total(); ?></a>
<?php
$fragments['a.cart-contents'] = ob_get_clean();
return $fragments;
}


/* Woocommerce 4 Column Related products */
add_filter( 'woocommerce_output_related_products_args', function( $args ) 
{ 
    $args = wp_parse_args( array( 
        'posts_per_page' => 4,
        'columns' => 4 
    
        ), $args );
    return $args;
});

// Display 3 products per row
add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
    function loop_columns() {
        return 3; // 3 products per row
    }
}

// Display 12 products per page
add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 12;' ), 20 );

//Re-position Product Category from product page
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 15);

//Move position of star-rating on archive page
remove_action('woocommerce_after_shop_loop_item_title' , 'woocommerce_template_loop_rating', 5);
add_action('woocommerce_shop_loop_item_title' , 'woocommerce_template_loop_rating', 5);

//Remove SKU from product page
function remove_product_page_skus( $enabled ) {
    if ( ! is_admin() && is_product() ) {
        return false;
    }

    return $enabled;
}
add_filter( 'wc_product_sku_enabled', 'remove_product_page_skus' );

//Add 'Customised Product' button
add_action('woocommerce_after_single_product_summary', 'customise_product', 5);
function customise_product() {
  get_template_part('includes/customise-product');
}

//Change additional informatiom tab to 'product options'
add_filter( 'woocommerce_product_tabs', 'woo_rename_tabs', 98 );
function woo_rename_tabs( $tabs ) {

    $tabs['additional_information']['title'] = __( 'Product Options' );    // Rename the additional information tab

    return $tabs;

}

//Change additional informatiom tab heading to 'product options'
add_filter('woocommerce_product_additional_information_heading', 'change_heading');

function change_heading() {
    echo '<h2>Product Options</h2>';
}

//Add Delivery Tab
add_filter( 'woocommerce_product_tabs', 'delivery_tab' );
function delivery_tab( $tabs ) {
    
    // Adds the new tab
    
    $tabs['delivery'] = array(
        'title'     => __( 'Delivery', 'woocommerce' ),
        'priority'  => 30,
        'callback'  => 'delivery_content'
    );

    return $tabs;

}
function delivery_content() {
    get_template_part('includes/delivery-information');
}

//Change button class of add-to-card notification
add_filter( 'wc_add_to_cart_message_html', 'custom_cart_message_button_class', 10, 2 );
function custom_cart_message_button_class($message, $products) {
    $count  = 0;

    foreach ( $products as $product_id => $qty ) {
        $titles[] = ( $qty > 1 ? absint( $qty ) . ' &times; ' : '' ) . sprintf( _x( '&ldquo;%s&rdquo;', 'Item name in quotes', 'woocommerce' ), strip_tags( get_the_title( $product_id ) ) );
        $count += $qty;
    }

    $titles     = array_filter( $titles );
    $added_text = sprintf( _n( '%s has been added to your cart.', '%s have been added to your cart.', $count, 'woocommerce' ), wc_format_list_of_items( $titles ) );

    $titles     = array_filter( $titles );
    $added_text = sprintf( _n( '%s has been added to your cart.', '%s have been added to your cart.', $count, 'woocommerce' ), wc_format_list_of_items( $titles ) );
    $message = sprintf( '%s<a href="%s" class="btn-woo-notice">%s</a>', esc_html( $added_text ), esc_url( wc_get_page_permalink( 'cart' ) ), esc_html__( 'View Cart', 'woocommerce' ) );
    return $message;
}

//Add category thumbnail as a category banner on shop pages.
add_action( 'woocommerce_archive_description', 'woocommerce_category_image', 2 );
function woocommerce_category_image() {
    if ( is_product_category() ){
        global $wp_query;
        $cat = $wp_query->get_queried_object();
        $thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
        $image = wp_get_attachment_url( $thumbnail_id );
        $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
        if ( $image ) {
            echo '<div class="shop-category-banner-image"><img src="' . $image . '" alt="' . $alt . '" /></div>';
        }
    }
}

// Change pagination arrows
add_filter( 'woocommerce_pagination_args',  'woo_pagination' );
    function woo_pagination( $args ) {

    $args['prev_text'] = '<i class="fa fa-angle-left"></i>';
    $args['next_text'] = '<i class="fa fa-angle-right"></i>';

    return $args;
}

//Hide Number of items in category on Shop Page
add_filter( 'woocommerce_subcategory_count_html', 'jk_hide_category_count' );
function jk_hide_category_count() {
    // No count
}

/**
* Add Bootstrap classes to checkout fields 
* WooCommerce - Modify each individual input type $args defaults
* - http://stackoverflow.com/questions/23943791/add-custom-css-class-to-woocommerce-checkout-fields
*/

add_filter('woocommerce_form_field_args','wc_form_field_args',10,3);

function wc_form_field_args( $args, $key, $value = null ) {

    //Start field type switch case

    switch ( $args['type'] ) {

        case "select" :  /* Targets all select input type elements, except the country and state select input types */
            $args['class'][] = 'form-group'; // Add a class to the field's html element wrapper - woocommerce input types (fields) are often wrapped within a <p></p> tag  
            $args['input_class'] = array('form-control'); // Add a class to the form input itself
            //$args['custom_attributes']['data-plugin'] = 'select2';
            $args['label_class'] = array('control-label');
            $args['custom_attributes'] = array( 'data-plugin' => 'select2', 'data-allow-clear' => 'true', 'aria-hidden' => 'true',  ); // Add custom data attributes to the form input itself*/
        break;

        case 'country' : /* By default WooCommerce will populate a select with the country names - $args defined for this specific input type targets only the country select element */
            $args['class'][] = 'form-group single-country';
            $args['label_class'] = array('control-label');
        break;

        case "state" : /* By default WooCommerce will populate a select with state names - $args defined for this specific input type targets only the country select element */
            $args['class'][] = 'form-group'; // Add class to the field's html element wrapper 
            $args['input_class'] = array('form-control'); // add class to the form input itself
            //$args['custom_attributes']['data-plugin'] = 'select2';
            $args['label_class'] = array('control-label');
            $args['custom_attributes'] = array( 'data-plugin' => 'select2', 'data-allow-clear' => 'true', 'aria-hidden' => 'true',  );
        break;


        case "password" :
        case "text" :
        case "email" :
        case "tel" :
        case "number" :
            $args['class'][] = 'form-group';
            //$args['input_class'][] = 'form-control input-lg'; // will return an array of classes, the same as bellow
            $args['input_class'] = array('form-control');
            $args['label_class'] = array('control-label');
        break;

        case 'textarea' :
            $args['input_class'] = array('form-control');
            $args['label_class'] = array('control-label');
        break;

        case 'checkbox' : 
            $args['label_class'] = array('control-label');
        break;

        case 'radio' :
        break;

        default :
            $args['class'][] = 'form-group';
            $args['input_class'] = array('form-control');
            $args['label_class'] = array('control-label');
        break;
    }

        return $args;
}


################################################################################## - END OF WOOCOMMERCE - ######################################################################


################################################################################## - IMAGES - ##################################################################################

/** Image Width's
*	Small = 688px		Medium_Large = 890px
*	Medium = 737px		Large = 1073px
*/

/**
* Adding custom image size
*/
add_action('init', 'add_image_sizes');
function add_image_sizes() {
    // add additional image sizes. !Not displayed in admin section!
    add_image_size( 'small', 688, 0, FALSE); // force crop false
}

/**
*Add custom sizes to media library dropdown
*/
function post_image_sizes($sizes){
    $custom_sizes = array(
        'small' => 'Small'
    );

    return array_merge( $sizes, $custom_sizes );
}
add_filter('image_size_names_choose', 'post_image_sizes');

//Add custom sizes attribute to all .img

function image_sizes_attr($sizes, $size) {
    if(is_product_category() || (is_shop())) {
        $width = $size[0];
            return '320px';
    } else if(is_product()) {
        $width = $size[0];
            return '(max-width: 768px) 500px, (max-width: 991px) 320px, (max-width: 1199px) 500px, 500px' ;
    }else if(is_cart()) {
        $width = $size[0];
            return '180px';
    } else {
    $width = $size[0];
            return '(max-width: 767px) 737px, (max-width: 991px) 688px, (max-width: 1199px) 890px, 1073px';
        }
}
add_filter('wp_calculate_image_sizes', 'image_sizes_attr', 10 , 2);

// Remove image dimensions. Not required.
function bootstrap_responsive_images( $html ){
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}
add_filter( 'the_content','bootstrap_responsive_images',10 );
add_filter( 'post_thumbnail_html', 'bootstrap_responsive_images', 10 ); 


/**Change dimensions of new default image size (medium_large). Added to wordpress v4.4 as part of introduction
*	of responsive images. Not visible in frontend UI.
	https://make.wordpress.org/core/2015/11/10/responsive-images-in-wordpress-4-4/.
*/
add_action( 'switch_theme', 'themename_enforce_image_size_options' );

function themename_enforce_image_size_options() {
	update_option( 'medium_large_size_w', 890 );
	update_option( 'medium_large_size_h', 0 );
}


################################################################################## -END OF IMAGES - ##################################################################################



/*
*Add class to contact-us page for google-maps.js to execute on
*/
add_filter( 'body_class', 'custom_class' );
    function custom_class( $classes ) {
        if ( is_page( 'contact-us' ) ) {
            $classes[] = 'google-maps';
        }
        return $classes;
    }