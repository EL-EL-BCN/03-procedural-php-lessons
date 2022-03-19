<?php
  session_start();
  include_once 'includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>

<?php

	$sql = "SELECT * FROM users";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$user_id = $row['user_id'];
			$sqlProfileImg = "SELECT * FROM profileimg WHERE user_id = '$user_id'";
			$resultSqlprofileImg = mysqli_query($conn, $sql);
			while ($rowProfileImg = mysqli_fetch_assoc($resultSqlprofileImg)) {
				echo "<div class='user-container'>";
					if ($rowProfileImg['profileimg_status'] = 2) {
						echo "<img src='profile_images/profile".$user_id.".jpg'>";
					} else {
						echo "<img src='profile_images/profile_default.jpg'>";
					}
					echo "<p>".$row['user_uid']."</p>";
					echo "<p>".$row['user_first']."</p>";
					echo "</div>";
			}
		}
	} else {
		echo "There are no users yet!";
	}

	if (isset($_SESSION['user_id'])) {
		if ($_SESSION['user_id'] == 1) {
			echo "You are logged in as user number 1 - admin";
		}
		echo "<form action='includes/upload.inc.php' method='POST' enctype='multipart/form-data'>
		<input type='file' name='file'>
		<button type='submit' name='submit'>UPLOAD</button>
	</form>";
	} else {
		echo "You are not logged in! Please login or use bellow form to create new user.";
		echo "<form action='includes/signup.inc.php' method='POST'>
			<input type='text' name='user_first' placeholder='First Name'>
			<input type='text' name='user_last' placeholder='Last Name'>
			<input type='text' name='user_email' placeholder='email'>
			<input type='text' name='user_uid' placeholder='Screen Name'>
			<input type='text' name='user_pwd' placeholder='Password'>
			<button type='submit' name='submitSignup'>SIGNUP</button>
		</form>";
	}
?>
    
	<p>Login as User!</p>
	<form action="includes/login.inc.php" method="POST">
		<button type="submit" name="submitLogin">LOGIN</button>
	</form>

	<p>Logout as User!</p>
	<form action="includes/logout.inc.php" method="POST">
		<button type="submit" name="submitLogout">LOGOUT</button>
	</form>


</body>
</html>
