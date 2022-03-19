<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP SuperGlobals</title>
</head>

<body>

<?php

	echo $_POST['name'];

?>


	<form method="POST">
		<input type="hidden" name="name" value="Elliott">
		<button type="submit">PRESS ME!</button>
	</form>
	<br>
	<br>
	<div><h1>PHP SuperGlobals</h1></div>
	<div><h2>Superglobal is a variable that has already been created for us within PHP. Examples include;</h2></div>
	<h3>$GLOBALS</h3>
	<h3>$_POST</h3>
	<h3>$_GET</h3>
	<h3>$_COOKIE</h3>
	<h3>$_SESSION</h3>
	<br>
	<div><h2>PHP POST and GET SuperGlobals</h2></div>
	<div><h3>POST and GET superglobals will be used a lot when coding in PHP. They are used to add information into the URL and then use that information on another page.</h3></div>
	<br>
	<img src="1_Form_method_get.jpg">
	<br>
	<div><h3>We start with some simple HTML code within a form that creates a button. Note that the form method is GET which means that we can see the information that we want to retrieve from the URL. If we use POST then we don´t see the information in the URL.</h3></div>
	<br>
	<br>
	<img src="2_URL.jpg">
	<br>
	<div><h3>We have set name to equal value with the input HTML code so when we pess the button we get code in the URL preceeded by a question mark. </h3></div>
	<br>
	<br>
	<img src="3_Form_method_post.jpg">
	<br>
	<div><h3>In this example we have a form that is using the POST method.</h3></div>
	<br>
	<br>
	<img src="4_URL.jpg">
	<br>
	<div><h3>This time with POST we do not get anything after the URL. </h3></div>
	<br>
	<br>
	<img src="5_Form_method_GET.jpg">
	<br>
	<div><h3>We can see what is happening by echoing out the results of a form GET. </h3></div>
	<br>
	<br>
	<img src="6_URL.jpg">
	<br>
	<br>
	<img src="7_Form_method_POST.jpg">
	<br>
	<div><h3>We can see what is happening by echoing out the results of a form POST. Note that the URL does not contain any information but the value of name is still there and can be echoed out.</h3></div>
	<br>
	<br>
	<img src="8_URL.jpg">
	<br>

	
</body>

</html>