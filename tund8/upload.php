<?php 

$target_dir = "../../pics/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "Tegu on pildiga - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "Tegu ei ole pildiga.";
        $uploadOk = 0;
    }
}

	if (file_exists($target_file)) {
    echo "Selline pilt on juba olemas.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 2048) {
    echo "Pilt on liiga suur.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Ainult JPG, JPEG, PNG & GIF failid on lubatud.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sinu faili ei laetud üles.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "Fail ". basename( $_FILES["fileToUpload"]["name"]). " laeti üles.";
    } else {
        echo "Faili laadimisel ilmus tõrge.";
    }
}
?>