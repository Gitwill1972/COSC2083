<?php
// connect to the bookdb database

$pdo = require 'connectDB.php';

$sql = 'UPDATE houses
        SET bedroom = :bedroom,
            bathroom = :bathroom,
            floorspace = :floorspace,
            address = :address,
            city = :city,
            country = :country,
            price = :price
        WHERE house_id = :house_id';

// prepare statement
$stmt = $pdo->prepare($sql);

// bind params
$stmt->bindParam(":house_id", $house_id, PDO::PARAM_INT);
$stmt->bindParam(":bedroom", $bed, PDO::PARAM_INT);
$stmt->bindParam(":bathroom", $bath, PDO::PARAM_INT);
$stmt->bindParam(":floorspace", $space);
$stmt->bindParam(":address", $addr);
$stmt->bindParam(":city", $city);
$stmt->bindParam(":country", $country);
$stmt->bindParam(":price", $price);

$house_id = $_POST['form_id'];
$bed = $_POST['form_bedroom'];
$bath = $_POST['form_bathroom'];
$space = floatval($_POST['form_floorspace']);
$addr = $_POST['form_address'];
$city = strtolower($_POST['form_city']);
$country = strtolower($_POST['form_country']);
$price = floatval($_POST['form_price']);

// execute the UPDATE statment
if ($stmt->execute()) {
	echo 'The house has been updated successfully!';
}
echo '<br>';
$pdo = null;
?>
<input type="button" name="return" value="Return to Homepage" onclick="window.location.href='queryGetAll.php'">
