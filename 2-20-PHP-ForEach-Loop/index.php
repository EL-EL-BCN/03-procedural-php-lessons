<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP ForEach Loop</title>
</head>

<body>
<div><h1>PHP ForEach Loop</h1></div>
<div><h2>While Loop, Do While Loop, For Loop, Foreach Loop. This lesson focuses on the ForEach loop</h2></div>
<br>

<?php
	$array = array("Daniel", "Jane", "Jacob", "John", "Joseph");

	foreach ($array as $loopdata) {
		echo "my name is ".$loopdata."<br>";
	}
	
		
?>
<br>
<br>
<img src="1_ForEach_Loop.jpg">
<div><h3>An array is a bunch of data that has been combined into one thing.</h3></div>
<div><h3>We use the foreach loop to output the array data by asigning it a variable called loopdata. </h3></div>
<div><h3>lastly we echo out the loopdata with html code imbedded in the PHP to force a line break. Each time the loopdata variable goes throught the array and loops out the contents. </h3></div>
<br>
<br>
<br>

</body>
</html>