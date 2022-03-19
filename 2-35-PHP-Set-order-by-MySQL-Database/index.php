<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP Set order by MySQL Database</title>
<link rel="Stylesheet" type="text/css" href="style.css">
</head>

<body>

	<div><h1>PHP Set order by MySQL Database</h1></div>
	<div><h3>We can set the order of Rows in SQL from smalles to largest by number, fist letter, Date. </h3>
	<div><h3>82. From lesson 1-28 we are fist going to inset some data into the posts table. </h3>
	<br>
	<img src="1_Insert_test_data.jpg">
	<br>
	<br>
	<div><h3>83. The SQL insert query has run correctly. Note that it has automatically asigned Row id of 2 and 3. </h3>
	<br>
	<img src="2_Insert_test_data_results.jpg">
	<br>
	<br>
	<div><h3>84. This is because we have post_id column set to auto increment. </h3>
	<br>
	<img src="3_Insert_test_data_results2.jpg">
	<br>
	<br>
	<div><h3>85. We use a SELECT query to chose all rows then use the ORDER by command. Note that I have used DESC for descending.</h3>
	<br>
	<img src="4_SELECT_posts_ORDER_by.jpg">
	<br>
	<br>
	<div><h3>86. We can see that the query has re-ordered the posts rows in descending order of post_id. </h3>
	<br>
	<img src="4_SELECT_posts_ORDER_by_results.jpg">
	<br>
	<br>
	<div><h3>87. This time we are selecting all data from posts table and ordering subject column by ascending (ASC).</h3>
	<br>
	<img src="5_SELECT_posts_ORDER_by2.jpg">
	<br>
	<br>
	<div><h3>88. The query looks at the contents of the subject rows and orders them acording to lowest value first. In this case they both have the same wording "subject 1" and "subject 2" so it will order on the numbers 1 and 2. Note the little up arrow and 1 in the table column for subject. This means the first order operation is ascending.</h3>
	<br>
	<img src="6_SELECT_posts_ORDER_by2_results.jpg">
	<br>
	<br>
	<div><h3>89. SELECT * FROM posts ORDER BY subject DESC. If we run the same SQL code but change to order to descending. We see in the results output that the subject rows are now sorted descending and there is a small down arrow and the number 1 in the subject column of the table.</h3>
	<br>
	<img src="7_SELECT_posts_ORDER_by3_results.jpg">
	<br>
	
</body>

</html>


