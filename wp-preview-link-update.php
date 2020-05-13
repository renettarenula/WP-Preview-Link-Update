<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://aysha.me
 * @since             1.0.0
 * @package           Wp_Preview_Link_Update
 *
 * @wordpress-plugin
 * Plugin Name:       WP Preview Link Update
 * Plugin URI:        https://github.com/renettarenula/WP-Preview-Link-Update
 * Description:       Update permalinks on draft posts. This simulates updating the preview links for draft post.
 * Version:           1.0.0
 * Author:            Aysha Anggraini
 * Author URI:        https://aysha.me
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-preview-link-update
 * Domain Path:       /languages
 */


/**
 * Update permalinks for draft posts only
 */

function update_permalink_for_drafts( $url, $post, $leavename=false ) {
	if ( $post->post_status == 'draft' ) {
		$url = preg_replace('/localhost:3000\//', 'your.site.com', $url);
	}
	return $url;
}

add_filter( 'post_link', 'update_permalink_for_drafts', 10, 3 );
