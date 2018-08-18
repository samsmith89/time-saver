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


require dirname(__FILE__) . '/page-init/create-init.php';


// add_action('template_redirect','your_function');
function filter_function_name() {
 if ( is_page('Repositories') ) {
   echo ('here are words');
 }
}
add_filter( 'the_content', 'filter_function_name' );

register_activation_hook(__FILE__, 'install_pages');
