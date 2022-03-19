<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Assignment Operators in PHP</title>
</head>

<body>
<div><h1>Assignment Operators in PHP</h1></div>
<br>
<div><h2>Example 1</h2></div>
<div><h3>$x = 100; echo $x; - In this example we have a variable called x that is equal to one hundred.</h3></div>
<?php
	
	$x = 100;
	echo $x;
?>
<br>
<br>
<div><h2>Example 2</h2></div>
<div><h3>$x = 100; $x = $x + 20; echo $x; - lets say that I want to change my value of x before I output it.</h3></div>
<?php
	
	$x = 100;
	$x = $x + 20;
	echo $x;
?>
<br>
<br>
<div><h2>Example 3</h2></div>
<div><h3>$x = 100; $x += 20; + 20; echo $x; - This code can be shortened by using the $x += 20 statement</h3></div>
<?php
	
	$x = 100;
	$x += 20;
	echo $x;
?>
<br>
<br>
<div><h2>Example 4</h2></div>
<div><h3>$x = 100; $x /= 20; + 20; echo $x; - This time we take a variable equal to 100 and we modify it by dividing by 20.</h3></div>
<?php
	
	$x = 100;
	$x /= 20;
	echo $x;
?>
</body>

</html>	