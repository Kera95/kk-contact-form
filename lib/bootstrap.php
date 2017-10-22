<?php
/**
 * Plugin bootstraping file
 * This file loads the plugin and its structure
 * @author Kerim Karalic
 * @package KKCF
 */

require_once( trailingslashit( dirname( KKCF_FILE ) ) . 'vendor/autoload.php' );

use KKCForm\KKCFContactForm;

register_activation_hook( KKCF_FILE, 'kkcf_on_activation' );

function kkcf_on_activation() {
    if ( version_compare( get_bloginfo( 'version' ), '3.9', '<' ) ) {
        wp_die("You must update WordPress to use this plugin!");
    }
}

KKCFContactForm::bootstrap();

