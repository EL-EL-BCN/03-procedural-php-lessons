<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP How to create user defined Functions</title>
</head>

<body>
<div><h1>PHP How to create user defined Functions</h1></div>
<div><h3>There are User Defined Functions and Predefined Functions (see lesson 1-04) This lesson covers User defined Functions.</h3></div>
<div><h2>Example 1</h2></div>
<?php
	
	function NewCalc($x) {
		$newnr = $x * 0.75;
		echo "Here is 75% of what you wrote: ".$newnr;
 }
 	$x = 100;
 	NewCalc($x);

?>
<br>
<br>
<img src="1_User_Function.jpg">
<div><h3>It is important that a user defined function only does one thing and not mutiple calculations under the same function. This way the function can be used multiple times when coding rather than a function with single use for very specific thing.</h3></div>
<div><h3>In the above example we have a user defined function called NewCalc which is acting on variable x.</h3></div>
<div><h3>We are telling this function to generate a new number and asigning it variable $newnr. we want the user defined function to calculate 75% of variable x.</h3></div>
<div><h3>Lastly we want to echo out the result of this function.</h3></div>
<div><h3>Note that outside of the curly brackets {} we call out this function because at the moment we have only defined the function. So the last two lines we define variable x Then we call the function telling it to act on variable x.</h3></div>
<br>
<br>
<div><h2>Example 2</h2></div>

<?php

 	$x = 100;
 	NewCalc($x);

 	echo "<br>";

 	$a = 10;
 	NewCalc($a);

?>
<br>
<br>
<img src="1_User_Function_2.jpg">
<div><h3>Once we declare the function we can use it as many times as we need. Here we are defining two variables x and a. We are using the same function prevously designed to calculate 75% of the variables and echo it out.</h3></div>
<div><h3>Best practice is to put all the user defined functions at the top then call them as and when needed throughout the codesheet.</h3></div>
<br>
</body>
</html>