<?php
  session_start();
  include_once 'includes/dbh.inc.php';

  $user_id = $_SESSION['user_id'];

    if (isset($_POST['submit'])) {
    $file = $_FILES['file'];
    
    $fileName = $file['name'];
    $fileType = $file['type'];
    $fileTempName = $file['tmp_name'];
    $fileError = $file['error'];
    $fileSize = $file['size'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array("jpg");

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 5000000) {
          $fileNameNew = "profile".$user_id.".".$fileActualExt;
          $fileDestination = '../profile_images/'.$fileNameNew;
          move_uploaded_file($fileTempName, $fileDestination);
          $sql = "UPDATE profileimg SET profileimg_status=2 WHERE profileimg_user_id='$user_id';";
          mysqli_query($conn, $sql);
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
      echo "Only jpg files permitted!";
    }
  }
?>