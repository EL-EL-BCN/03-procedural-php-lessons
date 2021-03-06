<?php
    if (isset($_POST['submit'])) {
    $file = $_FILES['file'];
    
    $fileName = $file['name'];
    $fileType = $file['type'];
    $fileTempName = $file['tmp_name'];
    $fileError = $file['error'];
    $fileSize = $file['size'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array("jpg", "jpeg", "png", "pdf");

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 5000000) {
          $fileNameNew = uniqid('', true).".".$fileActualExt;
          $fileDestination = '../uploads/'.$fileNameNew;
          move_uploaded_file($fileTempName, $fileDestination);
          header("Location: ../index.php");
        }
        else {
          echo "Your file is too big!";
        }
      }
      else {
        echo "There was an error uploading your file, try again!";
      }
    }
    else {
      echo "You cannot upload files of this type!";
    }
  }
?>