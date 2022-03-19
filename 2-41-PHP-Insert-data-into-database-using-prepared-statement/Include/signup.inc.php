<?php
	include_once 'dbh.inc.php';

	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	$sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd)
	VALUES (?, ?, ?, ?, ?);";
	// initialise database connection
	$stmt = mysqli_stmt_init($conn);
	// prepare the statement
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		echo "SQL error";
	} else {
		// bind the statement to the parameters
		mysqli_stmt_bind_param($stmt, "sssss", $first, $last, $email, $uid, $pwd);
		// execute the statement
		mysqli_stmt_execute($stmt);
	}

	header ("location: ../index.php?signup=sucsess");
?>

