<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP Simple Calculator</title>
</head>

<body>
<div><h1>PHP Simple Calculator</h1></div>


<form>
	<input type="text" name="num1" place holder="number 1">
		<select name="operator">
		<option>None</option>
		<option>Add</option>
		<option>Subtract</option>
		<option>Divide</option>
		<option>Multiply</option>
	</select>
	<input type="text" name="num2" place holder="number 2">
	<br>
	<button type="submit" name="submit" value="submit">calculate</button>
</form>

<p> The answer is:</p>
<?php
	if (isset($_GET['submit'])) {
		$result1 =$_GET['num1'];
		$result2 =$_GET['num2'];
		$operator =$_GET['operator'];
		switch ($operator) {
			case "None":
				echo "ERROR - You need to select a method";
			break;
			case "Add":
				echo $result1 + $result2;
			break;
			case "Subtract":
				echo $result1 - $result2;
			break;
			case "Divide":
				echo $result1 / $result2;
			break;
			case "Multiply":
				echo $result1 * $result2;
			break;

		}
	}
?>
<br>
<br>
<div>................................................................................................................</div>

<div><h3>1. The form has two inputs for number 1 and number 2</h3></div>
<img src="1_form_inputs.jpg">
<br>
<div><h3>2. Add to the form a drop menu to select the operator and a submit button</h3></div>
<img src="2_form_select menu_submit.jpg">
<br>
<div><h3>3. When we input number values into the two boxes and select the operator, as soon as we hit calculate, the URL changes.</h3></div>
<img src="3_URL.jpg">
<br>
<div><h3>4. This is how we pass on onformation to PHP because we normally use the URL to do this sort of thing. Now we need to write the PHP code.</h3></div>
<img src="3_PHP_code.jpg">
<br>
<div><h2>4a. if (isset($_GET['submit'])) { - This line of the code checks to see if the submit button has been pressed using the isset criteria</h2></div>

<div><h2>4b. $result1 =$_GET['num1']; - Here we set variables($) and define them using the $_GET to fetch them from the URL. We have three veriables to fetch, Number 1, Number 2 and the operator.</h2></div>

<div><h2>4c. We use a switch statement to define the maths for each of the four posibilities selected from the operator drop down. Note for None we define an output error message. For Add, Subtract, Divide and Multiply we have a mathamatical equation.</h2></div>

</body>
</html>