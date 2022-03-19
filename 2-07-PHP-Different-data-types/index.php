<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Different Data types in PHP</title>
</head>

<body>
<div><h1>Different Data types in PHP</h1></div>
<br>
<div><h2>1 - String.</h2></div>
<div><h3>$name = "coding is boring"; - The string is the phrase inside the double quotes. </h3></div>
<div><h3>$name = 'coding is boring'; - The string can also be written inside single quotes. </h3></div>
<br>
<?php
	
	$name =  "coding is boring";
	echo $name
?>
<br>
<br>
<div><h2>2 - Integer.</h2></div>
<div><h3>$name =  20; - The integer is 20. </h3></div>
<br>
<?php
	
	$name =  20;
	echo $name
	
?>
<br>
<br>
<div><h2>3 - Float.</h2></div>
<div><h3>$name =  20.5784; - The float is a decimal number. </h3></div>
<br>
<?php
	
	$name =  20.5784;
	echo $name
	
?>
<br>
<br>
<div><h2>4 - Boolean.</h2></div>
<div><h3>$name =  true; - The Boolean is a true or false statement. i.e 1 or 0</h3></div>
<br>
<?php
	
	$name =  true;
	echo $name
	
?>
<br>
<br>
<div><h2>5 - Array.</h2></div>
<div><h3>$name = array("Jack", "John","Jarvis"); - The Array is a field with multiple values. For example Jack, John or Jarvis</h3></div>
<div><h3>echo $name ['0'] - This will output the first value of the array which in this case is Jack</h3></div>
<br>
<?php
	
	$name = array("Jack", "John","Jarvis");
	echo $name ['0']
	
?>
</body>

</html>	