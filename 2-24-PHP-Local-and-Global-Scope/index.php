<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP Local Scope and Global Scope</title>
</head>

<body>
	<div><h1>PHP Local Scope and Global Scope</h1></div>
	<div><h2>Local scope is inside the function and GLobal scope is outside the Function</h2></div>

	<img src="1_Global_Scope.png">
	<br>
	<br>
		
		<?php

		$x = 5;

		function something() {
			$y = 10;
		
		}

		echo $x;

		?>

		<br>
		<div><h3>Variable x is global scope because it is outside of the function {} brackets and echo´s out on the screen fine.</h3>
		<br>
		<br>
		<img src="2_Local_Scope.png">
		<?php

		$x = 5;

		function something2() {
			$y = 10;
		
		}

		echo $y;

		?>
		<br>
		<div><h3>Variable y is local scope because it is inside of the function {} brackets and does not echo´s out on the screen, but gives an error message.</h3>
		<br>
		<br>
		<div><h2>The importance of this lesson is that if you want to use a variable with a function then you need to ensure that it has GLOBAL scope and not LOCAL SCOPE.</h2>
		<br>

</body>

</html>