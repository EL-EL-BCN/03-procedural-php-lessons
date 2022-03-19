<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Updating data to MySQL Database</title>
<link rel="Stylesheet" type="text/css" href="style.css">
</head>

<body>

	<div><h1>Updating data to MySQL Database</h1></div>

	<div><h3>65. In the posts table we have four fields (columns) called post_id '1', subject 'This is the subject', content 'This is the content'and date '2020-02-28 17:05:00'. </h3>
	<br>
	<img src="1_post_table_contents.jpg">
	<br>
	<br>
	<div><h3>66. Select the php_lessons database and go to SQL.</h3>
	<div><h3>67. The first line of SQL code is UPDATE posts</h3>
	<div><h3>68. Now we need to use SET to specify the columns and new content to update.</h3>
	<div><h3>69. And then we specify the specific record (row) to update otherwise the SQL will update all posts. I am using the post_id field to specify post number 1.</h3>
	<div><h3>70. As always use the GO button to run the SQL query.</h3>
	<br>
	<img src="2_Update_query_SQL.jpg">
		<br>
	<br>
	<div><h3>71. And the update query runs in SQL - 1 row affected.</h3>
	<br>
	<img src="3_Update_query_SQL_results.jpg">
	<br>
	<br>
	<div><h3>72. In the table we can see that the contents and subject columns have been changed for post_id='1'.</h3>
	<br>
	<img src="4_Update_query_SQL_results_table.jpg">
</body>

</html>


