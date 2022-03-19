<?php

	session_start();

	if (isset($_POST['submitLogin'])) {
		$_SESSION[user_id] = 1;
		header("Location: ../index.php");
	}
?>

