<?php
	$uploadDir = "uploadFotos/";
	
	$file_name = $uploadDir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($file_name,PATHINFO_EXTENSION);
	if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
		move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $file_name);
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

}
?>