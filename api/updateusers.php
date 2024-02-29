<?php
include ('include.php');

$id=$_POST['id'];
$name = $_POST['username'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = "UPDATE users SET name ='$name',age ='$age',gender='$gender',email ='$email',password ='$password' WHERE Id='$id'";
mysqli_query($connection, $query);

echo "password updated..";
header("Location: ../pages/profile.php");
mysqli_close($connection);