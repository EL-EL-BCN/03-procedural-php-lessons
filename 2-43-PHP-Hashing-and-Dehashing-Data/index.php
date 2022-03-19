<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP Hashing and Dehashing Data</title>
</head>

<body>

<div><h1>PHP Hashing and Dehashing Data</h1></div>
<div><h2>If a hacker should gain access to the database then sensative information such as passwords could be stolen. The purpose of hashing is to convert from plain text to a "random" hashed value. There is also a reverse process for converting hashed to plaintext.</h2>
<br>
<div><h3>01. We will use the PHP function password_hash which is an algorithm that is always being updated unlike MD5, AES, etc. Note that salt is included in the password_hash. Salt is the act of adding a string to the password before hashing to make it even harder to decifer. </h3>
<div><h3>01a. From the PHP code snippet below we can see in our browser the plaintext password then the hashed value. Note that each time the browser is refreshed the hashed value changes.</h3>
<br>
<img src="01_Password_hash_example.jpg">
<br>
<br>
<?php
	echo "test123";
	echo "<br>";
	echo password_hash("test123", PASSWORD_DEFAULT)
?>
<br>
<br>
<div><h3>02. Note that when creating a password column in the database we need to allow a minimum of 60 characters with recommended length of 256 characters.</h3>
<br>
<img src="02_pwd_60_char_min.jpg">
<br>
<br>
<div><h3>03a. Dehashing. From the code snippet below we have a string called $input that is equal to the plain text password.</h3>
<div><h3>03b. we have another stringe that is the hashed password ($hashedPwdInDb) that uses the pasword_hash function to hash "test123".</h3>
<div><h3>03c. Lastly, we echo the results of pasword_verify function which is comparing the $input and $hashedPwdInDb variables. Note that an output of 1 means that the hashed password and the plain text password match.</h3>
<br>
<img src="03_Password_verify.jpg">
<br>
<br>
<?php
	$input = "test123";
	$hashedPwdInDb = password_hash("test123", PASSWORD_DEFAULT);

	echo password_verify($input, $hashedPwdInDb);
?>
<br>
<br>

</body>

</html>


