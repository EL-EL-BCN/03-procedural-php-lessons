<?php
	
	if (isset($_POST['submit'])) {
		// Assuming user did click the button we now add the database connection.
		include_once 'include/dbh.inc.php';
		// Now we add the variables for the form
		$first = $_POST['first'];
		$last = $_POST['last'];
		$email = $_POST['email'];
		$uid = $_POST['uid'];
		$pwd = $_POST['pwd'];
		// Code to prohibit the user leaving any of the variables empty.
		if (empty($first) || (empty($last) || (empty($email) || (empty($uid) || (empty($pwd) {
			header ("location: ../index.php?signup=empty");
		}
		else {
			// Check that email address format is valid.
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header ("location: ../index.php?signup=Invalid Email");
			}
			else {
				echo "signup the user!";
			}
		}
	}
	else {
		header ("location: ../index.php?signup=error");
	}
	
?>