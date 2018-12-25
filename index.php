<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php 
		session_start();
		if (!isset($_SESSION['type'])) {
			include 'home.php';
		}
		else {
			if ($_SESSION['type']=="Artist") {
				include 'artist_view.php';
			}
			elseif ($_SESSION['type']=="Customer") {
				include 'home2.php';
			}
		}
 	?>
</body>
</html>
