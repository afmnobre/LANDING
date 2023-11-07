<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Session</title>
	</head>
	<body>
		<?php
		$_SESSION['usuario'] = "admin";
		$_SESSION['senha'] = "1234";
		?>
	</body>
</html>
