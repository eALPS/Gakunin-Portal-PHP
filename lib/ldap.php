<?php
require_once('ldapconf.php');

// VDP Connect
$ds = ldap_connect($cfg['vdp_server'], $cfg['vdp_port']) or die('Connection Error!');
// VDP Set Option
ldap_set_option($ds, LDAP_OPT_PROTOCOL_VERSION, 3);

// VDP Bind
$rs=ldap_bind($ds, $cfg['vdp_bind_dn'], $cfg['vdp_bind_pw']);


/* var_dump($ds); */
/*
if(!$error_flag){
	header('Content-Type: application/octet-stream');
	header('Content-Disposition: attachment; filename='.basename($filename.'.csv'));
	echo $output;
	exit();
}
*/

// People検索
function searchPeople($filter) {
	global $ds;
	global $cfg;

	$base = $cfg['vdp_people_base_dn'];

	$sr=ldap_search($ds, $base, $filter);
	$info = ldap_get_entries($ds, $sr);

	// print $filter . "<br>" ;

	// print "<pre>" ; var_dump($info) ; print "</pre>" ;
	$tmpuid = $info[0]['uid'][0];
	// 見つかった
	if ($tmpuid != '') {
		return $info ;
	} else {
		return 0 ;
	} ;
}

// Registrations検索
function searchRegistrations($filter) {

	global $ds;
	global $cfg;

	$base = $cfg['vdp_registrations_base_dn'];

	$sr=ldap_search($ds, $base, $filter);
	$info = ldap_get_entries($ds, $sr);
	
	return $info;
}

// Courses検索
function searchCourses($filter) {

	global $ds;
	global $cfg;

	$base = $cfg['vdp_courses_base_dn'];

	$sr=ldap_search($ds, $base, $filter);
	$info = ldap_get_entries($ds, $sr);
	
	return $info;
}


?>