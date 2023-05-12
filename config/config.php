<?php
	switch ($_SERVER["SCRIPT_NAME"]) {
		case "/basics/views/about.php":
			$current_page = "About"; 
			$page_title = "About Us";
			break;
		case "/basics/views/contact.php":
			$current_page = "Contact"; 
			$page_title = "Contact Us";
			break;
		default:
			$current_page = "Index";
			$page_title = "Welcome to my homepage!";
	}
?>