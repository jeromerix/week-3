<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "opdr3";

//verbinding maken

$conn = new mysqli($servername, $username, $password, $dbname);

// controleer de verbinding
if($conn->connect_error){
die("Conection Failed: " .$conn->connect_error);
}
$naam =  $_POST["naam"];
$titel = $_POST["titel"];
$commentaar = $_POST["commentaar"];

$sql = "INSERT INTO `gebruikers`(`id`, `naam`, `mail`, `titel`, `commentaar`,`timestamp`)
VALUES (NULL, '$naam', mail, '$titel', '$commentaar', CURRENT_TIMESTAMP)";

 // verbinding maken naar de database

if(!empty($_POST['naam']) && $_POST['titel']&& $_POST['commentaar']){
    $result=mysqli_query($conn, $sql);
	header('Location:/invoegenopdr3.php');
	
	if (!$result) {
        printf("Error: %s\n", mysqli_error($conn));
    } 
                } 
mysqli_close($conn);  
?>
