<?php

$destination = "images/".$_FILES["myimage"]["name"]; 
echo "$destination";
$filename = $_FILES["myimage"]["tmp_name"];
echo "$filename";
move_uploaded_file($filename, $destination);

//Get the content of the image and then add slashes to it 
//$imagetmp = addslashes(file_get_contents($_FILES['myimage']['tmp_name']));

//Insert the image name and image content in image_table
//$insert_image = "INSERT INTO image_table VALUES ('$imagetmp','$imagename')";

//mysqli_query($insert_image);

?>