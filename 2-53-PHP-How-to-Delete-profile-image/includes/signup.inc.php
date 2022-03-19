<?php
	include_once 'dbh.inc.php';

	$first = $_POST['user_first'];
	$last = $_POST['user_last'];
	$email = $_POST['user_email'];
	$uid = $_POST['user_uid'];
	$pwd = $_POST['user_pwd'];

	$sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd)
	VALUES ('$first', '$last', '$email', '$uid', '$pwd');";
	mysqli_query($conn, $sql);

	$sql = "SELECT * FROM users WHERE user_uid='$uid' AND user_first='$first'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0 ) {
		while ($row = mysqli_fetch_assoc($result)) {
			$user_id = $row['user_id'];
			$sql = "INSERT INTO profileimg (profileimg_user_id , profileimg_status) 
			VALUES ('$user_id', 1);";
				mysqli_query($conn, $sql);
				header ("location: ../index.php?signup=sucsess");
		}
	} else {
		echo "You have an error!";
	}
?>

