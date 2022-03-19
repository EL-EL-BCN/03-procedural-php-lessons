<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP What are arrays used for</title>
</head>

<body>

<div><h1>PHP What are arrays used for</h1></div>
<div><h2>When exactly to use arrays in a website</h2>
<br>
<div><h3>01a. In the blow code snippet we have a variable called person which is equal to one name. </h3>
<div><h3>01b. We also have another variable called people which is an array of multiple people.</h3>
<div><h3>01c. We are eching out the third value of the array. Note that array values start from 0.</h3>
<br>
<img src="01_simple_array_example.jpg">
<br>
<br>
<?php
	$person = "Daniel";
	$people = array("Daniel", "Jane", "John");
	echo $people[2];
?>
<br>
<br>
<div><h3>02 An array is particularly usefull when we have a set of variables with many values, say 200 because we do not have to write a $variable for each value. A use for arrays is to spit out a lot of data from a databsase to a website. </h3>

</body>

</html>


