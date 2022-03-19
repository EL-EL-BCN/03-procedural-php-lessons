<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP Deleting data from MySQL Database</title>
<link rel="Stylesheet" type="text/css" href="style.css">
</head>

<body>

	<div><h1>PHP Deleting data from MySQL Database</h1></div>

	<div><h3>73. As before we select the php_lessons databse. </h3>
	<div><h3>74. and go to the SQL tab. </h3>
	<div><h3>75. Using the command DELETE FROM posts (we specify the table to delete from). This command would delete all records (rows) in the posts table. </h3>
	<div><h3>76. So we add another like of SQL code WHERE post_id='1' to specift the exact record (row) we want to delete.</h3>
	<div><h3>77. And hit go to run the SQL delete query </h3>
	<br>
	<img src="1_delete_row_from_table.jpg">
	<br>
	<br>
	<div><h3>78. We see that the delete query has removed one row from the posts table. </h3>
	<br>
	<img src="1_delete_row_from_table_result.jpg">
	<br>
	<br>
	<div><h3>79. When we select the posts table. </h3>
	<div><h3>80. we get empty result set zero columns. </h3>
	<div><h3>81. Meaning that the delete SQL query has removed the 1 record (row) that was previosuly in the table. </h3>
	<br>
	<img src="1_delete_row_from_table_result2.jpg">


</body>

</html>


