<?php
// this is where the page will be created for the dashoboard, and where the empty HTML will set for the tables

//Add Dashboard page on activation:
function install_dash_pg(){
        $new_page_title = 'Dashboard';
        $new_page_content = '';
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
