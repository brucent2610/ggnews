<?php
include(get_template_directory() . "/inc/post-meta.php");
include(get_template_directory() . "/inc/post-type.php");
include(get_template_directory() . "/inc/helper.php");
require_once( 'wptuts-options/wptuts-options.php' );

//add_filter('show_admin_bar', '__return_false');
add_action( 'admin_notices', 'my_foldabox_dependencies' );

function my_foldabox_dependencies() {
    if(!is_admin())
        return;

    if(!is_plugin_active('meta-box/meta-box.php'))
        echo '<div class="error"><p>Warning: Need Install Plugin Metabox.io</p></div>';

    if(!is_plugin_active('siteorigin-panels/siteorigin-panels.php'))
        echo '<div class="error"><p>Warning: Need Install Plugin Siteorigin</p></div>';

    if(!is_plugin_active('so-widgets-bundle/so-widgets-bundle.php'))
        echo '<div class="error"><p>Warning: Need Install Plugin Siteorigin Widgets</p></div>';

        if(!is_plugin_active('woocommerce/woocommerce.php'))
        echo '<div class="error"><p>Warning: Need Install Plugin Woocommerce</p></div>';
}

if ( ! function_exists( 'printogram_setup' ) ) :
    function foldabox_setup() {
        add_theme_support( 'post-thumbnails' );
        add_image_size('product-medium', 653, 0);
        // This theme uses wp_nav_menu() in two locations.
        register_nav_menus( array(
            'primary' => __( 'Primary Menu' ),
            'footer'  => __( 'Footer Menu' ),
            'footer_2'  => __( 'Footer Menu 2' ),
            'footer_3'  => __( 'Footer Menu 3' ),
        ) );

    }
endif;
add_action( 'after_setup_theme', 'foldabox_setup' );

function add_my_awesome_widgets_collection($folders){
    $folders[] = __DIR__ . "/widgets/";
    return $folders;
}
add_filter('siteorigin_widgets_widget_folders', 'add_my_awesome_widgets_collection');

class My_Custom_Nav_Walker extends Walker_Nav_Menu {

    function start_lvl(&$output, $depth = 0, $args = array()) {
        $output .= "\n<ul class='ht-dropdown home-dropdown'>\n";
    }

    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        $item_html = '';
        parent::start_el($item_html, $item, $depth, $args);
        $output .= $item_html;
    }

    public function end_el( &$output, $item, $depth = 0, $args = array() ) {
        $output .= "</li>\n";
    }
}

//Footer menu
$footer_social = array(
    'name'          => __('Footer Social'),
    'id'            => 'footer_social',
    'description'   => '',
    'class'         => '',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '<div style="display:none">',
    'after_title'   => '</div>'
);
register_sidebars ( 1, $footer_social);

$footer_column_1 = array(
    'name'          => __('Footer Column 1'),
    'id'            => 'footer_column_1',
    'description'   => '',
    'class'         => '',
    'before_widget' => '',
    'after_widget'  => '',
    // 'before_title'  => '<div style="display:none">',
    // 'after_title'   => '</div>'
);
register_sidebars ( 1, $footer_column_1);

$footer_column_2 = array(
    'name'          => __('Footer Column 2'),
    'id'            => 'footer_column_2',
    'description'   => '',
    'class'         => '',
    'before_widget' => '',
    'after_widget'  => '',
    // 'before_title'  => '<div style="display:none">',
    // 'after_title'   => '</div>'
);
register_sidebars ( 1, $footer_column_2);

$footer_column_3 = array(
    'name'          => __('Footer Column 3'),
    'id'            => 'footer_column_3',
    'description'   => '',
    'class'         => '',
    'before_widget' => '',
    'after_widget'  => '',
    // 'before_title'  => '<div style="display:none">',
    // 'after_title'   => '</div>'
);
register_sidebars ( 1, $footer_column_3);

$footer_column_4 = array(
    'name'          => __('Footer Column 4'),
    'id'            => 'footer_column_4',
    'description'   => '',
    'class'         => '',
    'before_widget' => '',
    'after_widget'  => '',
    // 'before_title'  => '<div style="display:none">',
    // 'after_title'   => '</div>'
);
register_sidebars ( 1, $footer_column_4);

$footer_column_5 = array(
    'name'          => __('Footer Column 5'),
    'id'            => 'footer_column_5',
    'description'   => '',
    'class'         => '',
    'before_widget' => '',
    'after_widget'  => '',
    // 'before_title'  => '<div style="display:none">',
    // 'after_title'   => '</div>'
);
register_sidebars ( 1, $footer_column_5);

$footer_column_6 = array(
    'name'          => __('Footer Column 6'),
    'id'            => 'footer_column_6',
    'description'   => '',
    'class'         => '',
    'before_widget' => '',
    'after_widget'  => '',
    // 'before_title'  => '<div style="display:none">',
    // 'after_title'   => '</div>'
);
register_sidebars ( 1, $footer_column_6);

