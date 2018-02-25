<?php
require 'header.php';

$context = $_POST['context'];
$objectifs = $_POST['objectifs'];
$presentation = $_POST['presentation'];
$output = $_POST['output'];
$id = $_GET['id'];

$target_dir = "../img/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

$tab = [':context' => $context,':objectifs' => $objectifs,
    ':presentation' => $presentation,
    ':output' => $output,
    ':id'=> $id,':preview'=>$target_dir.$_FILES["fileToUpload"]["name"]
];

$mdb->request('UPDATE `refs` SET `context`= :context, `objectifs` = :objectifs, `presentation` = :presentation, `output` = :output, `preview`=:preview  WHERE id = :id', $tab);




header("Location:reference.php?page=CLIENT LIST&num=".$_GET['num']);