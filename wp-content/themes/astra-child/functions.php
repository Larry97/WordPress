<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );


// Add quantity

add_action('woocommerce_before_add_to_cart_form', 'add_text');

function add_text() {
    
    $text = "Add quantity";
    echo $text;
    
}

// Change add to cart text on single product page

add_filter( 'woocommerce_product_single_add_to_cart_text', 'single_add_to_cart_text' ); 

function single_add_to_cart_text() {
    
    return __( 'Buy Now', 'woocommerce' ); 
    
}

// Change add to cart text on product archives(Collection) page

add_filter( 'woocommerce_product_add_to_cart_text', 'archive_add_to_cart_text' );

function archive_add_to_cart_text() {
    
    return __( 'Buy Now', 'woocommerce' );

}


// Added field to the checkout

add_action( 'woocommerce_after_order_notes', 'my_custom_checkout_field' );

function my_custom_checkout_field( $checkout ) {

    echo '<div id="my_custom_checkout_field"><h2>' . __('My Field') . '</h2>';

    woocommerce_form_field( 'my_field_name', array(
        'type'          => 'text',
        'class'         => array('my-field-class form-row-wide'),
        'label'         => __('Fill in this field'),
        'placeholder'   => __('Enter something'),
        ), $checkout->get_value( 'my_field_name' ));

    echo '</div>';

}

/**
 * Process the checkout
 */
add_action('woocommerce_checkout_process', 'my_custom_checkout_field_process');

function my_custom_checkout_field_process() {
    // Check if set, if its not set add an error.
    if ( ! $_POST['my_field_name'] )
        wc_add_notice( __( 'Please enter something into this new shiny field.' ), 'error' );
}

/**
 * Update the order meta with field value
 */
add_action( 'woocommerce_checkout_update_order_meta', 'my_custom_checkout_field_update_order_meta' );

function my_custom_checkout_field_update_order_meta( $order_id ) {
    if ( ! empty( $_POST['my_field_name'] ) ) {
        update_post_meta( $order_id, 'My Field', sanitize_text_field( $_POST['my_field_name'] ) );
    }
}

/**
 * Display field value on the order edit page
 */
add_action( 'woocommerce_admin_order_data_after_billing_address', 'my_custom_checkout_field_display_admin_order_meta', 10, 1 );

function my_custom_checkout_field_display_admin_order_meta($order){
    echo '<p><strong>'.__('My Field').':</strong> ' . get_post_meta( $order->id, 'My Field', true ) . '</p>';
}

// Change cart text

/** Htela sam da dodam i ovo, ali jednostavno nece da se prikazuje cart strana 
 *  kad sacuvam
 */
 
// add_filter('gettext', 'change_cart_text', 10, 3);

// function change_cart_text($new_text, $related_text, $source) {
    
//     if($related_text === 'Product' && is_cart()) {
//         $new_text = esc_html_('Added Products', $source);
//     }
//     return $new_text;
    
// }

