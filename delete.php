<?php

// connect naar de database
include('databaseconn.php');
// selecteer op id en delete
$id = $_GET['id'];
if (isset($_GET['id'])){
$sql="DELETE FROM `gebruikers` WHERE id= $id";
$result = mysqli_query($conn, $sql);
header('Location:/invoegenopdr3.php');
}
?>