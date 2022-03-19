<?php
	include_once 'include/dbh.inc.php';
?>



<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP How insert data from a website into a Database</title>
<link rel="Stylesheet" type="text/css" href="style.css">
</head>

<body>

<div><h1> PHP How insert data from a website into a Database</h1></div>
<div><h2>In this lesson we learn how to insert data from a website into a Database. </h2>

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





<div><h3>12. We will start with the same php code as the previous lesson. and the HTML code will include the include php code at the top as per the previous lesson.</h3>
<div><h3>12a. We then modify the SQL code within the PHP code to include the INSERT sql code from lesson 1-34.</h3>
<div><h3>12c. as we do not need a mysqli variable we just run it as mysqli_query.</h3>
<br>
<img src="12_php_code_to_insert_data.jpg">
<br>
<br>
<div><h3>13. we can see in phpmyadmin that the row has been added to the users tabke. However we just added the values into the SQL code which is not really usefull in real world applications.</h3>
<br>
<img src="13_php_code_to_insert_data_results.jpg">
<br>
<br>
<div><h3>14. What we want is a HTML form that will actually insert data into a database.</h3>
<br>
<img src="14_HTML_form.jpg">
<br>
<br>
<div><h3>15. We want this form to perform an action and we want to include the code for that action as a seperate file. First we modify the form HTML to include the action form action="include/signup.inc.php".</h3>
<div><h3>15a. Finally the method for this form is set to POST because we DO NOT want the information to be shown in the URL as it contains sensative information such as password which must be kept secure. See lesson 1-23 about POST and GET.</h3>
<br>
<img src="15_Form_action.jpg">
<br>
<br>
<div><h3>16. We remove the php code with SQL to Insert data and add it into a new file named the same as the action on the form HTML. (signup.inc.php).</h3>
<br>
<img src="16_signup-inc-php.jpg">
<br>
<br>
<div><h3>17. Now we need to modify the code in the signup.inc.php file.</h3>
<div><h3>17a. We need to include some code to take us back to the index file once the submit button has been clicked. Note that this code also includes a code snippet to write signup=success in the URL - header ("location: ../index.php?signup=sucsess");</h3>
<div><h3>17b. The signup.inc.php file also need some code to call the database conection file - include_once 'dbh.inc.php'; Note that because this file is already inside the include folder it does not have a path name, just the file name.</h3>
<div><h3>17c. Also at the moment the file has the rows manually written in and we need some code to get the signup information from the form via superglobal POST by defining a string</h3>
<div><h3>17d. The strings defined in step 7C need to be added into the SQL code values.</h3>
<br>
<img src="17_Signup-inc-php_code.jpg">
<br>
<br>
<div><h3>18. Now the Page contains the form with the data Entry boxes and a signup button. Once we input data and hit signup.....</h3>
<br>
<img src="18_Browser_Data_entry.jpg">
<br>
<br>
<div><h3>19. We see the signup=success message in the URL and the form is empty on the browser.</h3>
<br>
<img src="19_Browser_Data_entry_Signup-success.jpg">
<br>
<br>
<div><h3>20. And if we look in the table contents in PHPmyadmin we see that the new user has been created. </h3>
<br>
<img src="20_Phpmyadmin_new_user.jpg">
<br>
<br>

</body>

</html>


