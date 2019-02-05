<?php 

/*
Plugin Name: Ace HTML Block
Description: HTML Block with ACE Editor
Version:     1
Author:      Will Delphia
Author URI:  https://developer.wordpress.org/
Text Domain: wporg
Domain Path: /languages
License:     GPL2
*/


function aceblock_block() {
    wp_register_script(
        'aceblock-js',
        plugins_url( 'aceblock.build.js', __FILE__ ),
        array( 'wp-blocks', 'wp-element', 'wp-editor' ),
        filemtime( plugin_dir_path( __FILE__ ) . 'aceblock.build.js' )
    );

    register_block_type( 'aceblock/aceblock', array(
        'editor_script' => 'aceblock-js',
        )
    );
}
add_action( 'init', 'aceblock_block' );