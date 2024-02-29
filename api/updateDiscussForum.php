<?php

include("include.php");

$id=$_POST["id"];
$title=$_POST["title"];
$description=$_POST['description'];
$userid=$_POST["userid"];


$query = "UPDATE `discussforum` set Title='$title',Description='$description',Userid='$userid' where Id='$id' ";
mysqli_query($connection, $query);

echo "data updated...";

mysqli_close($connection);
  
?>