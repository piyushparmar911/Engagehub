<?php 

include "include.php";

?>

<?php 

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["message"];

$query = "INSERT INTO `contactus`(`name`,`email`,`number`,`message`) VALUES('$name','$email','$phone','$message')";
mysqli_query($connection, $query);

function function_alert($message) { 
      
    // Display the alert box  
    echo "<script>alert('$message');</script>"; 
} 
  
// Function call 
function_alert("Message Sent"); 
  
mysqli_close($connection);
?>

