<?php
	include_once 'include/dbh.inc.php';
?>



<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP Protect the database from SQL injection using mysqli</title>
<link rel="Stylesheet" type="text/css" href="style.css">
</head>

<body>

<div><h1>PHP Protect the database from SQL injection using mysqli</h1></div>
<div><h2>This lesson will cover how to stop someone going inside the database and malicoiusly inserting data via the website using a form. This will block someone from inserting code into one of the fields that could erase data in a table.</h2>
<div><h2>So far we have covered procedural code so this lesson will talk about how to stop this with procedural code.</h2>

<form action="include/signup.inc.php" method="POST">
	<input type="text" name="first" placeholder="first name">
	<br>
	<input type="text" name="last" placeholder="Last name">
	<br>
	<input type="text" name="email" placeholder="E-mail">
	<br>
	<input type="text" name="uid" placeholder="User Name">
	<br>
	<input type="text" name="pwd" placeholder="Password">
	<br>
	<button type="submit" name="submit">sign up</button>
</form>





<div><h3>21. We need to modify the signup.inc.php file so that the strings that take the data from POST include the mysqli_real_escape_string function. The syntax is shown below. </h3>
<br>
<img src="21_mysqli_real_escape_string.jpg">
<br>
<br>
<div><h3>Next lesson will cover prepared statments which is much more secure.</h3>
</body>

</html>


