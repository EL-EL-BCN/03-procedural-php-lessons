<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Logical Operators</title>
</head>

<body>
<div><h1>Logical Operators</h1></div>
<div><h2>Example 1</h2></div>
<div><h3>$x = 10;</h3></div>
<div><h3>yx = 20;</h3></div>
<div><h3>if ($x == $y) {</h3></div>
<div><h3>    echo "true";</h3></div>
<div><h3>In this example we are asking for an output of true if x is equal to y.</h3></div>
<?php

	$x = 10;
	$y = 20;
	
	if ($x == $y) {
		echo "true!";
	}

?>
<div><h3>At the moment this will not output anything however we can add multiple conditions to the statment.</h3></div>
<div><h3>if ($x == $y or 1 == 1) {</h3></div>
<?php

	$x = 10;
	$y = 20;
	
	if ($x == $y or 1 == 1) {
		echo "true!";
	}

?>
<div><h3>Now we get an output of ture because the 1 does equal 1.</h3></div>
<br>
<div><h2>Example 2</h2></div>
<div><h3>$x = 10;</h3></div>
<div><h3>yx = 20;</h3></div>
<div><h3>if ($x == $y and 1 ==1) {</h3></div>
<div><h3>    echo "true";</h3></div>
<div><h3>In this example we are asking for an output of true if x is equal to y AND 1 is equal to 1</h3></div>
<?php

	$x = 10;
	$y = 20;
	
	if ($x == $y and 1 == 1) {
		echo "true!";
	}

?>
<div><h3>No output because 10 does not equal 20 so the AND condition is not being met. Note that we have not specified a false output statement so there is no output. If we change the value of x to 20 then we would get a TRUE output ans both conditions are being met.</h3></div>
<div><h3>$x = 20;</h3></div>
<div><h3>yx = 20;</h3></div>
<div><h3>if ($x == $y and 1 ==1) {</h3></div>
<div><h3>    echo "true";</h3></div>
<?php

	$x = 20;
	$y = 20;
	
	if ($x == $y and 1 == 1) {
		echo "true!";
	}

?>
<br>
<div><h2>Example 3</h2></div>
<div><h3>$x = 10;</h3></div>
<div><h3>yx = 20;</h3></div>
<div><h3>if ($x == $y || 1 ==1) {</h3></div>
<div><h3>    echo "true";</h3></div>
<div><h3>In this example we are asking for OR output using the || symbols.</h3></div>
<?php

	$x = 10;
	$y = 20;
	
	if ($x == $y || 1 == 1) {
		echo "true!";
	}

?>
<div><h2>Example 4</h2></div>
<div><h3>$x = 20;</h3></div>
<div><h3>yx = 20;</h3></div>
<div><h3>if ($x == $y && 1 ==1) {</h3></div>
<div><h3>    echo "true";</h3></div>
<div><h3>In this example we are asking for AND output using the && symbols.</h3></div>
<?php

	$x = 20;
	$y = 20;
	
	if ($x == $y && 1 == 1) {
		echo "true!";
	}

?>
<div><h2>Example 5</h2></div>
<div><h3>$x = 10;</h3></div>
<div><h3>yx = 20;</h3></div>
<div><h3>if ($x == $y xor 1 ==1) {</h3></div>
<div><h3>    echo "true";</h3></div>
<div><h3>XOR condition is like saying either. i.e. one of the conditions must be true but only one of them can be true.</h3></div>
<?php

	$x = 10;
	$y = 20;
	
	if ($x == $y xor 1 == 1) {
		echo "true!";
	}

?>
<div><h3>So we got a TRUE output because x does not equal y but 1 does equal 1.However if we change x to 20 then there will be no output because both conditions are met.</h3></div>
<div><h3>$x = 20;</h3></div>
<div><h3>yx = 20;</h3></div>
<div><h3>if ($x == $y xor 1 ==1) {</h3></div>
<div><h3>    echo "true";</h3></div>
<?php

	$x = 20;
	$y = 20;
	
	if ($x == $y xor 1 == 1) {
		echo "true!";
	}

?>
<br>
<div><h1>Conclusions</h1></div>
<div><h2>AND = both conditions have to be met.</h2></div>
<div><h2>OR = one or both conditions have to be met.</h2></div>
<div><h2>XOR = only one condition must be met.</h2></div>
</body>
</html>