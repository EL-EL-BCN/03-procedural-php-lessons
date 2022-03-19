<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP Using Arrays to Store Data</title>
</head>

<body>
<div><h1>PHP Using Arrays to Store Data</h1></div>

<img src="1_Arrays.jpg">
<div><h3>The array is used to store a lot of data in a single variable</h3></div>
<div><h3>We could use seperate lines to store the data but this would get very anoying quickly and is not really scalable.</h3></div>
<div><h3>The array allows for shorter code and uses less variables. We can use lots of types of data such as strings or integers. </h3></div>
<br>
<br>
<img src="2_Array_2.jpg">
<div><h3>Here all we are doing is echoing out the second value in the array.</h3></div>
<?php
	$array = array("Daniel", "Jane", "Jacob", "John", "Joseph");

	$data1 = "Daniel";
	$data1 = "Jane";
	$data1 = "Jacob";
	$data1 = "John";
	$data1 = "Joseph";

	echo $array [2];
?>
<br>
<br>

</body>
</html>