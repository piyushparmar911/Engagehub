<?php

include ('include.php');

$Id = $_POST["id"];
$query = "DELETE from users WHERE id='$Id'";
mysqli_query($connection, $query);


echo "deleted...";

header("../index.php");
session_destroy();
mysqli_close($connection);


?>
