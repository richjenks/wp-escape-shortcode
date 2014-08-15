<?php

/**
 * Plugin Name: Escape Shortcode
 * Plugin URI: https://richjenks.com/dev/wp/escape-shortcode/
 * Description: Escape shortcodes and other content so it's displayed exactly as shown while editing
 * Version: 1.0
 * Author: Rich Jenks <rich@richjenks.com>
 * Author URI: https://richjenks.com
 * License: GPL2
 */

namespace RichJenks\WPEscapeShortcode;

add_shortcode( 'esc', function( $atts, $content = null ) { return htmlentities($content); } );
