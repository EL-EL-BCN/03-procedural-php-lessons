<?php
	include_once 'include/dbh.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP Error Handlers</title>
</head>

<body>

<div><h1>PHP Error Handlers</h1></div>
<div><h2>Are designed to catch users when they make a mistake during data entry and give an error message.</h2>

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


<div><h3>32. We start with a simple HTML form for a user to input data. The action of this form takes us to a signup.inc.php file where we put all the code for this form. </h3>
<br>
<img src="32_Start_form_action_signup-inc-php.jpg">
<br>
<br>
<div><h3>33. The first thing we want ot do is to make sure the form has been submitted so that a user has not got to this page without clicking the form. This is so that if the user has got to this page by pasting the URL then the form will not add to the database blank data. We need to check that the user has clicked the button - This is an error handler.</h3>
<div><h3>33a. To do this we use and IF statement with the isset function </h3>
<div><h3>33b. With an ELSE statement to take them back to the header with a URL error message.</h3>
<br>
<img src="33_isset_submit_button.jpg">
<br>
<br>
<div><h3>34a. The true condition of the issset if statment is to first add a line of code to connect to the database.</h3>
<div><h3>33c. Then add our form variables.</h3>
<br>
<img src="34_True_condition_of_isset.jpg">
<br>
<br>
<div><h3>35. We next check for empty fields when the user clicked the submit button. We use another IF statement and the function empty to check that none of the variables are empty. Notice how when coding we always code the failure condition first otherwise the form may run even if something is not right. This could screw up the database.</h3>
<br>
<img src="35_Check_for_empty.jpg">
<br>
<br>
<div><h3>36. We also have a built in function to check if an email address is valid. Note how we define the failure condition first by saying (!filter_var($email, FILTER_VALIDATE_EMAIL)) { - Note that the exclamation mark denotes NOT so we first define the failure condition before moving onto the success statement.</h3>
<br>
<img src="36_Check_email_valid.jpg">
<br>
<br>
<div><h3>37. And we can keep on stacking these if statements to check many more things such as to prevent duplicate user ID (uid) in the database.</h3>
<br>


</body>

</html>


