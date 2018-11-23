<?php
// verbinding naar de database

$host ='localhost';
$user ='root';
$pass = '';
$dbname = 'opdr3';

$conn = new mysqli($host, $user, $pass, $dbname);
if($conn->connect_errno){
	echo"Connection failed".$conn->connect_error;
	exit();
}
// data ordenen op id
$query = "SELECT * FROM gebruikers ORDER BY id DESC";
$result = $conn->query($query);
// data ophalen
if($result-> num_rows > 0){
	while($row = $result-> fetch_object()){
		echo "" . $row->naam . "<br>";
		echo "" . $row->titel . "<br>";
		echo "" . $row->commentaar . "<br>";
		echo "" . $row->timestamp . "<br>";
		echo "<a href='edit.php?id=" . $row->id . "'>Edit</a>&nbsp";
		echo "<a href='delete.php?id=" . $row->id . "'>Delete</a></td>";
		echo "<hr>";
}
} else{
	echo"NO DATA FOUND!";
	echo"<hr>";
}

?>