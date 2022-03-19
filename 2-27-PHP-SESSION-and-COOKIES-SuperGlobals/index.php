<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP SESSION and COOKIES SuperGlobals</title>
</head>

<body>

	<div><h1>PHP SESSION and COOKIES SuperGlobals</h1></div>
	<div><h3>SuperGlobals are variables that have already been created for us within PHP. Examples include;</h3></div>
	<h3>$GLOBALS</h3>
	<h3>$_POST</h3>
	<h3>$_GET</h3>
	<h3>$_COOKIE</h3>
	<h3>$_SESSION</h3>
	<br>
	<div><h2>PHP SESSION and COOKIE SuperGlobals</h2></div>

	<div><h3>A COOKIE saves information about the user in the browser side and a SESSION saves informtion about a user on the server side.</h3></div>
	<div><h3>COOKIES are insecure as hackers can access a users browser and obtain information. An example of a cookie would be saving of information of the types of clothes someone is searching for so that this type of clothing can be displayed first on a website. cookies can be set to have an expiry of upto 30 days.</h3></div>
	<div><h3>SESSIONS are more secure as they are stored on a server. They can be used for login information so that when someone changes the page they are still logged in. When someone closes the browser they are automatically logged out of the session.</h3></div>
	<br>
	<div><h2>Example of COOKIE</h2></div>
	<br>

	<?php

	setcookie("name", "Elliott", time() - 1);

	?>

	<img src="1_COOKIE.jpg">
	<br>
	<div><h3>setcookie(); is a function inside of PHP</h3></div>
	<div><h3>(name is the Name of the cookie and Elliott is the value.</h3></div>
	<div><h3>,time() + 86400); is an expiry time of 1 day that this cookie will expire. Note 1x60x60x24 seconds = 86400.</h3></div>
	<br>
	<br>
	<img src="2_COOKIE2.jpg">
	<br>
	<div><h3>,time() - 1); By setting the time to a negative number means that a cookie will be automatically destroyed and not stored for 1 day.</h3></div>
	<br>
	<br>
	<div><h2>Example of SESSION</h2></div>
	<br>

	<?php

	$_SESSION['user_id'] = "12";

	?>

	<img src="3_SESSION.jpg">
	<br>
	<div><h3>$_SESSION is PHP predefined</h3></div>
	<div><h3>This session is called user_id.</h3></div>
	<div><h3>Finally we set the session name variable to the user ID, in this case 12.</h3></div>
	<div><h3>Knowing this the website will remember the user when browsing as long as the session is running.</h3></div>
	<br>
	<br>
	
</body>

</html>