$footer_tags = array(
    'name'          => __('Footer Tags'),
    'id'            => 'footer_tags',
    'description'   => '',
    'class'         => '',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '<div style="display:none">',
    'after_title'   => '</div>'
);
register_sidebars ( 1, $footer_tags);

$main_menu = array(
    'name'          => __('Main Menu'),
    'id'            => 'main_menu',
    'description'   => '',
    'class'         => '',
    'before_widget' => '',
    'after_widget'  => '',
    // 'before_title'  => '<div style="display:none">',
    // 'after_title'   => '</div>'
);
register_sidebars ( 1, $main_menu);

$sidebar_blog = array(
    'name'          => __('Sidebar Blog'),
    'id'            => 'sidebar_blog',
    'description'   => '',
    'class'         => '',
    'before_widget' => '<div id="%1$s" class="widget_sidebar_blog %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<div style="display:none">',
    'after_title'   => '</div>'
);
register_sidebars ( 1, $sidebar_blog);

$sidebar_product = array(
    'name'          => __('Sidebar Product'),
    'id'            => 'sidebar_product',
    'description'   => '',
    'class'         => '',
    'before_widget' => '<div id="%1$s" class="widget_sidebar_blog %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<div style="display:none">',
    'after_title'   => '</div>'
);
register_sidebars ( 1, $sidebar_product);


//-----Checkout------------------
remove_action('woocommerce_before_checkout_form',
    'woocommerce_checkout_coupon_form', 10
);
remove_action('woocommerce_before_checkout_form',
    'woocommerce_before_checkout_form', 10
);
// Hook in checkout
add_filter( 'woocommerce_checkout_fields' , 'kibath_override_checkout_fields' );
// Our hooked in function - $fields is passed via the filter!
function kibath_override_checkout_fields( $fields ) {
    //orders
    $fields['order']['order_comments']['label'] = 'Mô tả khi giao hàng';
    $fields['order']['order_comments']['placeholder'] = 'Nội dung';

    //billings
//    $fields['billing']['billing_options']['label'] = 'Hóa đơn';

    $fields['billing']['billing_first_name']['label'] = 'Tên';
    $fields['billing']['billing_first_name']['placeholder'] = '';

    $fields['billing']['billing_last_name']['label'] = 'Họ';
    $fields['billing']['billing_last_name']['placeholder'] = '';

    $fields['billing']['billing_company']['label'] = 'Tên công ty';
    $fields['billing']['billing_company']['placeholder'] = '';

    $fields['billing']['billing_address_1']['label'] = 'Địa chỉ';
    $fields['billing']['billing_address_1']['placeholder'] = '';

    $fields['billing']['billing_city']['label'] = 'Thành phố';
    $fields['billing']['billing_city']['placeholder'] = '';

    $fields['billing']['billing_state']['label'] = 'Tỉnh';
    $fields['billing']['billing_state']['placeholder'] = '';

    $fields['billing']['billing_email']['label'] = 'Email';
    $fields['billing']['billing_email']['placeholder'] = '';

    $fields['billing']['billing_phone']['label'] = 'Số điện thoại';
    $fields['billing']['billing_phone']['placeholder'] = '';

    unset($fields['account']);
    unset($fields['billing']['billing_country']);
    unset($fields['billing']['billing_address_2']);
    unset($fields['billing']['billing_city']);
    unset($fields['billing']['billing_state']);
    unset($fields['billing']['billing_company']);
    unset($fields['billing']['billing_postcode']);
    return $fields;
}

function filter_woocommerce_shipping_package_name( $sprintf, $i, $package ) {
    // make filter magic happen here...
    $sprintf = sprintf( _nx( 'Vận chuyển', 'Vận chuyển %d', ( $i + 1 ), 'Gói vận chuyển', 'woocommerce' ), ( $i + 1 ) );
    return $sprintf;
};
// add the filter
add_filter( 'woocommerce_shipping_package_name', 'filter_woocommerce_shipping_package_name', 10, 3 );

// function kibath_add_to_cart_redirect() {
//     return site_url() . '/dat-hang/';
// }
// add_filter('woocommerce_add_to_cart_redirect', 'kibath_add_to_cart_redirect');

function kibath_order_button_text() {
    return __( 'Đặt hàng', 'woocommerce' );
}
add_filter( 'woocommerce_order_button_text', 'kibath_order_button_text' );

add_action('init', 'kibath_clear_cart_url');
function kibath_clear_cart_url() {
    global $woocommerce;
    if( isset($_REQUEST['clear-cart']) ) {
        $woocommerce->cart->empty_cart();
    }
}

