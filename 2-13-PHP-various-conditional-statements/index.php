<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Various Conditional Statements</title>
</head>

<body>
<div><h1>Various Conditional Statements</h1></div>
<div><h1>(IF, ELSE, ELSEIF)</h1></div>
<div><h2>Example 1</h2></div>
<div><h3>$x = 1;</h3></div>
<div><h3>if ($x = 1) {</h3></div>
<div><h3>    echo "Slowly mastering coding!";</h3></div>
<?php

	$x = 1;
	
	if ($x = 1) {
		echo "Slowly mastering coding!";
	}

?>
<div><h3>x does equal 1 so we are slowly mastering coding!</h3>
<br>
<div><h2>Example 2</h2></div>
<div><h3>$x = 2;</h3></div>
<div><h3>if ($x == 1) {</h3></div>
<div><h3>    echo "Slowly mastering coding!";</h3></div>
<?php

	$x = 2;
	
	if ($x == 1) {
		echo "Slowly mastering coding!";
	}

?>
<div><h3>x does not equal 1 so there is no output.</h3>
<br>
<div><h2>Example 3</h2></div>
<div><h3>$x = 2;</h3></div>
<div><h3>if ($x = 1) {</h3></div>
<div><h3>    echo "Slowly mastering coding!";</h3></div>
<div><h3>} else {</h3></div>
<div><h3>    echo "Very slowly mastering coding!";</h3></div>
<?php

	$x = 2;
	
	if ($x == 1) {
		echo "Slowly mastering coding!";
	} else {
		echo "Very slowly mastering coding!";
	}

?>
<div><h3>x does not equal 1 so the IF condition is not met and the alternative ELSE condition is met.</h3>
<br>
<div><h2>Example 4</h2></div>
<div><h3>$x = 2;</h3></div>
<div><h3>if ($x = 1) {</h3></div>
<div><h3>    echo "Slowly mastering coding!";</h3></div>
<div><h3>} elseif {</h3></div>
<div><h3>    echo "Mastering coding!";</h3></div>
<div><h3>} else {</h3></div>
<div><h3>    echo "Very slowly mastering coding!";</h3></div>
<?php

	$x = 2;
	
	if ($x == 1) {
		echo "Slowly mastering coding!";
	}
	elseif ($x == 2) {
		echo "Mastering coding!";
	}
	else {
		echo "Very slowly mastering coding!";
	}

?>
<div><h3>so we can change the value of the variable x to 1.</h3></div>
<?php

	$x = 1;
	
	if ($x == 1) {
		echo "Slowly mastering coding!";
	}
	elseif ($x == 2) {
		echo "Mastering coding!";
	}
	else {
		echo "Very slowly mastering coding!";
	}

?>
<div><h3>so we can change the value of the variable x to 3.</h3></div>
<?php

	$x = 3;
	
	if ($x == 1) {
		echo "Slowly mastering coding!";
	}
	elseif ($x == 2) {
		echo "Mastering coding!";
	}
	else {
		echo "Very slowly mastering coding!";
	}

?>
<div><h3>So what can we use this for in an actual website? Well if a user is logged in then we can outut that particular user´s profile like as facebook.</h3></div>


</body>
</html>