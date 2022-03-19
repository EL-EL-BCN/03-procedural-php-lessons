<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP SESSION SuperGlobals - CONTACTS</title>
<link rel="Stylesheet" type="text/css" href="style.css">
</head>

<body>

	<ul>
		<li><a href="index.php">HOME</a></li>
		<li><a href="contact.php">CONTACT</a></li>
	</ul>

	<div><h1>PHP SESSION SuperGlobal - CONTACT</h1></div>
	

	<?php

	echo $_SESSION['username']

	?>

</body>

</html>