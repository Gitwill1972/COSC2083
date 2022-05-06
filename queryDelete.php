<?php
$house_id = $_POST["form_id"];
//$publisher_id = 1;
// connect to the database and select the publisher
$pdo = require 'connectDB.php';

// construct the delete statement
$sql = 'DELETE FROM houses
        WHERE house_id = :house_id';

// prepare the statement for execution
$statement = $pdo->prepare($sql);
$statement->bindParam(':house_id', $house_id, PDO::PARAM_INT);

// execute the statement
if ($statement->execute()) {
	echo 'house id ' . $house_id . ' was deleted successfully.';
}
echo '<br>';
$pdo = null;
?>
<input type="button" name="return" value="Return to Homepage" onclick="window.location.href='queryGetAll.php'">
