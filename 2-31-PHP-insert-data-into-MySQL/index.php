<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP insert data into MySQL</title>
<link rel="Stylesheet" type="text/css" href="style.css">
</head>

<body>

	<div><h1>PHP insert data into MySQL</h1></div>

	<div><h3>26. Clicking on the database php_lessons in the left tab we see that we have two tables called users and posts.</h3>
	<div><h3>27. To add a record (row) to a table we are again going to use SQL. Select SQL Tab.</h3>
	<br>
	<img src="1_Database_and_Tables.jpg">
	<br>
	<br>
	<div><h3>28. By clicking on the table in the left side bar. </h3>
	<div><h3>29. We can see the structure. We have four columns: post_id, subject, content and date. </h3>
	<br>
	<img src="2-Table_structure.jpg">
	<br>
	<br>
	<div><h3>30. the SQL code is: insert into posts (posts being the name of the table).</h3>
	<div><h3>31. Then we specify the fields in brackets seperated by comas. (subjects, content, date) Note that the first field post_id is not specified as we set this to auto-incrment so it will be given a number automatically.</h3>
	<div><h3>32. Values are the values that we want in the fields in brackets and seperated by comas. Note that the date field is in format yy-mm-dd hh:mm:ss. Finally we end the SQL statment with a semi-colon. TO run the SQL script we select go at the botom right.</h3>
	<br>
	<img src="3_SQL_code.jpg">
	<br>
	<br>
	<div><h3>33. Now if we click on the table.</h3>
	<div><h3>34. We see that the post_id field has been auto-incremented to a value of 1.</h3>
	<div><h3>35. The subject field is filled in.</h3>
	<div><h3>36. The content field is filled in.</h3>
	<div><h3>37. And the date field is filled in.</h3>
	<br>
	<img src="4_Table_contents.jpg">
	<br>
	<br>
</body>

</html>


