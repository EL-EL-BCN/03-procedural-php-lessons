<?php
	include_once 'include/dbh.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP What are Multidimensional Arrays</title>
</head>

<body>


<div><h1>PHP What are Multidimensional Arrays</h1></div>
<br>
<div><h3>19. An example of a multidimensional array is when we pull data out of a database. Because the data from the database is already inside an array we then need to put it within another array do display it.</h3>
<br>
<img src="19_multidimensional_array.jpg">
<br>
<?php
	//Multidimensional Array
	$data = array(
		array(1,2,3), 
		"John", 
		"Jane"
		);
	print_r ($data);
?>
<br>
<br>
<div><h3>20. We can see from the output of the array that we have array 0 then within it we have a sub array with values numbered 1, 2 and 3. After we have another array inside this one with John and Jane.</h3>
<br>
<br>
<div><h3>21. What if I want to output something specific from a multidimensional array?</h3>
<br>
<img src="21_echo.jpg">
<br>
<br>
<?php
	//Multidimensional Array
	$data = array(
		array(1,2,3), 
		"John", 
		"Jane"
		);
	echo $data[0][1];
?>
<div><h3>21. The first square bracket selects array 0. The second square bracket selects the information within the array so in this case the output would be 2.</h3>
<br>
<br>


</body>

</html>