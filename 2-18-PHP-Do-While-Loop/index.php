<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP Do While Loop</title>
</head>

<body>
<div><h1>PHP Do While Loop</h1></div>
<div><h2>While Loop, Do While Loop, For Loop, Foreach Loop. This leson focuses on the Do While loop</h2></div>

<?php
	$x = 10;
	do {
		echo "veriable X is less than 5<br>";
		$x++;

	}
	while ($x <= 5);
	
?>
<br>
<br>
<img src="1_DoWhile_PHP.jpg">
<div><h3>WHat we are saying here is echo out the phrase "veriable X is less than 5" once while the condition of $x <=5. As 10 is always greater than 5 then the browser will always output the same text phrase.</h3></div>
<br>
<br>

<?php
	$x = 1;
	do {
		echo "veriable X is less than 5<br>";
		$x++;

	}
	while ($x <= 5);

?>
<br>
<br>
<img src="2_DoWhile_PHP_2.jpg">
<div><h3>Now if we set the variable to 1 then we get an output  of five text phrases while it is counting down.</h3></div>
<br>
<br>
<div><h2>What is the differnece between a While Loop and a Do While loop? In the DO WHILE loop we are checking the do statment and echoing out the phrase before performing the decrement calculation.</h2></div>
<br>
<br>


</body>
</html>