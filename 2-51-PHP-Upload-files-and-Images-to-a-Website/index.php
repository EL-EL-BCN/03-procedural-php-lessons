<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>02-51 - PHP - Upload files and Images to a Website</title>
</head>
<body>

<div><h1>02-51 - PHP - Upload files and Images to a Website</h1></div>
<br>
<div><h3>There are two ways to upload to a website. 1 - upload to the root folder of the website or 2- upload to the database.</h3>
<br>
<br>
<form action="includes/upload.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="file">
	<button type="submit" name="submit">UPLOAD</button>
</form>

<br>
<div><h3>1a. We have basic form in HTML code. We set the action to run a script called "upload.php"</h3>
<div><h3>1b. We have to set the method to POST when uploading images or files.</h3>
<div><h3>1c. We need one more parameter called inctype which is needed to pass the file or photo to the PHP file (upload.php). In this case we need to set it equal to "multipart/form-data"</h3>
<div><h3>1d. We Now need add an input setting the type to file. We name it anything, in this case "file"</h3>
<div><h3>1e. Lastly, we add a button type "submit" named "submit" and we set the text of the button to Upload.</h3>
<br>
<img src="1_Upload_file_form.jpg">
<br>
<br>
<div><h3>2. Before building the PHP code we need to specify where the uploaded files will go so we create an Uploads folder in the root directory.</h3>
<br>
<img src="2_Uploads_folder.jpg">
<br>
<br>
<br>
<br>
<div><h3>3. Now we start coding our upload.php file.</h3>
<div><h3>3a. We start with an if statement to check if the submit button has been clicked (isset) using the $_POST superglobal as defined in our form. We tell the $_POST to look at the name of the button.</h3>
<div><h3>3b. We crate a variable called $file and set it equal to a superglobal called $_FILES, telling it to look at the name of the input. $_FILES is a new superglobal that gets all the information from the file that we want to upload.</h3>
<div><h3>3c. Now we need to create a variable called $fileName to get all the information from the file. we set this equal to the superglobal $_FILES and tell it what information to get. In this case 'file' and name' </h3>
<br>
<img src="3_php_code_1.jpg">
<br>
<br>
<div><h3>4. But why do we have two values for the $_FILES superglobal? Well if we print_r the lines of code then select a file and hit upload we get an array in our browser.</h3>
<br>
<img src="4_Files_associative_array.jpg">
<br>
<br>
<div><h3>5. So now we need to create a variable for all the five parameters in the array.</h3>
<br>
<img src="5_Variables_for_FIle_array.jpg">
<br>
<br>
<div><h3>6. Now we want to tell it what type of files are alowed to be uploaded.</h3>
<div><h3>6a. We create a variable called $fileExt and set to equal to the function explode telling it that we want to take apart from the full stop the file name variable.</h3>
<div><h3>6b. Next we create another variable called $fileActualExt and set it equal to another function called string to lower ($strtolower) which changes strings to lowercase. We want to lower what is after the dot of the filename so we use end and put in the variable $fileExt.</h3>
<div><h3>6c. Now we want to define in an array the type of files that we want to permit to be uploaded.</h3>
<br>
<img src="6_Type_of_files_permitted.jpg">
<br>
<br>
<div><h3>7. Next we write another if statment within the main if statement to check if any of the extensions defined in the array 6c are in the variable $fileExt. </h3>
<div><h3>7a. we use the in_array function to check variable $FileActualExtension is $allowed. </h3>
<div><h3>7b. if the file extension is not any of those in the array then we need an else statment to give an echo message. </h3>
<br>
<img src="7_if_statement_check_file_type.jpg">
<br>
<br>
<div><h3>8. Next we want to check that there were any errors when uploading the file to the temporary folder. Again we add another if statement within the previous one.</h3>
<div><h3>8a. We use an if statement to check the $fileError variable defined in step 5. </h3>
<div><h3>8b. We also define the else statment to echo an error message.</h3>
<br>
<img src="8_if_statement_check_file_error.jpg">
<br>
<br>
<div><h3>9. Next we want to check that the file size does not exceed a certain amount. Again we add another if statement within the previous one.</h3>
<div><h3>9a. We use an if statement to check the $fileSize variable defined in step 5. </h3>
<div><h3>9b. We also define the else statment to echo an error message.</h3>
<br>
<img src="9_if_statement_check_file_size.jpg">
<br>
<br>
<div><h3>10. Finally after file type, errors and size have been checked we can write the code that moves the file from the temporary folder to the Uploads folder.</h3>
<div><h3>10a. However if we upload a file called test.jpg for example then another user uploads a diferent file also called test.jpg then the first file would be overwritten. So we want to define a new variable called $fileNewName and set it equal to a function uniqid which assigns a unique id based on date and time down to the milisecond. Inside this function we use single quites to specify filename based on date and time. ,true).".".$fileActualExt; - this adds the file extension to the new filename.</h3>
<div><h3>10b. now we create a new variable called $fileDestination and set to the uploads folder created in step 2.</h3>
<div><h3>10c. Lastly we move the file from the temporary location to the new location using move_uploaded_file function.</h3>
<div><h3>10d. To see that this the file upload is successful we return to the header with an uploadSuccess message in the URL.</h3>
<br>
<img src="10_Upload_file_code.jpg">
<br>
<br>
<div><h3>11. Upload success</h3>
<br>
<img src="11_upload_success.jpg">
<br>
<br>



<br>
<br>
</body>

</html>