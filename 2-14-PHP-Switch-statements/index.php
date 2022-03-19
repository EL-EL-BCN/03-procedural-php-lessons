<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Switch Statements</title>
</head>

<body>
<div><h1>Switch Statements</h1></div>

<div><h3>In a switch statment we are going to do something differnet in the browser depending on the output of the equation.</h3></div>

<div><h2>Example 1</h2></div>
<div><h3>$x = 1;</h3></div>
<div><h3>switch ($x) {</h3></div>
<div><h3>    case 1:{</h3></div>
<div><h3>    echo "The answer is 1";</h3></div>
<div><h3>    break;{</h3></div>
<?php

	$x = 1;
	
	switch ($x) {
		case 1:
			echo "The answer is 1";
		break;
	}

?>
<div><h3>Inside the brackets of the switch statment we specify what variable we want ot check.</h3>
<div><h3>The break means we are ending the case 1 (where x=1) of the switch statement.</h3>
<br>
<div><h2>Example 2</h2></div>
<div><h3>$x = "number";</h3></div>
<div><h3>switch ($x) {</h3></div>
<div><h3>    case 1:{</h3></div>
<div><h3>        echo "The answer is 1";</h3></div>
<div><h3>    break;{</h3></div>
<div><h3>    case "number":{</h3></div>
<div><h3>        echo "The answer is number";</h3></div>
<div><h3>    break;{</h3></div>
<?php

	$x = "number";
	
	switch ($x) {
		case 1:
			echo "The answer is 1";
		break;
		case "number":
			echo "The answer is number";
		break;
	}

?>
<div><h3>Inside the brackets of the switch statment we specify what variable we want ot check.</h3>
<div><h3>The break means we are ending the case 1 (where x=1) of the switch statement.</h3>
<div><h3>we have an aditional case where we are loking for an integer "number"</h3>
<br>
<div><h2>Example 3</h2></div>
<div><h3>$x = 3;</h3></div>
<div><h3>switch ($x) {</h3></div>
<div><h3>    case 1:{</h3></div>
<div><h3>        echo "The answer is 1";</h3></div>
<div><h3>    break;{</h3></div>
<div><h3>    case 2:{</h3></div>
<div><h3>        echo "The answer is 2;</h3></div>
<div><h3>    break;{</h3></div>
<div><h3>    case 3:{</h3></div>
<div><h3>        echo "The answer is 3;</h3></div>
<div><h3>    break;{</h3></div>
<div><h3>    case 4:{</h3></div>
<div><h3>        echo "The answer is 4;</h3></div>
<div><h3>    break;{</h3></div>
<?php

	$x = 3;
	
	switch ($x) {
		case 1:
			echo "The answer is 1";
		break;
		case 2:
			echo "The answer is 2";
		break;
		case 3:
			echo "The answer is 3";
		break;
		case 4:
			echo "The answer is 3";
		break;
	}

?>
<div><h3>With the case and break we can have multiple outputs depending in the value of the integer.</h3>
<br>
<div><h2>Example 4</h2></div>
<div><h3>$x = 5;</h3></div>
<div><h3>switch ($x) {</h3></div>
<div><h3>    case 1:{</h3></div>
<div><h3>        echo "The answer is 1";</h3></div>
<div><h3>    break;{</h3></div>
<div><h3>    case 2:{</h3></div>
<div><h3>        echo "The answer is 2;</h3></div>
<div><h3>    break;{</h3></div>
<div><h3>    case 3:{</h3></div>
<div><h3>        echo "The answer is 3;</h3></div>
<div><h3>    break;{</h3></div>
<div><h3>    case 4:{</h3></div>
<div><h3>        echo "The answer is 4;</h3></div>
<div><h3>    break;{</h3></div>
<div><h3>    default:{</h3></div>
<div><h3>        echo "There is no answer;</h3></div>
<?php

	$x = 5;
	
	switch ($x) {
		case 1:
			echo "The answer is 1";
		break;
		case 2:
			echo "The answer is 2";
		break;
		case 3:
			echo "The answer is 3";
		break;
		case 4:
			echo "The answer is 3";
		break;
		default:
			echo "there is no answer";
	}

?>
<div><h3>we can also add a default clause for when none of the cases match the integer.</h3>
<br>
<div><h2>Conclusion: </h2></div>
</body>
</html>