<?php
/**
 * KKCF Contact Form main file
 * @autor Kerim Karalic
 * @package KKCF
 */

if ( ! function_exists( 'add_filter' ) ) {
    header( 'Status: 403 Forbidden' );
    header( 'HTTP/1.1 403 Forbidden' );
    exit();
}

define( 'KKCF_VERSION', '1.0.0' );

if ( ! defined( 'KKCF_PATH' ) ) {
    define( 'KKCF_PATH', plugin_dir_path( KKCF_FILE ) );
}

if ( ! defined( 'KKCF_BASENAME' ) ) {
    define( 'KKCF_BASENAME', plugin_basename( KKCF_FILE ) );
}

if ( ! defined( 'KKCF_TEXTDOMAIN' ) ) {
    define( 'KKCF_TEXTDOMAIN', 'kkwpcf' );
}

require_once( trailingslashit( dirname( KKCF_FILE ) ) . 'lib/bootstrap.php' );