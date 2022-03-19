<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP Create a MySQL Table</title>
<link rel="Stylesheet" type="text/css" href="style.css">
</head>

<body>

	<div><h1>PHP Create a MySQL Table</h1></div>
	<div><h3>10. A tabe is used to store information about one type of data. An example of a table in PHP would be one that stores information about users. Another example would be a table about blog posts on a forum that contains date of comment, user commenting, text etc..</h3>
	<div><h3>11. We select the database that we want to create a table in.</h3></div>
	<div><h3>12. Select SQL Tab.</h3>
	<div><h3>13. We now see that it says "Run SQL query/queries on database php_lessons:</h3>
	<div><h3>14. and in this white box we can write SQL code. SQL code is another coding language that is specific to databases. We will be using it within our PHP code.</h3>
	<br>
	<img src="1_Create_Table_using_SQL.jpg">
	<br>
	<br>
	<div><h3>15. Use the command create table then the name of the table. In this case users.</h3>
	<div><h3>16. The first field is a unique id value that can mever be duplicated (user_id). It is an integer of 10 digits long. It is Not Null, i.e. I cannot have blank values. Lastly it auto increments so the first everytime a new user is added it will auto generate a user_id number 1 greater than the last user added.</h3>
	<div><h3>17. The last four fields ar varchar. This means that they can be letters and nambers or varied characters.</h3>
	<div><h3>18. Once all the fields for the table are defined select "GO"</h3>
	<br>
	<img src="2_SQL_code.jpg">
	<br>
	<br>
	<div><h3>19. My SQL returned an empty result set. This means that the table has been created but there is no records as yet.</h3>
	<div><h3>20. We can see the table in the left sidebar</h3>
	<br>
	<img src="3_SQL_table_creation.jpg">
	<br>
	<br>
	<div><h3>21. Create second table in database php_lessons called posts.</h3>
	<div><h3>22. As per the users table I define the fields (columns).</h3>
	<div><h3>23. And selet go to run the SQL query to create the table.</h3>
	<br>
	<img src="4_posts_table_sql_creation.jpg">
	<br>
	<br>
	<div><h3>24. The SQL returned a posative result saying there is no data (rows) in the newly created table.</h3>
	<div><h3>25. And we see in the left sidebar that we have two tables called users and posts.</h3>
	<br>
	<img src="4_posts_table_sql_creation.jpg">
	<br>
	<br>
	<div><h1>Next lesson we will look at how to add data to a table</h1></div>
</body>

</html>


