<?php 
	session_start();
	if ($_SESSION["type"]!="Customer") {
		header("Location: customer/custloginpage.html");
	}
?>	