// hide coupon field on cart page
function hide_coupon_field_on_cart( $enabled ) {
    if ( is_cart() ) {
        $enabled = false;
    }
    return $enabled;
}
add_filter( 'woocommerce_coupons_enabled', 'hide_coupon_field_on_cart' );
// hide coupon field on checkout page
function hide_coupon_field_on_checkout( $enabled ) {
    if ( is_checkout() ) {
        $enabled = false;
    }
    return $enabled;
}
add_filter( 'woocommerce_coupons_enabled', 'hide_coupon_field_on_checkout' );


function siteorigin_panels_remove_inline_css(){
	remove_action( 'wp_head', 'siteorigin_panels_print_inline_css', 12 );
	remove_action( 'wp_footer', 'siteorigin_panels_print_inline_css' );
}
add_action( 'init', 'siteorigin_panels_remove_inline_css' );

//Adding theme support 
function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' ); //Only if want woocommerce built in
    add_theme_support( 'wc-product-gallery-lightbox' );//Only if want woocommerce built in
    add_theme_support( 'wc-product-gallery-slider' );//Only if want woocommerce built in
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

function ci_get_related_posts( $post_id, $related_count, $args = array() ) {
	$terms = get_the_terms( $post_id, 'product_cat' );
	
	if ( empty( $terms ) ) $terms = array();
	
	$term_list = wp_list_pluck( $terms, 'slug' );
	
	$related_args = array(
		'post_type' => 'product',
		'posts_per_page' => $related_count,
		'post_status' => 'publish',
		'post__not_in' => array( $post_id ),
		'orderby' => 'rand',
		'tax_query' => array(
			array(
				'taxonomy' => 'product_cat',
				'field' => 'slug',
				'terms' => $term_list
			)
		)
	);

	return new WP_Query( $related_args );
}

function ci_get_brand_posts( $post_id, $brands, $related_count, $args = array() ) {
	$terms = get_the_terms( $post_id, 'product_cat' );
	
	if ( empty( $terms ) ) $terms = array();
	
	$term_list = wp_list_pluck( $terms, 'slug' );
	
	$related_args = array(
		'post_type' => 'product',
		'posts_per_page' => $related_count,
		'post_status' => 'publish',
		'post__not_in' => array( $post_id ),
		'orderby' => 'rand',
		'tax_query' => array(
			array(
				'taxonomy' => 'product_cat',
				'field' => 'slug',
				'terms' => $brands
			)
		)
	);

	return new WP_Query( $related_args );
}

function ci_get_tag_links( $tag ) {
	return '/product-tag/' . slugify($tag);
}

function ci_get_categories_links( $tag ) {
	return '/danh-muc-san-pham/' . slugify($tag);
}

function slugify($text)
{ 
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    return strtolower(preg_replace('/[^A-Za-z0-9-]+/', '-', $text));
}

add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );

function new_loop_shop_per_page( $cols ) {
    $cols = 20;
    return $cols;
}

function gg_news_product_load_more_scripts() {
	global $wp_query; 
	// In most cases it is already included on the page and this line can be removed
	wp_enqueue_script('jquery');
	// register our main script but do not enqueue it yet
	wp_register_script( 'gg_news_products_loadmore', get_stylesheet_directory_uri() . '/media/ggnewsloadmore.js', array('jquery') );
	// now the most interesting part
	// we have to pass parameters to myloadmore.js script but we can get the parameters values only in PHP
	// you can define variables directly in your HTML but I decided that the most proper way is wp_localize_script()
	wp_localize_script( 'gg_news_products_loadmore', 'gg_news_loadmore_params', array(
		'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
		'posts' => json_encode( $wp_query->query_vars ), // everything about your loop is here
		'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
		'max_page' => $wp_query->max_num_pages
	) );
 	wp_enqueue_script( 'gg_news_products_loadmore' );
}
add_action( 'wp_enqueue_scripts', 'gg_news_product_load_more_scripts' );

function gg_news_products_loadmore_ajax_handler(){
	// prepare our arguments for the query
	$args = json_decode( stripslashes( $_POST['query'] ), true );
	$args['paged'] = 1; // we need next page to be loaded
    $args['post_status'] = 'publish';
    $args['post_type'] = 'product';
	// it is always better to use WP_Query but not here
	query_posts( $args );
	if( have_posts() ) :
		// run the loop
		while( have_posts() ): the_post();
			// look into your theme code how the posts are inserted, but you can use your own HTML of course
			// do you remember? - my example is adapted for Twenty Seventeen theme
			get_template_part( 'template-parts/products/content', get_post_format() );
			// for the test purposes comment the line above and uncomment the below one
            // the_title();
		endwhile;
	endif;
	die; // here we exit the script and even no wp_reset_query() required!
}
add_action('wp_ajax_loadmore', 'gg_news_products_loadmore_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore', 'gg_news_products_loadmore_ajax_handler'); // wp_ajax_nopriv_{action}

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );