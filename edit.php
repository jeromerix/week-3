<?php

// connect naar de database
include('databaseconn.php');

// krijgt het id binnen
$id = $_GET['id'];

// als er op de update button wordt geklikt
if (isset($_POST['update'])){
		$titel = $_POST["titel"];
		$commentaar = $_POST["commentaar"];
$sql = "UPDATE gebruikers SET titel='$titel', commentaar='$commentaar'WHERE id=$id";
		echo"Post updated!";
$res = mysqli_query($conn, $sql);
}
?>
<!DOCTYPE html>
<html>
<body>
		<?php
		
		// selecteerd op id uit de database
		$sql_get = "SELECT * FROM gebruikers WHERE id=$id";
		$result = mysqli_query($conn, $sql_get);
		
				
				// opvragen rows uit de database
				if(mysqli_num_rows($result) > 0){
					while($row = mysqli_fetch_assoc($result)){
					$titel = $row['titel'];
					$commentaar = $row['commentaar'];
			}
			}	
			// form om de titel en commentaar aan te passen
		echo"<form action='edit.php?id=$id'method='post'>";
		echo"titel:<br> <input type='text' name='titel' value='$titel'><br>";
		echo"commentaar:<br> <textarea name='commentaar' placeholder='$commentaar'></textarea>";
			//update button
		echo"<br><input name='update' type='submit' value='update'>";
		
		?>


<a href="invoegenopdr3.php">terug</a>
</form>
</body>
</html>