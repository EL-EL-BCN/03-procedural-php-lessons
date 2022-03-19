<?php
	include_once 'include/dbh.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP What are prepared statements and how to use them</title>
</head>

<body>
<div><h1>PHP What are prepared statements and how to use them</h1></div>
<?php
	$data = "Admin2";
	// created a template
	$sql = "SELECT * FROM users WHERE user_uid=?;";
	// create a prepared statement
	$stmt = mysqli_stmt_init($conn);
	// prepare the Prepared Statement
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		echo "SQL statement failed";
	} else {
		// bind parameters to the paceholder
		mysqli_stmt_bind_param($stmt, "s", $data);
		// run perameters inside the database
		mysqli_stmt_execute($stmt);
		$result = mysqli_stmt_get_result($stmt);

		while ($row = mysqli_fetch_assoc($result)) {
			echo $row['user_uid'] . "<br>";
		}
	}
?>
<br>
<div><h2>It is important to protect the database from SQL INJECTION. This is when a hacker uses a form data entry to insert malicous code to modify the database in an undesired way or read data that they are not supposed to.</h2>
<br>
<img src="21_mysqli_real_escape_string.jpg">
<br>
<div><h2>In the previous lesson we used mysqli to protect the database but there is a much better way called prepared statements. </h2>
<br>
<img src="22_prepared code_explanation.jpg">
<br>
<br>
<div><h3>22. The idea behind a prepared statment is that when we have some kind of SQL statment we dont know what the data is actually going to be yet so we are going to have placeholders instead of the actual variables so we send the data to the database to be parsed. The nafterward later on we send tha actual data to the database with a different protocol to replace the placeholders. As placeholders are seen as text then they cannot be used to corrupt the database. </h3>
<br>
<br>
<div><h3>23. We start with the code learnt from lesson 1-34. </h3>
<br>
<img src="23_Code_from_lesson_1-34.jpg">
<br>
<br>
<div><h3>24a. We modify this code by changing the user_uid value to a question mark. This question mark is the placeholder.  </h3>
<div><h3>24b. And delete the three lines below. </h3>
<br>
<img src="24_Modify_Code_from_lesson_1-34.jpg">
<br>
<br>
<div><h3>25a. First we create a template for the data to insert instead of the placeholder</h3>
<div><h3>25b. Create a prepared statement with variable $stmt to initialise mysql connection to database (variable $conn).</h3>
<div><h3>25c. Prepare the prepared statement using the template from 25a using another php function called mysqli_stmt_prepare ising an IF function. If this function here does actually suceeed then run the php code in the if statement.</h3>
<div><h3>25d. First we want to check for failure first so echo "SQL statement failed"</h3>
<div><h3>25e. Else, bind the perameters that we want to replace with those of the placeholders. We use mysqli_stmt_bind_param function where the first parameter is the placeholder and the second parameter is a second placeholder. The third parameter is the actual data that we want to swap with the placeholder. </h3>
<div><h3>25f. For this example we will create some real data in the same php code rather than getting it from an input on the webpage. </h3>
<div><h3>25g. Now we can actually execute the statement in the database</h3>
<div><h3>25h. After getting the results from the executed statement we need to get the results from within the statement.</h3>
<div><h3>25i. Now we finish with the while loop to echo the results</h3>
<br>
<img src="25_Modify_Code_from_lesson_1-34_to_make_prepared_statement.jpg">
<br>
<br>
</body>

</html>


