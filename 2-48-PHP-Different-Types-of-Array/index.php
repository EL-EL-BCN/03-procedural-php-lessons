<?php
	include_once 'include/dbh.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP Different Types of Array</title>
</head>

<body>

<div><h1>PHP Different Types of Array</h1></div>
<div><h3>THis lesson will look at three differnt types of arrays - Indexed Arrays, Associative Arrays & Miltidimensional Arrays</h3>
<br>
<div><h3>11. Indexed Arrays </h3>
<div><h3>11a. We have variable $data which is equal to an array with three values inside. </h3>
<div><h3>11b. To echo out the data from the array we select the variable with it´s number, starting from zero so in this example we see output of Daniel. </h3>
<br>
<img src="11_Indexed_Array.jpg">
<br>
<?php
	//Indexed Arrays
	$data = array("Daniel", "John", "Jane");
	echo $data[0];
?>
<br>
<br>
<div><h3>12. Associative Array </h3>
<div><h3>12a. We have variable $data which is equal to an array with three values inside. </h3>
<div><h3>12b. This time however we are naming the values, in this example, first, last and age. </h3>
<br>
<img src="12_Associative_Array.jpg">
<br>
<?php
	//Associative Arrays
	$Data = array("1st" => "Daniel", "last" => "Jhones", "age" => 30);
?>
<br>
<br>
<div><h3>13. Miltidimensional Arrays </h3>
<div><h3>13a. A multidimensional array is when we have an array inside an array.</h3>
<br>
<img src="13_Multidimensional_Array.jpg">
<br>
<?php
	//Miltidimensional Arrays
	$data = (aray(array("Daniel, Jhones"), "John", "Jane"));
?>
<br>
<br>
</body>

</html>