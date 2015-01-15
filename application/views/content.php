<?php 
	switch($content) {
		case "home":

			break;
		case "login":
			include_once("include/login_page.php");
			break;
		case "register";
			include_once("include/register_page.php");
			break;
		case "admin";
			include_once("include/admin_page.php");
			break;
		case "sudoadmin";
			include_once("include/sudoadmin_page.php");
			break;
	}	
?>