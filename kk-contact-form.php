<?php
/**
 * @package KKCF
 */

/**
 * Plugin Name: KK Contact Form
 * Version: 1.0.0
 * Description: Simple contact form plugin
 * Author: Kerim Karalic <karalickerim95@gmail.com>
 * Author URI: https://github.com/kera95
 * Text Domain: kkwpcf
 * License: GPL v3
 */

/**
 * KKCF Contact Form Plugin
 * Copyright (C) 2017, Kerim Karalic - karalickerim95@gmail.com
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

if ( ! function_exists( 'add_filter' ) ) {
    header( 'Status: 403 Forbidden' );
    header( 'HTTP/1.1 403 Forbidden' );
    exit();
}

if ( ! defined( 'KKCF_FILE' ) ) {
    define( 'KKCF_FILE', __FILE__ );
}

// Load the KKCF Contact Form Plugin
require_once( dirname( KKCF_FILE ) . '/kkcf-main.php' );