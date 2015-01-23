<?php
/*
Plugin Name: Easy English Editing
Plugin URI: http://www.editnpublish.com
Description: This is a plugin which can help all non-native writers write clear and grammatically correct English. Get easy quote for editing your post by installing the plugin. 
Version: 1.0
Author: EditnPublish
Author URI: http://www.editnpublish.com/
*/
/*  Copyright 2014  editnpublish.com (link : http://www.editnpublish.com/contact)
    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.   
*/
/* Add plugin box to the meta section of posts */
function editnpublish_add_meta_box() {
	$screens = array( 'post', 'side', 'high' );
		add_meta_box(
			'editnpublish_sectionid',
			__( 'Easy English Editing', 'editnpublish_textdomain' ),
			'editnpublish_meta_box_callback',
			'post', 'side', 'high'
		);	
}
add_action( 'add_meta_boxes', 'editnpublish_add_meta_box' );
/**
 * Prints the box content.
 */
function editnpublish_meta_box_callback( $post ) {
require_once('lib/views.php');	
}
/*
 * Load Custom Css For Plugin
 */  
 function editnpublish_add_stylesheet() 
{
    wp_enqueue_style( 'editnpublish', plugins_url( '/css/editnpublish.css', __FILE__ ) );
   }
add_action('admin_print_styles', 'editnpublish_add_stylesheet');