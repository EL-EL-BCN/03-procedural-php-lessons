<?php
	include 'header.php';
?>

<section>
	<div class="SomeMainContent">
		<h2>Creating a sperate header document</h2>

		<a><img src="1_Seperate_Header_Doc.jpg"></a>
		<div><h3>The header HTML code is a seperate document that allows us to reuse the same header on multiple pages without having to retype the code each time. Thus when the header is changed in the header document it automatically updates on all pages and reduces the manual labour involved in modifying or redesigning the website.</h3></div>
		<br>
		<br>
		<a><img src="2_PHP_Code_To_Include_document.jpg"></a>
		<div><h3>Now at the top of the index.php file we add code to include the seperate header.php file into our webpage.</h3></div>
		<br>
		<br>
		<a><img src="3_Browser_output.jpg"></a>
		<div><h3>And we see that the contents of the header.php file are now included atthe top of the webpage.</h3></div>
		<br>
		<br>
		<a><img src="3_User_defined_PHP_in_seperate_file.jpg"></a>
		<br>
		<a><img src="4_User_functions_Folder.jpg"></a>
		<div><h3>We create a seperate folder called functions where we have a php file (called User-Functions.php) with all the user defined functions we want to use on the webpage.</h3></div>
		<br>
		<a><img src="5_Include_User-Functions_in_HeaderPHP.jpg"></a>
		<div><h3>Now we include our user-functions.php file into the header.php file at the top. This way when the webpage loads it will load first all the user-functions with the header.</h3></div>
		<br>
		<br>

		<?php

 			$x = 100;
 			NewCalc($x);

 			echo "<br>";

 			$a = 10;
 			NewCalc($a);

		?>
		<br>
		<br>
		<a><img src="6_Using_User_Functions.jpg"></a>
		<div><h3>Now we can use the PHP User-functions that are defined in a seperate document.</h3></div>
		<br>
		<br>



	</div>
</section>

</body>

</html>