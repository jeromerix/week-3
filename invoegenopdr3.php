<!DOCTYPE html>
<html>
<body>
<?php include 'opvragenuitdb.php';?>
<!------------- form om te posten ----------->
<form action="inser.php" method="post">
naam:<br> <input type="text" name="naam" value="naam"><br>
titel:<br> <input type="text" name="titel" value="titel"><br>
commentaar:<br> <textarea placeholder="commentaar" name="commentaar" value="commentaar"></textarea>
<br><input type="submit" value="Submit">
</form>
</body>
</html>