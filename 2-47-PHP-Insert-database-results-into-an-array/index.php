<?php
	include_once 'include/dbh.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP Insert database results into an array</title>
</head>

<body>

<div><h1>PHP Insert database results into an array</h1></div>

<br>
<div><h3>01. We have a new table in the  php_lessons database called data with 9 rows of data. See lesson 1-27 and 1-28 for how to create this table.</h3>
<br>
<img src="01_Test_table.jpg">
<br>
<br>
<div><h3>02. We have a basic HTML index.php file with database connection code to run the database connection file called dbh.inc.php.</h3>
<br>
<img src="02_dbh_code.jpg">
<br>
<br>
<div><h3>03. What we would like to do is take the data from the table "data" and put it inside an array that spits out either one row of data or the data in sequential rows.</h3>
<div><h3>From previous lessons we have code that contains a select query to retrieve all data from the database then a mysqli query.</h3>
<div><h3>we have defined a variable called $datas that is a blank array.</h3>
<div><h3>We finish the SQL code with a basic if statement that says that if we have more than zero results spit it out. THis is a basic while loop.</h3>
<div><h3>The last line of code inserts the output of the query and inserts it into the array.</h3>
<br>
<img src="03_php_code.jpg">
<br>
<br>
<div><h3>04. So how to we output it to our website? - print_r.</h3>
<br>
<img src="04_print_r.jpg">
<br>
<br>

<?php
	
	$sql = "SELECT data_text FROM data";
	$result = mysqli_query($conn, $sql);
	$datas = array();
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$datas [] = $row;	
		}
		
	}
	print_r ($datas);
?>
<br>
<br>
<div><h3>05. However the formatting is terrible! This is because each row of data is it´s own array within the created array.</h3>
<br>
<img src="05_print_r_browser.jpg">
<br>
<br>
<div><h3>05. However the formatting is terrible! This is because each row of data is it´s own array within the created array.</h3>
<br>
<img src="05_print_r_browser.jpg">
<br>
<br>
<div><h3>06. From the code you can see that we are getting an array from the database then inserting it into another array. This is what is called a multi-dimensional array.</h3>
<br>
<img src="06_array_within_array.jpg">
<br>
<br>
<div><h3>07. We can use a foreach function to echo out the created array as a new string called data. in the example below we output row 0.</h3>
<br>
<img src="07_for_each_example_1.jpg">
<br>
<br>

<?php
	
	$sql = "SELECT data_text FROM data";
	$result = mysqli_query($conn, $sql);
	$datas = array();
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$datas [] = $row;	
		}
		
	}
	foreach ($datas[0] as $data) {
		echo $data;
	}

?>
<br>
<br>
<div><h3>08. We can use a foreach function to output the created array as a new string called data but specify the column name. Note that the ." " is to add a space between words.</h3>
<br>
<img src="08_for_each_example_2.jpg">
<br>
<br>

<?php
	
	$sql = "SELECT data_text FROM data";
	$result = mysqli_query($conn, $sql);
	$datas = array();
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$datas [] = $row;	
		}
		
	}
	
	foreach ($datas as $data) {
		echo $data['data_text']." ";

	}
?>
<br>
<br>
<div><h3>09. but why not echo out directly the array as per the code below? </h3>
<br>
<img src="09_direct_echo.jpg">
<br>
<br>

<?php
	
	$sql = "SELECT data_text FROM data";
	$result = mysqli_query($conn, $sql);
	$datas = array();
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo $row['data_text']." ";	
		}
		
	}
	
?>
<br>
<br>
<div><h3>10. Becaause if we use object orientated programming then one of the benefits is that we write the code differently in a sepperate file so the user does not see the database connection.</h3>
<br>
</body>

</html>