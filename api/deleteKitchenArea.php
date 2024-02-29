<?php

include ("include.php");

$id = $_GET['id'];

$deleteHall = "DELETE FROM `kitchenarea` WHERE `id` = $id";
mysqli_query($connection, $deleteHall);

mysqli_close($connection);

Header("Location: ../admin/pages/kitchenArea.php");
