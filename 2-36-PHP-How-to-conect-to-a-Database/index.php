<?php
	include_once 'include/dbh.inc.php';
?>



<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> PHP How to conect to a Database</title>
<link rel="Stylesheet" type="text/css" href="style.css">
</head>

<body>

	<div><h1> PHP How to conect to a Database</h1></div>
	<div><h3>How to access a PHP database from a website. </h3>
	<div><h3>1. We are going to create a new file because we want the database connection in another file where we specify 5 lines of PHP code. </h3>
	<div><h3>1a. $dbServername - This is the server where the database is located. In this case it is localhost but it could be a remote server from where the website is located.</h3>
	<div><h3>1b. $dbUsername - This is the Username defined in the Database. In the case of XAMPP, root is the default.</h3>
	<div><h3>1c. $dbPassword - This is the Password defined in the Database. In the case of XAMPP, The default is no password.</h3>
	<div><h3>1d. $dbName - This is the name of the database.</h3>
	<div><h3>1e. $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName); - This is the connection to the datbase using mysqli where we define the four above parameters in the exact order specified (server name, Username, Password, Database name).</h3>
	<div><h3>Below is a screenshot of how the code looks.</h3>
	<br>
	<img src="1_Database_connection_php_file.jpg">
	<br>
	<br>
	<div><h3>2. I then create a new folder called "include" in the root folder. It could be called anything. In here I save the connection file with the name dbh.incl.php. It could be called anything but logical naming is important so dbh stands for database handler.</h3>
	<br>
	<img src="2_Save_Db_conn_file.jpg">
	<br>
	<br>
	<div><h3>3. Now we can call this connection file in php code at the top of our html index file.</h3>
	<br>
	<img src="3_include_conn_file.jpg">
	<br>
	
</body>

</html>


