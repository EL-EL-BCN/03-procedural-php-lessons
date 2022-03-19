<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP While Loop</title>
</head>

<body>
<div><h1>PHP While Loop</h1></div>
<div><h2>While Loop, Do WHile Loop, For Loop, Foreach Loop. This leson focuses on the While loop</h2></div>

<?php
	$x = 1;
	while ($x < 5) {
		echo "veriable X is less than 5<br>";
		$x++;
	}
?>
<br>
<br>
<img src="1_While_loop.jpg">
<div><h3>We set variable x to a value of 1. Using the while function we echo the phrase "variable x is less than 5" Note that we have put the br HTML tag inside the PHP code (lesson 1-13). The next line says that we increment variable x. (lesson 1-08)</h3></div>
<br>
<img src="2_dollarX_plus1.jpg">
<div><h3>Our browser output looks like this. it is echoing the phrase until variable x increases to a value that is not less than 5. It is VERY IMPORTANT not to write infinate loops because they can crash the browser.</h3></div>
<br>
<br>

</body>
</html>