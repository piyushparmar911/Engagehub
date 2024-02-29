<?php 

    include "adminLogin.php";

?>


<?php

$name = $_POST["name"];
$password = $_POST["password"];

$res = mysqli_query($connection, "SELECT * FROM `admin` where Username='$name' AND Password='$password'");
$row = mysqli_fetch_assoc($res);

session_start();
$_SESSION['name'] = $name;
    

    header("Content-Type: application/json");
    echo json_encode(array("status" => true));

?>