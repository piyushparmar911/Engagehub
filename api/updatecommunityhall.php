<?php

include("include.php");

$Id = $_POST["Id"];
$Name = $_POST["updateHallName"];
$Address = $_POST["updateAddress"];
$city = $_POST["updateCity"];
$state = $_POST["updateState"];


$query = "UPDATE  communityhall SET Name='$Name',Address='$Address',state='$state',city='$city' WHERE  Id='$Id' ";
mysqli_query($connection, $query);


if($query==true){

    echo "updated....";
}
else{
    echo "not updated";
}

header("location: ../admin/pages/communityHall.php");
mysqli_close($connection);

