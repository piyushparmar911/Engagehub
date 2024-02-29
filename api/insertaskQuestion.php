<?php

include ("include.php");


$title=$_POST['title'];
$description=$_POST['description'];
$category = $_POST['category'];
$userid = $_POST['userid'];

$query = "INSERT INTO  `askquestion`(`title`,`description`,`category`,`userid`) VALUES('$title','$description','$category', 11)";
mysqli_query($connection, $query);
echo "inserted....";
mysqli_close($connection);

?>