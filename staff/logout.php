<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    ini_set('session.name','STAFFSESSID');
    ini_set('session.cookie_httponly', true);
	ini_set('session.cookie_domain', '.r2.ae');
    session_start();
}

if(isset($_SESSION['staffId:wse6'])){

	session_unset();
	session_destroy();
	header("Refresh:0; url=login");
	die;
	
}else{
	header("Refresh:0; url=login");
}
	
?>