<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP Insert data into an array</title>
</head>

<body>

<div><h1>PHP Insert data into an array</h1></div>
<div><h2>How to add data to an existing array</h2>
<br>
<div><h3>01a we create a variable called $data and set it to an empty array.  </h3>
<div><h3>01b. With the second line we add Daniel to the array. As this is the first value to be added to the array it will have a value of 0. </h3>
<div><h3>01c. SO we can echo out this value. </h3>
<br>
<img src="01_Create_empty_array.jpg">
<br>
<br>
<?php
	$data =array();
	$data[] = "Daniel";
	echo $data [0];
?>
<br>
<br>
<div><h3>02a Instead of using the echo data we can user print_r function to output the contents of the array.</h3>
<div><h3>02b. Note that we are now adding two pieces of data to the array. </h3>
<br>
<img src="02_Print_r_array.jpg">
<br>
<br>
<?php
	$data =array();
	$data[] = "Daniel";
	$data[] = "Jane";
	print_r($data);
?>
<br>
<br>
<div><h3>03 We can use the PHP function array_push to add multiple values into the array.</h3>
<br>
<img src="03_array_push.jpg">
<br>
<br>
<?php
	$data =array();
	array_push($data, "Daniel", "Jane", "John");
	print_r($data);
?>
<br>
<br>
<div><h3>04 If we add values into the $data = array(); line of code, Notice that it takes the first and second position in the array and the array_push data comes after..</h3>
<br>
<img src="04_Data_array.jpg">
<br>
<br>
<?php
	$data =array("1st", "2nd");
	array_push($data, "Daniel", "Jane", "John");
	print_r($data);
?>
</body>

</html>


