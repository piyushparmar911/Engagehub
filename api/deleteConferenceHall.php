<?php

include ("include.php");

$id = $_GET['id'];

$deleteHall = "DELETE FROM `conferencehall` WHERE `id` = $id";
mysqli_query($connection, $deleteHall);

mysqli_close($connection);

Header("Location: ../admin/pages/conferenceHall.php");
