<?php
/**
 * Plugin Name: Optimizer MU Plugin
 * Description: This MU plugin disables some styles and scripts on specific pages
 * Author: Alexander Berkut
 * Version: 1.0
 * License: GNU General Public License v3 or later
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

// Basic security, prevents file from being loaded directly.
defined( 'ABSPATH' ) or die();

add_action(
    'wp_enqueue_scripts',
    function() {
        if ( ! is_woocommerce() && ! is_cart() && ! is_checkout() ) {
            wp_dequeue_style( 'woocommerce_frontend_styles' );
            wp_dequeue_style( 'woocommerce-general');
            wp_dequeue_style( 'woocommerce-layout' );
            wp_dequeue_style( 'woocommerce-smallscreen' );
            wp_dequeue_style( 'woocommerce_fancybox_styles' );
            wp_dequeue_style( 'woocommerce_chosen_styles' );
            wp_dequeue_style( 'woocommerce_prettyPhoto_css' );
            wp_dequeue_style( 'select2' );
            wp_dequeue_style( 'wc-blocks-vendors-style' );
            wp_dequeue_style( 'wc-blocks-style' );

            wp_dequeue_script( 'wc-add-payment-method' );
            wp_dequeue_script( 'wc-lost-password' );
            wp_dequeue_script( 'wc_price_slider' );
            wp_dequeue_script( 'wc-single-product' );
            wp_dequeue_script( 'wc-add-to-cart' );
            wp_dequeue_script( 'wc-cart-fragments' );
            wp_dequeue_script( 'wc-credit-card-form' );
            wp_dequeue_script( 'wc-checkout' );
            wp_dequeue_script( 'wc-add-to-cart-variation' );
            wp_dequeue_script( 'wc-single-product' );
            wp_dequeue_script( 'wc-cart' ); 
            wp_dequeue_script( 'wc-chosen' );
            wp_dequeue_script( 'woocommerce' );
            wp_dequeue_script( 'prettyPhoto' );
            wp_dequeue_script( 'prettyPhoto-init' );
            wp_dequeue_script( 'jquery-blockui' );
            wp_dequeue_script( 'jquery-placeholder' );
            wp_dequeue_script( 'jquery-payment' );
            wp_dequeue_script( 'jqueryui' );
            wp_dequeue_script( 'fancybox' );
            wp_dequeue_script( 'wcqi-js' );
            wp_dequeue_script( 'jp-tracks' );
            wp_dequeue_script( 'jp-tracks-functions' );
            wp_dequeue_script( 'mailchimp-woocommerce' );
            wp_dequeue_script( 'woocommerce-analytics' );
        }
        if ( ! is_page( array( 'vw-vanagon', 'contact', 'sprinter-170' ) ) ) {
            wp_dequeue_style( 'contact-form-7' );
            wp_dequeue_script( 'contact-form-7' );
        }
    },
    99
);
