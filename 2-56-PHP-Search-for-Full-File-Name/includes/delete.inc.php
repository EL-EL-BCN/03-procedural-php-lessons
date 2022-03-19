<?php

$path ="../uploads/cat*";
$FileInfo = glob($path);
$Fileactualname = $FileInfo[0];

if (!unlink($Fileactualname)) {
	echo "File Deleteion unsucessful!";
} else {
	header("Location: ../index.php?Delete_Success");
}

?>