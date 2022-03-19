<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP variables</title>
</head>

<body>

<form method="GET">
	<input type="text" name="person">
	<button>SUBMIT</button>
</form>

<?php
	$name = $_GET['person'];
	echo $name." says that PHP is very boring but a necesary evil!";
?>

</body>

</html>	