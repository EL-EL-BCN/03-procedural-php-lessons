<?php
	include 'include/header.inc.php';
?>

<h1>Search Page</h1>

<div class="article-container">
	<?php
		if (isset($_POST['Submit_search'])) {
			$search = mysqli_real_escape_string($conn, $_POST['search']);
			$sql = "SELECT * FROM article WHERE art_title LIKE '%$search%' OR art_text LIKE '%$search%' OR art_author LIKE '%$search%' OR art_date LIKE '%$search%'";
			$result = mysqli_query($conn, $sql);
			$queryResults = mysqli_num_rows($result);

			echo "There are ".$queryResults." results";

				if ($queryResults > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
						echo "<a href='article.php?title=".$row['art_title']."&date=".$row['art_date']."'><div class='article-box'>
						<h3>".$row['art_title']."</h3>
						<p>".$row['art_text']."</p>
						<p class='date'>Date: ".$row['art_date']."</p>
						<p class='author'>Author: ".$row['art_author']."</p>
					<a/></div>";
				}
			} else {
				echo "There are no results matching your search!";
			}
		}
	?>
</div>