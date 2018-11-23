<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ='opdr3';

// verbinding maken
$conn = new mysqli($servername, $username, $password, $dbname);

//verbinding controleren
if($conn-> connect_error){
die("Connection failed: " .$conn->connect_error);
mysqli_close($conn);
}
?>



