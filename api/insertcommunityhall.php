<?php

include ("include.php");

$name = $_POST["hallName"];
$address = $_POST["address"];
$state = $_POST["state"];
$city = $_POST["city"];
$pincode = $_POST["pincode"];
$contactPersonName = $_POST["contactPerson"];
$contactPersonNo = $_POST["contactNumber"];

$query = "INSERT INTO `communityhall` (`name`, `address`, `state`, `city`, `pincode`, `contactPersonName`, `contactPersonNo`) 
        VALUES('$name','$address','$state','$city','$pincode','$contactPersonName','$contactPersonNo')";

        echo "inserted...";

mysqli_query($connection, $query);

mysqli_close($connection);
header("location: ../admin/pages/communityHall.php");


