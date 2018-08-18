<?php

//This page houses the form for inputing issues into the database manually
function issue_create_html() {
 if ( is_page('Manual Input') ) {
   echo ('This is where the form will live');
 }
}
add_filter( 'the_content', 'issue_create_html' );
