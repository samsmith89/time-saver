<?php
// Creation of tables on activation

//Create table for Issues
global $rem_gh_db_version;
$rem_gh_db_version = '1.0';

function rem_init_gh_table() {
	global $wpdb;
	global $rem_gh_db_version;

	$table_name = $wpdb->prefix . 'gh_issues';

	$charset_collate = $wpdb->get_charset_collate();

	$sql = "CREATE TABLE $table_name (
		id INT(11) NOT NULL AUTO_INCREMENT,
		ticket_id INT(11) NOT NULL,
		wp_user INT(11) NOT NULL,
		ticket_count INT(11) NOT NULL,
	  issue_link VARCHAR(255),
		issue_repo VARCHAR(255),
	  status TINYINT(1),
		notes VARCHAR(255),
	  PRIMARY KEY (id)
	) $charset_collate;";

	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	dbDelta( $sql );

	add_option( 'rem_gh_db_version', $rem_gh_db_version );
}


register_activation_hook( __FILE__, 'rem_init_gh_table' );

//Create the table for the tickets

global $rem_hs_db_version;
$rem_hs_db_version = '1.0';

function rem_init_hs_table() {
	global $wpdb;
	global $rem_hs_db_version;

	$table_name = $wpdb->prefix . 'hs_tickets';

	$charset_collate = $wpdb->get_charset_collate();

	$sql = "CREATE TABLE $table_name (
		id INT(11) NOT NULL AUTO_INCREMENT,
		issue_id INT(11) NOT NULL,
	  ticket_link VARCHAR(255),
	  wp_user INT(11) NOT NULL,
		notes VARCHAR(255),
	  PRIMARY KEY (id)
	) $charset_collate;";

	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	dbDelta( $sql );

	add_option( 'rem_hs_db_version', $rem_hs_db_version );
}


register_activation_hook( __FILE__, 'rem_init_hs_table' );
