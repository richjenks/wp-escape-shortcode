<?php

/**
 * Plugin Name: Escape Shortcodes
 * Plugin URI: https://github.com/richjenks/wp-escape-shortcodes/
 * Description: Escape shortcodes and other content so it's displayed exactly as shown while editing
 * Version: 1.0
 * Author: Rich Jenks <rich@richjenks.com>
 * Author URI: https://richjenks.com
 * License: GPL2
 */

namespace RichJenks\WPEscapeShortcodes;

add_shortcode( 'sc', function( $atts, $content = null ) {
	$escaped = htmlentities( $content );
	$escaped = str_replace( '[', "&#91;", $escaped );
	$escaped = str_replace( ']', "&#93;", $escaped );
	return $escaped;
} );
