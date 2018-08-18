<?php

//This will be the page content for Repositories and will
//hold the tables and the placeholders

function repo_page_content() {
 if ( is_page('Repositories') ) {
   echo ('here are words');
 }
}
add_filter( 'the_content', 'repo_page_content' );
