<?php

//This page houses the form for inputing issues into the database manually
function issue_create_html() {
 if ( is_page('Manual Input') ) { ?>
 <form>
   <dl>
     <dt>Status</dt>
     <dd>
       <select name="position">
         <option value="Open">Open</option>
         <option value="Closed">Closed</option>
       </select>
     </dd>
   </dl>
   <dl>
     <dt>Issue Content</dt>
     <dd>
       <textarea name="content" cols="60" rows="10"></textarea>
     </dd>
   </dl>
   <div>
     <input type="submit" value="Submit Issue" />
   </div>
 </form>
 <?php
 }
}
add_filter( 'the_content', 'issue_create_html' );
