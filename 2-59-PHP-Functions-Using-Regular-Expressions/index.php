<!DOCTYPE html>
<html>
	<head>
		<meta charset=utf-8>
		<title>2-59 PHP Functions Using Regular Expressions</title>
	</head>
	<body>
	<h1>2-59 PHP Functions Using Regular Expressions</h1>

	<?php

	echo"<b>Example 1</b><br><br>";
	// here is a string
	$string_ex_a = "my name is Elliott, Elliott is my name";
	// Whatever we put inside double quotes and double forward slashes is a regular string.
	if (preg_match("/Elliott/", $string_ex_a)) {
		echo "it is a match";
		}

	echo"<br><br><b>Example 2</b><br><br>";
	// preg_match means Perform REGular expression to match what is inside the double quotes and forward slashes.
	$string_ex_b = "my name is Elliott, Elliott is my name";
	// Now we tell the Perform REGular expression to put whateveer we get into an array called $array.
	if (preg_match("/Elliott/", $string_ex_b, $array1)) {
		print_r($array1);
		}
	// The result of this is Array ([0] => Elliott). SO when we use a Perform REGular expresion to match it will only output the first occurence that it matches with.
	
	echo"<br><br><b>Example 3</b><br><br>";
	$string_ex_c = "my name is Elliott, Elliott is my name";
	// Perform REGular expression match all will pick up all occurances in the variable.
	if (preg_match_all("/Elliott/", $string_ex_c, $array2)) {
		print_r($array2);
		}
	// The result of this is Array ([0] => Array ([0] => Elliott [1] => Elliott)). So when we use a Perform REGular expresion to match all it will output all occurances as an array within an array (multi-dimensional array).

	echo"<br><br><b>Example 4</b><br><br>";
	$string_ex_d = "my name is Elliott, Elliott is my name";
	// Perform REGular expression match all will pick up all occurances in the variable. We can also add a second search within the first search using brackets within brackets. In the below example we are performing two searches in one expression, one for Elliott and one for io.
	if (preg_match_all("/Ell(io)tt/", $string_ex_d, $array3)) {
		print_r($array3);
		}
	// The result of this is Array ([0] => Array ([0] => Elliott [1] => Elliott) [1] => Array ([0] => io [1] => io )). We that we have an array within an array within an array. 

	echo"<br><br><b>Example 5</b><br><br>";
	$string_ex_e = "my name is Elliott, Elliott is my name";
	// Perform REGular expression match all will pick up all occurances in the variable. We can also add a second search within the first search using brackets within brackets. In the below example we are performing two searches in one expression, one for Elliott and one for io.
	$string4 = preg_replace("/Elliott/", "John", $string_ex_e);
		echo "$string4"
	// This Perform REGular expression is replacing Elliott with John.


	?>

	</body>
</html>
