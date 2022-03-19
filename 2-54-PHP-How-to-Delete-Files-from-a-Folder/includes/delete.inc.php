<?php

$path ="../uploads/test_file.jpg";

if (!unlink($path)) {
	echo "File Deleteion unsucessful!";
} else {
	echo "File Deleteion sucessful!";
}
	header("Location: ../index.php?Delete_Success");

?>