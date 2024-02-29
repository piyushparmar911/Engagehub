<?php

include ("include.php");

$id = $_GET['id'];

$deleteHall = "DELETE FROM `communityhall` WHERE `id` = $id";
mysqli_query($connection, $deleteHall);

mysqli_close($connection);

Header("Location: ../admin/pages/communityHall.php");
