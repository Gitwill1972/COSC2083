<?php
// connect to the bookdb database

$pdo = require 'connectDB.php';

$sql = 'UPDATE ratings
        SET prof_name = :prof_name,
            course_id = :course_id,
            rating = :rating,
            difficulty = :difficulty,
            take_again = :take_again,
            credit = :credit,
            text_book_use = :text_book_use
            attendance = :attendance
            grade = :grade
        WHERE rating_id = :rating_id';

// prepare statement
$stmt = $pdo->prepare($sql);

// bind params
$stmt->bindParam(":rating_id", $rating_id, PDO::PARAM_INT);
$stmt->bindParam(":prof_name", $bed, PDO::PARAM_INT);
$stmt->bindParam(":course_id", $bath, PDO::PARAM_INT);
$stmt->bindParam(":rating", $space);
$stmt->bindParam(":difficulty", $addr);
$stmt->bindParam(":take_again", $take_again);
$stmt->bindParam(":credit", $credit);
$stmt->bindParam(":text_book_use", $text_book_use);
$stmt->bindParam(":attendance", $attendance);
$stmt->bindParam(":grade", $grade);

$rating_id = $_POST['form_id'];
$bed = $_POST['form_prof_name'];
$bath = $_POST['form_course_id'];
$space = $_POST['form_rating'];
$addr = $_POST['form_difficulty'];
$take_again = $_POST['form_take_again'];
$credit = $_POST['form_credit'];
$text_book_use = $_POST['form_text_book_use'];
$attendance = $_POST['form_attendance'];
$grade = $_POST['form_grade'];

// execute the UPDATE statment
if ($stmt->execute()) {
	echo 'The rating has been updated successfully!';
}
echo '<br>';
$pdo = null;
?>
<input type="button" name="return" value="Return to Homepage" onclick="window.location.href='queryGetAll.php'">
