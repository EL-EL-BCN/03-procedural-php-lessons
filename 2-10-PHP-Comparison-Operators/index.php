<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Comparison Operators in PHP</title>
</head>

<body>
<div><h1>Comparison Operators in PHP page 1</h1></div>
<div><h2>Example 1</h2></div>
<div><h3>$x = 5;</h3></div>
<div><h3>$y = 10;</h3></div>
<div><h3>if ($x == $y) {</h3></div>
<div><h3>    echo "True!";</h3></div>
<div><h3>else {</h3></div>
<div><h3>    echo "False!";</h3></div>
<div><h3>This example uses an if/else statement.</h3></div>
<div><h3>Note that when we say $x = 5; - we are definatively saying that x is equal to 5</h3></div>
<div><h3>Note that when we say ($x == $y) - using a double equal then we are checking if X is the same as Y.</h3></div>
<?php
	$x = 5;
	$y = 10;
	if ($x == $y) {
		echo "True!";
	}
	else {
		echo "False!";
	}
?>
<br>
<br>
<div><h2>Example 2</h2></div>
<div><h3>$x = 5;</h3></div>
<div><h3>$y = 10;</h3></div>
<div><h3>if ($x != $y) {</h3></div>
<div><h3>    echo "True!";</h3></div>
<div><h3>else {</h3></div>
<div><h3>    echo "False!";</h3></div>
<div><h3>This example uses an if/else statement.</h3></div>
<div><h3>Now we are using the comparison !=.</h3></div>
<div><h3>if ($x != $y) { - This means if X is NOT equal to Y output true!</h3></div>
<?php
	$x = 5;
	$y = 10;
	if ($x != $y) {
		echo "True!";
	}
	else {
		echo "False!";
	}
?>
<br>
<br>
<div><h2>Example 3</h2></div>
<div><h3>$x = 5;</h3></div>
<div><h3>$y = 10;</h3></div>
<div><h3>if ($x === $y) {</h3></div>
<div><h3>    echo "True!";</h3></div>
<div><h3>else {</h3></div>
<div><h3>    echo "False!";</h3></div>
<div><h3>This example uses an if/else statement.</h3></div>
<div><h3>Now we are using the comparison ===</h3></div>
<div><h3>if ($x === $y) { - This means if X is equal to Y AND the same data type, output true!</h3></div>
<?php
	$x = 5;
	$y = 10;
	if ($x === $y) {
		echo "True!";
	}
	else {
		echo "False!";
	}
?>
<div><h3>The output is false because the numbers are the same data type but NOT equal.</h3></div>
<div><h3>if we change x to 10 then the output would be true as X = Y and they are the same data type (integer)</h3></div>
<br>
<br>
<div><h2>Example 4</h2></div>
<div><h3>$x = 10;</h3></div>
<div><h3>$y = "10";</h3></div>
<div><h3>if ($x === $y) {</h3></div>
<div><h3>    echo "True!";</h3></div>
<div><h3>else {</h3></div>
<div><h3>    echo "False!";</h3></div>
<div><h3>This example uses an if/else statement.</h3></div>
<div><h3>Now we are using the comparison ===</h3></div>
<div><h3>if ($x === $y) { - This means if X is equal to Y AND the same data type, output true!</h3></div>
<?php
	$x = 10;
	$y = "10";
	if ($x === $y) {
		echo "True!";
	}
	else {
		echo "False!";
	}
?>
<div><h3>The output is false because the numbers are the same but data type is NOT equal. X is an integer and Y is a string because the 10 is inside double quotes.</h3></div>
<br>
<br>
<div><h2>Example 5</h2></div>
<div><h3>$x = 10;</h3></div>
<div><h3>$y = "10";</h3></div>
<div><h3>if ($x == $y) {</h3></div>
<div><h3>    echo "True!";</h3></div>
<div><h3>else {</h3></div>
<div><h3>    echo "False!";</h3></div>
<div><h3>This example uses an if/else statement.</h3></div>
<div><h3>Now we are using the comparison ==</h3></div>
<div><h3>if ($x == $y) { - This means if X is equal to Y  output true! (regardless of data type)</h3></div>
<?php
	$x = 10;
	$y = "10";
	if ($x == $y) {
		echo "True!";
	}
	else {
		echo "False!";
	}
?>
<br>
<br>
<div><h2>Example 6</h2></div>
<div><h3>$x = 5;</h3></div>
<div><h3>$y = 10;</h3></div>
<div><h3>if ($x < $y) {</h3></div>
<div><h3>    echo "True!";</h3></div>
<div><h3>else {</h3></div>
<div><h3>    echo "False!";</h3></div>
<div><h3>This example uses an if/else statement.</h3></div>
<div><h3>Now we are using the comparison <. </h3></div>
<div><h3>if ($x < $y) { - This means if X is less than Y  output true!</h3></div>
<?php
	$x = 5;
	$y = 10;
	if ($x < $y) {
		echo "True!";
	}
	else {
		echo "False!";
	}
?>
<br>
<br>
<div><h2>Example 7</h2></div>
<div><h3>$x = 5;</h3></div>
<div><h3>$y = 10;</h3></div>
<div><h3>if ($x > $y) {</h3></div>
<div><h3>    echo "True!";</h3></div>
<div><h3>else {</h3></div>
<div><h3>    echo "False!";</h3></div>
<div><h3>This example uses an if/else statement.</h3></div>
<div><h3>Now we are using the comparison >. </h3></div>
<div><h3>if ($x > $y) { - This means if X is greater than Y  output true!</h3></div>
<?php
	$x = 5;
	$y = 10;
	if ($x > $y) {
		echo "True!";
	}
	else {
		echo "False!";
	}
?>
<br>
<br>
<br>
<div><h2>Example 8</h2></div>
<div><h3>$x = 10;</h3></div>
<div><h3>$y = 10;</h3></div>
<div><h3>if ($x >= $y) {</h3></div>
<div><h3>    echo "True!";</h3></div>
<div><h3>else {</h3></div>
<div><h3>    echo "False!";</h3></div>
<div><h3>This example uses an if/else statement.</h3></div>
<div><h3>Now we are using the comparison >. </h3></div>
<div><h3>if ($x >= $y) { - This means if X is greater than or equal to Y output true!</h3></div>
<?php
	$x = 10;
	$y = 10;
	if ($x >= $y) {
		echo "True!";
	}
	else {
		echo "False!";
	}
?>
<br>
<br>
<div><h2>Example 9</h2></div>
<div><h3>$x = 10;</h3></div>
<div><h3>$y = "10";</h3></div>
<div><h3>if ($x !== $y) {</h3></div>
<div><h3>    echo "True!";</h3></div>
<div><h3>else {</h3></div>
<div><h3>    echo "False!";</h3></div>
<div><h3>This example uses an if/else statement.</h3></div>
<div><h3>Now we are using the comparison !== </h3></div>
<div><h3>if ($x !== $y) { - This means if X is not the same number AND data type as Y output true!</h3></div>
<?php
	$x = 10;
	$y = "10";
	if ($x !== $y) {
		echo "True!";
	}
	else {
		echo "False!";
	}
?>
<br>
<br>
<div><h2>Example 10</h2></div>
<div><h3>$x = 10;</h3></div>
<div><h3>$y = 10;</h3></div>
<div><h3>if ($x < > $y) {</h3></div>
<div><h3>    echo "True!";</h3></div>
<div><h3>else {</h3></div>
<div><h3>    echo "False!";</h3></div>
<div><h3>This example uses an if/else statement.</h3></div>
<div><h3>Now we are using the comparison < > </h3></div>
<div><h3>if ($x < > $y) { - if the variables are NOT equal to each other, output true</h3></div>
<?php
	$x = 10;
	$y = 10;
	if ($x <> $y) {
		echo "True!";
	}
	else {
		echo "False!";
	}
?>
<br>
<br>
</body>
</html>