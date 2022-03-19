<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP How to Display Error messages - method 1</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div><h1>PHP How to Display Error messages - method 1</h1></div>

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

<?php
	$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
			//Then we use strpos() to see if a specific string is inside the URL
			if (strpos($fullUrl, "signup=empty") == true) {
				//If it is, then we create an error message
				echo "<p class='error'>You did not fill in all fields!</p>";
				exit();
			}
			//Each elseif statement just continues checking for the error or success type we might have
			elseif (strpos($fullUrl, "signup=char") == true) {
				echo "<p class='error'>You used invalid characters!</p>";
				exit();
			}
			elseif (strpos($fullUrl, "signup=email") == true) {
				echo "<p class='error'>You used an invalid e-mail!</p>";
				exit();
			}
			elseif (strpos($fullUrl, "signup=success") == true) {
				echo "<p class='success'>You have been signed up!</p>";
				exit();
			}
?>

<br>
<div><h3>38. We are going to start with the script below that is checking a number of things with the data that the user has entered. Note that in the negative statement the script takes the user back the the index.php page with a header function and error message in the URL. After this the script is closed with an exit function. This stops the script running through the rest of the checks if an error is detected.</h3>
<br>
<img src="38_Starting_script.jpg">
<br>
<br>
<div><h3>39. So if the user makes a mistake we need to grab this error message in the URL and do something with it.</h3>
<br>
<img src="39_Note_URL_message.jpg">
<br>
<br>
<div><h3>40. Now if i click the signup button and leave one or more of the inputs blank then I get the script takes me back to the index.php page and the URL has the corresponding error message contained.</h3>
<br>
<img src="40_URL_Error_message.jpg">
<br>
<br>
<div><h3>41. If the user types something in wrong and they are returned to the input form then we want to make sure that the data is not erased but still displayed on the screen for them to correct. </h3>
<div><h3>41a. First we want to get the full URL ($fullUrl) and then look for a certain string in that URL. Inside the string we are going to set it to (http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]) - Note that $_server is a superglobal.</h3>
<div><h3>41b. Next we want an if condition to look for certain characters in the URL string. We use strpos function to do this. Note that first specify the string we want to look in ($fullurl) then the characters we want to search for ("signup=empty") we finish this with an == true so we are saying if the signup=empty is in the URL then do something inside the if statement.</h3>
<div><h3>41c. Next line of the IF statment is to echo an error message. Note the HTML tags within the PHP code that refer to a CSS style class to give the error message red lettering. </h3>
<div><h3>41d. If the error condition is true then we end the php script here to stop it proceeding to check all the other elseif statements. </h3>
<div><h3>41e. We use two more elseif statements to check for the other possible URL error messages and echo the corresponding error text.  </h3>
<div><h3>41f. Finally we end the PHP code with the last ELSEIF statement to define the success URL code and echo text.</h3>
<br>
<img src="41_index_php_code_to_extract_URL_message.jpg">
<br>
<br>

</body>

</html>


