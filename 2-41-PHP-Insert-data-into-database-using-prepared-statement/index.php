<?php
	include_once 'include/dbh.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP How insert data from a website into a Database with Prepared Statement</title>
</head>

<body>

<div><h1>PHP How insert data from a website into a Database with Prepared Statement</h1></div>
<div><h2>In this lesson we learn how to insert data from a website into a Database using the more secure method of a prepared statement.</h2>

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


<div><h3>26a. We start with the same code as before where we have code at the top, referencing an external file to initialise the database connection. (dbh.inc.php) </h3>
<div><h3>26b. Next we have a form for data input that references an external file of code to enter the data into the database. (signup.inc.php) </h3>
<br>
<img src="26_Code_starting_point.jpg">
<br>
<br>
<div><h3>27a. Now we remove the values and substitute them with placeholders which we give to the SQL later on when we create the prepared statement. </h3>
<div><h3>27b. We delete the following line of mysqli query code because we do not need it. </h3>
<br>
<img src="27_Substitute_values_and_delete_line_of_code.jpg">
<br>
<br>
<div><h3>28a. We initialise the connection to the database. </h3>
<div><h3>28b. Then write the preapred statement. </h3>
<div><h3>28c. Next we bind the perameters to the placeholders. Note that we have five s ("sssss"), one for each variable. ($first, $last, $email, $uid, $pwd) </h3>
<div><h3>28d. Lastly, we execute the statement. </h3>
<br>
<img src="28_Prepared_statement_code.jpg">
<br>
<br>
<div><h3>29. Now I can add another user to the database from the webpage. </h3>
<br>
<img src="29_add_new_user.jpg">
<br>
<br>
<div><h3>30. And we get signup=success in the URL and the form goes back to blank. </h3>
<br>
<img src="30_signup_success.jpg">
<br>
<br>
<div><h3>31. We see this user added to the database </h3>
<br>
<img src="31_php_Database_new_user.jpg">
<br>
<br>

</body>

</html>


