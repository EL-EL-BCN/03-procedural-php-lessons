<?php
	include_once 'include/dbh.inc.php';
?>



<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>How to show data from a Database on website</title>
<link rel="Stylesheet" type="text/css" href="style.css">
</head>

<body>

<div><h1> How to show data from a Database on website</h1></div>
<div><h3>In this lesson we learn how to display data from a database in a website. </h3>

<?php
	$sql = "SELECT * FROM users WHERE user_first='Elliott';";
	$results = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($results);

	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($results)) {
			echo $row ['user_uid'] . "<br>";

		}
	}
?>


	<div><h3>4. We start by deleting the users database in php_lessons by going to php_lessons database in left page tab. Then we select drop next to the users table to remove it.  </h3>
	<div><h3>5. Now we use the shown SQL code to create a new table with columns as indicated. </h3>
	<br>
	<img src="5_Create_new_users_table.jpg">
	<br>
	<br>
	<div><h3>6. We can see that the SQL code has created the table as desired and that it has zero rows. </h3>
	<br>
	<img src="6_Create_new_users_table_results.jpg">
	<br>
	<br>
	<div><h3>7. Now we add some users with the below SQL code. </h3>
	<br>
	<img src="7_Create_new_users.jpg">
	<br>
	<br>
	<div><h3>8. And we see that 2 rows have been added to the users table.</h3>
	<br>
	<img src="8_Create_new_users_results.jpg">
	<br>
	<br>
	<div><h3>9. If we click on the table in the left sidebar we can see the two user rows created and that the user-id field has been automatically filled in by auto-increment.</h3>
	<br>
	<img src="9_Create_new_users_results.jpg">
	<br>
	<br>
	<div><h3>10. We can use the below code snippet to output the contents of a table in the database.</h3>
	<div><h3>10a. $sql = "SELECT * FROM users;"; - THis is the code to run a select query to find all records in the users table. Note how the SQL code is in double quotes within the php code. </h3>
	<div><h3>10b. $results = mysqli_query($conn, $sql); - We create a string called results and make it equal to a function called mysqli_query that is using the previously defined dataabase connection ($conn) and the previusly defined SQL string.</h3>
	<div><h3>10c. $resultCheck = mysqli_num_rows($results); - We create a string called resultCheck that uses the function mysqli_num_rows on the result variable.</h3>
	<div><h3>10d. To prevent a php error message in our webpage if the table is empty we create an IF statement to check if there are more than 0 rows.</h3>
	<div><h3>10e. and use a while loop with variable $row that uses function mysqli_fetch_assoc of the previously defined string of $result.</h3>
	<div><h3>10f. Finally we echo out the results of the string $row as an array. We specify the column 'user_uid'. We could specify any column of the table.</h3>
	<br>
	<img src="10_output_of_Database_in_webpage.jpg">
	<br>
	<br>
	<div><h3>11. We can also modify the SQL code within the php code to select specific data from the users table.</h3>
	<br>
	<img src="11_modified_php_code.jpg">
	<br>
	<br>
</body>

</html>


