<?php

include("include.php");

$Id = $_POST["Id"];
$Name = $_POST["updateConferenceHallName"];
$Address = $_POST["updateAddress"];
$city = $_POST["updateCity"];
$state = $_POST["updateState"];


$query = "UPDATE  conferencehall SET Name='$Name',Address='$Address',state='$state',city='$city' WHERE  Id='$Id' ";
mysqli_query($connection, $query);


if($query==true){

    echo "updated....";
}
else{
    echo "not updated";
}

header("location: ../admin/pages/conferenceHall.php");
mysqli_close($connection);

