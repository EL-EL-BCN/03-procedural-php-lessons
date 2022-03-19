<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP Internal Functions</title>
</head>

<body>
<div><h1>User defined function or PHP predetermined function.</h1></div>
<br>
<div><h2>A function is PHP code that does one certain thing</h2></div>
<br>
<div><h3>"strlen" function counts the string length so "hello world" has 11 characters. echo strlen("hello world");</h3></div>
<?php
	echo strlen("hello world");
?>
<br>
<br>
<div><h3>"str_word_count" function counts the number of words so "hello world" has 2 words. echo str_word_count("hello world");</h3></div>
<?php
	echo str_word_count("hello world");
?>
<br>
<br>
<div><h3>"strrev" function reverses the string so "hello world" will have the letters in reverse echo strrev("hello world");</h3></div>
<?php
	echo strrev("hello world");
?>
<br>
<br>
<div><h3>"strpos" function looks at the position in the string of the second value defined after the coma. So this willl output a 6 because the begining of the word "world" is the sixth character in the string counting from zero. echo strpos("hello world","world");</h3></div>
<?php
	echo strpos("hello world","world");
?>
<br>
<br>
<div><h3>"str_replace" function has three variables, 1st variable is the string we search for, 2nd vriable is string that we replace it with and 3rd variable is the whole string that we want to search and replace.
echo str_replace("world","universe",hello world"); - We search string "hello world" for "world" and replace with "universe"</h3></div>
<?php
	echo str_replace("world","universe","hello world");
?>
<br>
<br>
<div><h1>All of the above examples are PHP predetermined functions.</h1></div>


</body>

</html>	