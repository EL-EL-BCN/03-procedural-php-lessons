<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP SuperGlobals</title>
</head>

<body>
	<div><h1>PHP SuperGlobals</h1></div>
	<div><h2>Superglobal is a variable that has already been created for us within PHP. Examples include;</h2></div>
	<h3>$GLOBALS</h3>
	<h3>$_POST</h3>
	<h3>$_GET</h3>
	<h3>$_COOKIE</h3>
	<h3>$_SESSION</h3>
	<br>
	<div><h2>This lesson looks at $GLOBALS</h2></div>
	<img src="1_$GLOBALS.jpg">
	<br>
	<?php

		$x = 5;

		function something() {
			$y = 10;
			echo $GLOBALS['x'];

		}

		something();

		?>
	<br>
	<div><h3>we have variable $x which is outside of the function (Global scope).</h3></div>
	<div><h3>We have a user defined function called something and within that function we are using the $GLOBALS to retrieve a variable outside of the function to echo.</h3></div>
	<div><h3>Lastly, We are calling the function outside of the {} brackets.</h3></div>
	<div><h3>function something() { - Note that we have not called it inside the parenthesis of the function named something and yet we are still getting an answer.</h3></div>
	<div><h3>This SuperGlobal is for special case use and should not be used when the variable can be placed inside the parenthesis of the function. i.e. function something(x) {</h3></div>
	<br>
	<br>
		
	
</body>

</html>