<?php
/**
 * Plugin Name: WP PrismJS
 * Plugin URI: https://github.com/srikat/WP-PrismJS
 * Description: Loads PrimsJS with support for HTML, CSS, PHP, JS, Markdown, Line Highlight and Copy to Clipboard Button (uses clipboard.js).
 * Version: 1.0.0
 * Author: Sridhar Katakam
 * Author URI: https://sridharkatakam.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * GitHub Plugin URI: srikat/WP-PrismJS
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License version 2, as published by the Free Software Foundation.  You may NOT assume
 * that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}

add_action( 'wp_enqueue_scripts', 'sk_wpprismjs_enqueue_scripts' );
/**
 * Load Clipboard.js and Prism on single posts.
 */
function sk_wpprismjs_enqueue_scripts() {
	// if this is not a single post, abort.
	if ( ! is_singular( 'post' ) ) {
		return;
	}

	wp_enqueue_style( 'prism-css', plugin_dir_url( __FILE__ ) . 'assets/css/prism.css' );

	wp_enqueue_script( 'clipboard', plugin_dir_url( __FILE__ ) . 'assets/js/clipboard.min.js', '', '1.6.1', true );

	wp_enqueue_script( 'prism', plugin_dir_url( __FILE__ ) . 'assets/js/prism.js', '', '1.0.0', true );
}
