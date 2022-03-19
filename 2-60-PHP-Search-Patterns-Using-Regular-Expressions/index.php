<!DOCTYPE html>
<html>
	<head>
		<meta charset=utf-8>
		<title>2-60 PHP Search Patterns Using Regular Expressions</title>
	</head>
	<body>
	<h1>2-59 PHP Search Patterns Using Regular Expressions</h1>

	<?php

	echo"<b>Example 1</b><br><br>";
	// here is a string
	$string_ex_a = "my name is Elliott, Elliott is my name";
	// Whatever we put inside double quotes and double forward slashes is a regular string.
	echo preg_match("/Elliott/", $string_ex_a);
	// The above example returns 1 in the browser because Elliott is inside the string.

	echo"<br><br><b>Example 2</b><br><br>";
	// here is a string
	$string_ex_b = "my name is Elliott, Elliott is my name";
	// Now we search for punctuation
	echo preg_match("/./", $string_ex_b);
	// The above example returns 1 in the browser because there is a coma inside the string.

	echo"<br><br><b>Example 3</b><br><br>";
	// here is a string
	$string_ex_c = "my name is Elliott, Elliott is my name";
	// Now we search for a´s or e´s using a pipe symbol.
	echo preg_match("/e|a/", $string_ex_c);
	// The above example returns 1 in the browser because there is a´s and e´s inside the string.

	echo"<br><br><b>Example 4</b><br><br>";
	// here is a string
	$string_ex_d = "my name is Elliott, Elliott is my name";
	// Now we search for a´s or z´s using a pipe symbol.
	echo preg_match("/e|z/", $string_ex_d);
	// The above example returns 1 in the browser because there are a´s There are no Z´s but this is an or statement so it will still return 1.

	echo"<br><br><b>Example 5</b><br><br>";
	// here is a string
	$string_ex_e = "my name is Elliott, Elliott is my name";
	// Now we search for a´s or z´s using a pipe symbol.
	echo preg_match("/x|z/", $string_ex_e);
	// We neither have x or z so it will return 0 for false .

	echo"<br><br><b>Example 6</b><br><br>";
	// here is a string
	$string_ex_f = "my name is Elliott, Elliott is my name";
	// Now we search for multiple characters within the square brackets. In this case either a, b or c.
	echo preg_match("/[abc]/", $string_ex_f);
	// The string has a´so will return 1 for true.

	echo"<br><br><b>Example 7</b><br><br>";
	// here is a string
	$string_ex_g = "my name is Elliott, Elliott is my name";
	// Search for any charecter that is not a, b or c by using the caret symbol ^.
	echo preg_match("/[^abc]/", $string_ex_g);
	// The string has other leters than a b or c so will return 1 for true.

	echo"<br><br><b>Example 8</b><br><br>";
	// here is a string
	$string_ex_h = "my name is Elliott, Elliott is my name";
	// We can search for a range of characters.
	echo preg_match("/[a-z]/", $string_ex_h);
	// The Perform REGular match expression will look for lower case characters from a to z so will return a true result.

echo"<br><br><b>Example 9</b><br><br>";
	// here is a string
	$string_ex_i = "my name is Elliott, Elliott is my name";
	// We can search for uppercase and lower case ranges of characters.
	echo preg_match("/[a-zA-Z]/", $string_ex_i);
	// We get a posative output because we have lower case and also uppercase.

echo"<br><br><b>Example 10</b><br><br>";
	// here is a string
	$string_ex_j = "my name is Elliott, Elliott is my name";
	// We can search for digits.
	echo preg_match("/[0-9]/", $string_ex_j);
	// We get a negative output because we do not have any digits.

