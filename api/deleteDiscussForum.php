<?php

include ("include.php");

$id=$_POST["id"];

$query = "DELETE from discussforum WHERE Id='$id'";
mysqli_query($connection, $query);

echo "deleted....";

mysqli_close($connection);

?>