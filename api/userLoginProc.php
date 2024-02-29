<?php

include "userLogin.php";

?>


<?php

$name = $_POST["name"];
$password = $_POST["password"];

$res = mysqli_query($connection, "SELECT * FROM `users` where name='$name' AND password='$password'");
// $row = mysqli_fetch_assoc($res);

session_start();
$_SESSION['name'] = $name;
$_SESSION['id'] = $row['Id'];
$_SESSION['email'] = $row['email'];
$_SESSION['age'] = $row['age'];
$_SESSION['gender'] = $row['gender'];


header("Content-Type: application/json");
echo json_encode(array("status" => true));

?>