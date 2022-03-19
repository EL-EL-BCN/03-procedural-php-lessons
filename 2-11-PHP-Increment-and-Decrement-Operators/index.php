<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Increment and Decrement Operators</title>
</head>

<body>
<div><h1>Increment and Decrement Operators</h1></div>
<div><h2>Example 1</h2></div>
<div><h3>$x = 10;</h3></div>
<div><h3>echo ++$x;</h3></div>
<div><h3>In this example we are incrementing x buy a value of 1.</h3></div>
<div><h3>echo ++$x; - by adding ++ infront of the variable we are telling PHP to increment by 1. (this is the same code for javascript)</h3></div>
<?php

	$x = 10;
	echo ++$x;

?>
<br>
<br>
<div><h2>Example 2</h2></div>
<div><h3>$x = 10;</h3></div>
<div><h3>echo $x++;</h3></div>
<div><h3>In this example we are incrementing x buy a value of 1.</h3></div>
<div><h3>echo $x++; - The positioning of the ++ is important. with the ++ placed AFTER the variable it does nothing.</h3></div>
<?php

	$x = 10;
	echo $x++;
?>
<br>
<br>
<div><h2>Example 3</h2></div>
<div><h3>$x = 10;</h3></div>
<div><h3>echo $x++;</h3></div>
<div><h3>echo $x;</h3></div>
<div><h3>In this example we are incrementing x buy a value of 1.</h3></div>
<div><h3>echo $x++; - The positioning of the ++ is important. with the ++ placed AFTER the variable it does nothing. However if we add another line asking to output the variable again then the ++ AFTER the variable from the previous line takes effect on the following line.</h3></div>
<?php

	$x = 10;
	echo $x++;
	echo $x
?>
<br>
<br>
<div><h2>Example 4</h2></div>
<div><h3>$x = 10;</h3></div>
<div><h3>echo --$x;</h3></div>
<div><h3>echo $x;</h3></div>
<div><h3>but what about --?</h3></div>
<div><h3>echo --$x; - By placing a -- before the variable we can expect to subtract by 1. Note that the -- is acting on both echo outputs even though we only specified it on the first one.</h3></div>
<?php

	$x = 10;
	echo --$x;
	echo $x
?>
<div><h3>The reason for this is sequential logic. on the first echo we are telling it to decrement the variable x by 1. Now variable x=9 so the second line of echo $x; is using the newly decremented value.</h3></div>
<br>
<br>
<div><h2>Example 5</h2></div>
<div><h3>$x = 10;</h3></div>
<div><h3>echo $x--;</h3></div>
<div><h3>echo $x;</h3></div>
<div><h3>but what about --?</h3></div>
<div><h3>echo $x--; - By placing a -- after the variable we do nothing. on the next output the -- takes effect.</h3></div>
<?php

	$x = 10;
	echo $x--;
	echo $x
?>
</body>
</html>