echo"<br><br><b>Example 11</b><br><br>";
	// here is a string
	$string_ex_k = "my name is Elliott, Elliott is my name";
	// We can use quantifiers. We can search for at zero or more capital Es.  
	echo preg_match("/E*/", $string_ex_k);
	// We get a posative output because we do have Es.

	echo"<br><br><b>Example 11</b><br><br>";
	// here is a string
	$string_ex_l = "my name is Elliott, Elliott is my name";
	// We can use quantifiers. We can search for multiple capital Es.  
	preg_match_all("/E*/", $string_ex_l, $array1);
	print_r($array1);
	// We get an array output which says at position 11 and position 20 we have Es.

	echo"<br><br><b>Example 12</b><br><br>";
	// here is a string
	$string_ex_m = "my name is Elliott, Elliott is my name";
	// We can use quantifiers. We can search for multiple capital Es, But this time we add a dot after the E to tell it to only start outputing in the array when it finds the first letter E.  
	preg_match_all("/E.*/", $string_ex_m, $array2);
	print_r($array2);
	// Array ([0] => Array ([0] => Elliott, Elliott is my name ))

	echo"<br><br><b>Example 13</b><br><br>";
	// here is a string
	$string_ex_n = "my name is Elliott, Elliott is my name";
	// Now we tell the Perform REGular match all expression to start at the first E and end at a lowercase m.
	preg_match_all("/E.*m/", $string_ex_n, $array3);
	print_r($array3);
	// Array ([0] => Array ([0] => Elliott, Elliott is my nam ))

	echo"<br><br><b>Example 14</b><br><br>";
	// here is a string
	$string_ex_o = "my name is Elliott, Elliott is my name";
	// Now use a plus symbol inside the quantifiers we are searching for at least one of the characters. This will give us two indexes on the output array.
	preg_match_all("/E+/", $string_ex_o, $array4);
	print_r($array4);
	// Array ([0] => Array ([0] => E [1] => E ))

	echo"<br><br><b>Example 15</b><br><br>";
	// here is a string
	$string_ex_p = "my name is Elliott, Elliott is my name";
	// Now use a plus symbol inside the quantifiers we are searching for at least one of the characters. by adding a dot before the plus we are saying that we continue als long as we have a character after the first E.
	preg_match_all("/E.+/", $string_ex_p, $array5);
	print_r($array5);
	// Array ([0] => Array ([0] => Elliott, Elliott is my name ))


	echo"<br><br><b>Example 16</b><br><br>";
	// here is a string
	$string_ex_Q = "my 1name2 is Elliott, 1Elliott2 is my name";
	// Now we ha e set the PREG to match all starting at 1 and ending at 2.
	preg_match_all("/1.*2/", $string_ex_Q, $array6);
	print_r($array6);
	// Array ([0] => Array ([0] => 1name2 is Elliott, 1Elliott2 ))

	echo"<br><br><b>Example 17</b><br><br>";
	// here is a string
	$string_ex_Q = "my 1name2 is Elliott, 1Elliott2 is my name";
	// Now we ha e set the PREG to match all starting at 1 and ending at 2.
	preg_match_all("/1.*2/", $string_ex_Q, $array6);
	print_r($array6);
	// Array ([0] => Array ([0] => 1name2 is Elliott, 1Elliott2 ))
	// Note that the * quantifier is greedy because it takes everything from the first 1 to the last 2.

	echo"<br><br><b>Example 18</b><br><br>";
	// here is a string
	$string_ex_r = "my 1name2 is Elliott, 1Elliott2 is my name";
	// Now we ha e set the PREG to match all starting at 1 and ending at 2.
	preg_match_all("/1.*?2/", $string_ex_r, $array7);
	print_r($array7);
	// Array ([0] => Array ([0] => 1name2 [1] => 1Elliott2))
	// Note that the * quantifier is greedy because it takes everything from the first 1 to the last 2. If we add a question mark after the star then it is a lazy quantifer and will only take what is beween 1 and 2.

	echo"<br><br><b>Example 19</b><br><br>";
	// here is a string
	$string_ex_s = "my name is Elliott, Elliott is my name";
	// we can look for the number of letter Es in a row using the curly brackets. In this case we are looking for only 1 E.
	echo preg_match_all("/E{1}/", $string_ex_s, $array8);
	// We get a posative result

	echo"<br><br><b>Example 20</b><br><br>";
	// here is a string
	$string_ex_t = "my name is Elliott, Elliott is my name";
	// we can look for two Es (EE) in a row.
	echo preg_match_all("/E{2}/", $string_ex_t, $array9);
	// We get a negative result

	echo"<br><br><b>Example 21</b><br><br>";
	// here is a string
	$string_ex_u = "my name is Elliott, Elliott is my name";
	// we can look for one E (E) or two Es (EE) in a row.
	echo preg_match_all("/E{1,2}/", $string_ex_u, $array9);
	// We get a posative result

	echo"<br><br><b>Example 22</b><br><br>";
	// here is a string
	$string_ex_v = "my name is Elliott, Elliott is my name";
	// Character classes is a search term we can use to find specific types of character in our string. for example "/\s means we are searching for white space charachters"
	echo preg_match_all("/\s/", $string_ex_v, $array10);
	// We get a 7 because there are 7 spaces in the string.

	echo"<br><br><b>Example 23</b><br><br>";
	// here is a string
	$string_ex_w = "my name is Elliott, Elliott is my name";
	// Character classes is a search term we can use to find specific types of character in our string. for example "/\S means we are searching for non white space charachters"
	echo preg_match_all("/\S/", $string_ex_w, $array11);
	// We get a 31 because there are 31 non white characters (or letters and punctuation) in the string.


echo"<br><br><b>Example 24</b><br><br>";
	// here is a string
	$string_ex_x = "my name is Elliott, Elliott is my name";
	// Character classes is a search term we can use to find specific types of character in our string. for example "/\d means we are searching for digits"
	echo preg_match_all("/\d/", $string_ex_x, $array12);
	// We get a 0 because there no digits in the string.

echo"<br><br><b>Example 25</b><br><br>";
	// here is a string
	$string_ex_y = "my name is Elliott, Elliott is my name";
	// Character classes is a search term we can use to find specific types of character in our string. for example "/\D means we are searching for non digits"
	echo preg_match_all("/\D/", $string_ex_y, $array13);
	// We get a 38 because there are 38 non digits in the string.

echo"<br><br><b>Example 26</b><br><br>";
	// here is a string
	$string_ex_z = "my name is Elliott, Elliott is my name";
	// Character classes is a search term we can use to find specific types of character in our string. for example "/\w means we are searching for characters that are in words"
	echo preg_match_all("/\w/", $string_ex_z, $array14);
	// We get a 30 because there are 30 charachters that are in words. THis does not include the coma punctuation. 

echo"<br><br><b>Example 27</b><br><br>";
	// here is a string
	$string_ex_aa = "my name is Elliott, Elliott is my name";
	// Character classes is a search term we can use to find specific types of character in our string. for example "/\w means we are searching for characters that are in words"
	echo preg_match_all("/\W/", $string_ex_aa, $array15);
	// We get a 8 because there are 7 spaces and one coma punctuation.

echo"<br><br><b>Example 28</b><br><br>";
	// here is a string
	$string_ex_ab = "my name is Elliott, Elliott is my name";
	// Character classes is a search term we can use to find specific types of character in our string. for example "/\w means we are searching for characters that are in words"
	echo preg_match_all("/\W/", $string_ex_ab, $array16);
	// We get a 8 because there are 7 spaces and one coma punctuation.




	?>

	</body>
</html>
