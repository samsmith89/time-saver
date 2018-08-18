<?php
/**
 * Plugin Name: Sam's Helper Function
 * Description: This plugin is to create a workflow for tickets and retunr the values to the user
 * Version: 1.0
 * Author: Sam Smith
 * Author URI: https://gsamsmith.com
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License version 2, as published by the Free Software Foundation.  You may NOT assume
 * that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 *
 */


add_action('template_redirect','your_function');
function your_function() {
 if ( is_page('test') ) {
   echo ('here are words');
 }
}
//Add Test page on activation:
function install_events_pg(){
        $new_page_title = 'test';
        $new_page_content = 'This is your page content that automatically gets inserted into the Events page!';
        $new_page_template = ''; //ex. template-custom.php. Leave blank if you don't want a custom page template. Look into this as we could fina  wy to create template .phpfile
        //don't change the code below, unless you know what you're doing
        $page_check = get_page_by_title($new_page_title);
        $new_page = array(
                'post_type' => 'page',
                'post_title' => $new_page_title,
                'post_content' => $new_page_content, //This could live in a seprate file
                'post_status' => 'publish',
                'post_author' => 1,
        );
        if(!isset($page_check->ID)){
                $new_page_id = wp_insert_post($new_page);
                if(!empty($new_page_template)){
                        update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
                }
        }
}//end install_events_pg function to add page to wp on plugin activation

register_activation_hook(__FILE__, 'install_events_pg');
