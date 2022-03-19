<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP Sceduled Messaging Programming</title>
<link rel="stylesheet" type="text/css" href="style.css"
</head>

<body>
<div><h1>PHP Sceduled Messaging Programming</h1></div>
<div><h2>Build some code into the website that tells us what day of the week it is and  how to insert HTML code within PHP code.</h2></div>

<?php
	$dayofweek = date("w");

	switch ($dayofweek){
		case 1:
			echo "<p>Today is Monday</p>";
		break;
		case 2:
			echo "<h1>Today is Tuesday</h1>";
		break;
		case 3:
			echo "<h1>Today is Wednesday</h1>";
		break;
		case 4:
			echo "<h1>Today is Thursday</h1>";
		break;
		case 5:
			echo "<h1>Today is Friday</h1>";
		break;
		case 6:
			echo "<h1>Today is Saturday</h1>";
		break;
		case 0:
			echo "<h1>Today is Sunday</h1>";
		break;

	}
?>

<img src="1_date_function.jpg">
<div class="one">1. We crate a variable ($) called dayofweek and make it equal to date which is a predefined function built into PHP.</div>
<br>
<div class="one">Note that we can use the W3 website - https://www.w3schools.com/php/func_date_date.asp. to check all the perameters for the date function. In this case we are using "W" which outputs the date as a numerical value from 1 to 6 with one being Monday, six being Saturday and Sunday represented by a zero value.</div>
<br>
<img src="2_Switch_function.jpg">
<div class="one">But we do not want the browser to output the day of the week as a numeric code value so we use the switch function with 7 switches defined. One for each day of the week.</div>
<br>
<img src="3_html_in_php.jpg">
<div class="one">we can add HTML tags within PHP code. The HTML tags have to be entered within double quotes like a string.</div>
<br>
<br>

</body>
</html>