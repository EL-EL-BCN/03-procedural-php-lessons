<?php
	session_start();
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP SESSION SuperGlobals - HOMEPAGE</title>
<link rel="Stylesheet" type="text/css" href="style.css">
</head>

<body>

	<ul>
		<li><a href="index.php">HOME</a></li>
		<li><a href="contact.php">CONTACT</a></li>
	</ul>

	<?php

	$_SESSION['username'] = "Elli100";
	echo $_SESSION['username'];

	if (!isset($_SESSION['username'])) {
		echo "You are not logged in!";
	} else {
		echo " You are logged in!";
	}
	
	?>

	<div><h1>PHP SESSION SuperGlobal - HOMEPAGE</h1></div>
	
	<div><h2>A session inside PHP is a little different from a session variable. Lets pretend that we want to create a session variable and we want to access the session variable inside this page. An example of this would be a website that remembers that we are logged in when we change pages.</h2></div>
	<br>
	<img src="1_Session_variable.jpg">
	<br>
	<div><h3>we start with some PHP code defining the session variable 'username' and we set a user "Elli100". When we echo this out we see the user on the home page (index.php). </h3></div>
	<br>
	<br>
	<img src="2_Contact_session_error.jpg">
	<br>
	<div><h3>However when we go to the contacts page it does not remember the username and gives an error.</h3></div>
	<br>
	<img src="3_browser_Contact_session_error.jpg">
	<br>
	<br>
	<div><h3>This is because our website does not remember our session variable called username and we need to do this in order to be logged in. A way to get around this is to have a session started that saves our session variable and allows us to access it in every single page of our website. The way to do this is to add a pice of code at the top of our page.</h3></div>
	<br>
	<br>
	<img src="4_Session_Start.jpg">
	<br>
	<br>
	<div><h3>we need to have the session_start code at the top of each page.</h3></div>
	<br>
	<br>
	<img src="5_username_remembered.jpg">
	<br>
	<div><h3>Now when we go to contact homepage we can see that the username is remembered because it is being echoed out. This is because the username session variable is saved inside the session.</h3></div>
	<br>
	<div><h2>TIP: as per lesson 1-20, it is worth putting the session start inside a seperate header.php document then it does not need to be included on every page because we will automatically have a session running on every page that has a header.</h2></div>
	<br>
	<br>
	<img src="6_Display_content_if_logged_in.jpg">
	<br>
	<div><h3>an example of a webpage function that displays content if a user is logged in is a simple conformation message. Note that !isset means NOT SET. SO we are defining the not set massage then using an else statement.</h3></div>
	<br>
	<img src="7_Browser_Display_content_if_logged_in.jpg">
	<br>
	<br>



</body>

</html>