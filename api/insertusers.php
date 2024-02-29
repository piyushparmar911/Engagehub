<?php

include ('include.php');
require ('../includes/config.php');

if (isset($_FILES['file'])) {

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$location = $_POST["country"];


$time = time();
$fileName = "$time-" . $_FILES['file']['name'];
$tmpFileName = $_FILES['file']['tmp_name'];

    $fileUploaded = move_uploaded_file($tmpFileName, pathOf("uploads/profilePhoto/$fileName"));

        if (!$fileUploaded) {
            echo json_encode(["status" => false, "message" => "Error uploading file."]);
            exit();
        }

        $query = "INSERT INTO `users`(`name`,`email`,`password`,`age`,`gender`,`location`,`profilePhoto`) VALUES('$name','$email','$password','$age','$gender','$location','$fileName')";
        mysqli_query($connection, $query);
        echo "User Registered Successfully !!!";
}
else{
    echo json_encode(["status" => false, "message" => "No file uploaded."]);
}

mysqli_close($connection);
