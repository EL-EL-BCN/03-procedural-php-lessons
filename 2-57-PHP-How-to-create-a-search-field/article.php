<?php
	include 'include/header.inc.php';
?>
<body>

<h1>Article Page</h1>

<div class="article-container">
	<?php
		$title = mysqli_real_escape_string($conn, $_GET['title']);
		$date = mysqli_real_escape_string($conn, $_GET['date']);

		$sql = "SELECT * FROM article WHERE art_title='$title' AND art_date='$date'";
		$result = mysqli_query($conn, $sql);
		$queryResults = mysqli_num_rows($result);

		if ($queryResults > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<div class='article-box'>
					<h3>".$row['art_title']."</h3>
					<p>".$row['art_text']."</p>
					<p class='date'>Date: ".$row['art_date']."</p>
					<p class='author'>Author: ".$row['art_author']."</p>
				</div>";
			}
		}
	?>
</div>
	
</body>
</html>