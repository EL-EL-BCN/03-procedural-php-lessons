<?php
	include_once 'include/dbh.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP What are associative Arrays</title>
</head>

<body>


<div><h1>PHP What are associative Arrays</h1></div>
<br>
<div><h3>14. Below is an example of an indexed array which has three bits of data in it, Name, surname and age. </h3>
<div><h3>To echo it out we are siply spefifying which bit of data in the array we want to display. </h3>
<br>
<img src="14_Indexed_Array.jpg">
<br>
<?php
	//Indexed Arrays
	$data = array("Daniel", "Jhones", 25);
	echo $data[0];
?>
<br>
<br>
<div><h3>15. But what if we want to do something more advanced? We can use an associative Array. </h3>
<div><h3>So instead of using a number for each value in the array we can name them. </h3>
<br>
<img src="15_Associative_Array.jpg">
<br>
<br>
<div><h3>16. But when we echo this out we get an udefined offset 0 error.</h3>
<br>
<img src="16_Associative_Array_fail.jpg">
<br>
<br>
<div><h3>17. This is becaise we have named the bits of information in the array and they do not use the default numbering system anymore.</h3>
<div><h3>To solve this we just use a string in the echo command to specify the named bit of data in the array that we want to see.</h3>
<br>
<img src="17_Echo_of_Associative_Array.jpg">
<br>
<br>
<?php
	//Indexed Arrays
	$data = array(
		"first" => "Daniel", 
		"last" => "Jhones", 
		"Age" => 25);
	echo $data["first"];
?>
<br>
<br>
<div><h3>18. Anotherway we can create an associative array is to put the name of the value in square brakets.</h3>
<div><h3>Now if we use a print_r for $data we get an the array output on screen.</h3>
<br>
<img src="18_Associative_Array_2.jpg">
<br>
<br>
<?php
	//Indexed Arrays
	$data ["first"] = "Daniel";
	$data ["last"] = "Jhones";
	$data ["age"] = 25;
	print_r ($data);
?>
<br>
<br>
</body>

</html>