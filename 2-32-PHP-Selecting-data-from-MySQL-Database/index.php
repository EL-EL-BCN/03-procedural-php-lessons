<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>1-29 PHP Selecting data from MySQL Database</title>
<link rel="Stylesheet" type="text/css" href="style.css">
</head>

<body>

	<div><h1>1-29 PHP Selecting data from MySQL Database</h1></div>

	<div><h3>38. Select Database (php_lessons)....</h3>
	<div><h3>39. And SQL tab for this database.</h3>
	<br>
	<img src="1_Select_Database_and_SQL_tab.jpg">
	<br>
	<br>
	<div><h3>40. Using a SELECT query.....</h3>
	<div><h3>41. to select FROM posts table.</h3>
	<div><h3>42. And hiting GO to run the SQL.</h3>
	<br>
	<img src="2_SELECT_subject_FROM_posts.jpg">
	<br>
	<br>
	<div><h3>43. This select query has found 1 record.</h3>
	<div><h3>44. And the contents is shown below.</h3>
	<br>
	<img src="3_Select_query_results.jpg">
	<br>
	<br>
	<div><h3>45. Now, from the php_lessons database </h3>
	<div><h3>46. We can write a new SQL query</h3>
	<div><h3>47. using star to say select ALL. (star means all)</h3>
	<div><h3>48. And when we hit go.</h3>
	<br>
	<img src="4_Select_ALL_query.jpg">
	<br>
	<br>
	<div><h3>49. From the Select All query (*) it has found 1 record</h3>
	<div><h3>50. Notice this time how it includes all four fields because we did not specify what field to select.</h3>
	<br>
	<img src="5_Select_ALL_Query_results.jpg">
	<br>
	<br>
	<div><h3>51. Next example is a select all (*) from posts WHERE post_id='1'</h3>
	<div><h3>52. And again hit go to run the SQL query. </h3>
	<br>
	<img src="5_Select_ALL_WHERE_Query.jpg">
	<br>
	<br>
	<div><h3>53. The results of this SQL query is that it has found 1 record.</h3>
	<div><h3>54. We can see that the post_id field is highlighted.</h3>
	<br>
	<img src="6_Select_ALL_WHERE_Query_results.jpg">
	<br>
	<br>
	<div><h3>55. now we can add an AND statment to the query to match on two fields.</h3>
	<div><h3>56. And again hit go to run the SQL query.</h3>
	<br>
	<img src="7_Select_ALL_WHERE_AND_Query.jpg">
	<br>
	<br>
	<div><h3>57. The results for the query</h3>
	<div><h3>58. Show that it is matching on both fields because they are higlighted.</h3>
	<br>
	<img src="8_Select_ALL_WHERE_AND_Query_results.jpg">
	<br>
	<br>
	<div><h3>59. Using the same and query, I have made a mistake by trying to select from the subject field "This is some content"</h3>
	<br>
	<img src="9_Select_ALL_WHERE_AND_Query2.jpg">
	<br>
	<br>
	<div><h3>60. This time the SQL query returned empty row or Zero result set because we are using an AND statement so both the post_id field and content field have to match.</h3>
	<div><h3>61. Note how the SLQ query outputs a blank table with the post_id and content columns highlighted.</h3>
	<br>
	<img src="10_Select_ALL_WHERE_AND_Query2_results.jpg">
	<br>
	<br>
	<div><h3>62. This time I run the same query but as OR. </h3>
	<br>
	<img src="11_Select_ALL_WHERE_OR_Query.jpg">
	<br>
	<br>
	<div><h3>63. The results are matching 1 record (row).</h3>
	<div><h3>64. Notice that it is only matching on the post_id field becuase I am using an OR statement. on the content field (column) I ma searching for "This is some content".</h3>
	<br>
	<img src="12_Select_ALL_WHERE_OR_Query_results.jpg">
	<br>
	<br>
</body>

</html>


