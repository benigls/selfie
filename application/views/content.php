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
	}
?>