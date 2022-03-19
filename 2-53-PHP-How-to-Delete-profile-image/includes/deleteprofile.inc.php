<?php

	session_start();
	include_once 'dbh.inc.php';
	$sessionid = $_SESSION['user_id'];

	$filename = "../profile_images/profile".$sessionid."*";
	$fileInfo = glob($filename);
	$fileext = explode(".", $fileInfo[0]);
	$fileactualext = $fileext[3];

	$file="../profile_images/profile".$sessionid.".".$fileactualext;

	if (!unlink($file)) {
		echo "File was not deleted!";
	} else {
		echo "File deletion successful!";
	}

	$sql = "UPDATE profileimg SET profileimg_status=1 WHERE profileimg_user_id='$sessionid';";
	mysqli_query($conn, $sql);
	
	header("Location: ../index.php?Delete_Success");

	
	
