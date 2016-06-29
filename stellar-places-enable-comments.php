<?php

/*
 * Plugin Name: Stellar Places - Enable Comments
 * Plugin URI:
 * Description: Enable comments on individual locations for the Stellar Places plugin.
 * Version: 0.1.0
 * Author: Micah Wood
 * Author URI:  http://wpscholar.com
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: stellar-places-enable-comments
 */

add_action( 'init', function () {
	add_post_type_support( 'stlr_place', 'comments' );
} );