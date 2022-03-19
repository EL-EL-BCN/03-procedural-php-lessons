<?php
	include 'include/header.inc.php';
?>
<body>
<div class=search-box>	
	<form action="search-page.php" method="POST">
		<input type="text" name="search" placeholder="search">
		<button type="submit" name="Submit_search">SEARCH</button>
	</form>
</div>

<h1>Front Page</h1>
<h2>All Articles</h2>

<div class="article-container">
	<?php
		$sql = "SELECT * FROM article";
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