<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<title>2-58 PHP How to Create a Contact Form</title>
			<link rel="shortcut icon" type="image/png" href="images/logos/BTH-favicon.png">
			<meta name="viewport" content="width-device-width, initial-sacle 1.0">
			<link rel="stylesheet" href="styles/style.css">
		</head>
		<body>
			<main>
				<p>SEND EMAIL</p>
				<form class="coCT_FM" action="contact.php" method="POST"></form>
				<input type="text" name="full_name" placeholder="Full Name">
				<input type="text" name="email" placeholder="Your Email">
				<input type="text" name="subject" placeholder="Subject">
				<textarea name="message" placeholder="Message"></textarea>
				<button type="submit" name="submit">SEND MAIL</button>
			</main>
		</body>
	</html>