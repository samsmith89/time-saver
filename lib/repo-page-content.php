<?php

//This will be the page content for Repositories and will
//hold the tables and the placeholders

function repo_page_content() {
 if ( is_page('Repositories') ) { ?>
   <table class="list">
  	  <tr>
        <th>HS Link</th>
        <th>GH Issue</th>
        <th>Repo</th>
        <th>Status</th>
  	    <th>Release</th>
  	    <th>Latest Version</th>
  	    <th>&nbsp;</th>
        <th>&nbsp;</th>
  	  </tr>
        <tr>
          <td>test</td>
          <td>test</td>
          <td>test</td>
          <td>test</td>
    	    <td>test</td>
          <td>test</td>
    	  </tr>
  	</table>
 <?php }
}
add_filter( 'the_content', 'repo_page_content' );
