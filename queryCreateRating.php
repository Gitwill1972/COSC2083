<?php

  $pdo = require 'connectDB.php';
  $sql = 'CREATE TABLE IF NOT EXISTS ratings (
    rating_id INT AUTO_INCREMENT,
    prof_name VARCHAR(255) NOT NULL,
    course_id VARCHAR(255) NOT NULL,
    rating TINYINT NOT NULL,
    difficulty TINYINT NOT NULL,
    take_again VARCHAR(3) NOT NULL,
    credit VARCHAR(3) NOT NULL,
    text_book_use VARCHAR (3) NOT NUll,
    attendance VARCHAR (3) NOT NULL,
    grade VARCHAR (2) NOT NULL,
    PRIMARY KEY (rating_id)
  )';

  $pdo->exec($sql);
  $rating_list = [
            ["prof_name"=>"Muhamed",
             "course_id"=>"COSC2159",
             "rating"=> 4,
             "difficulty"=> 3,
             "take_again"=>"YES", 
             "credit"=>"YES",
             "text_book_use"=>"NO",
             "attendance"=> "YES",
             "grade"=> "HD"],

  ];
  $sql = 'INSERT INTO ratings (prof_name, course_id, rating, difficulty, take_again, credit, text_book_use, attendance, grade)
                      VALUES(:prof_name, :course_id, :rating, :difficulty, :take_again, :credit, :text_book_use, :attendance, :grade)';
  $stmt = $pdo->prepare($sql);
  $stmt->bindParam(":prof_name", $prof_name);
  $stmt->bindParam(":course_id", $course_id);
  $stmt->bindParam(":rating", $rating);
  $stmt->bindParam(":difficulty", $difficulty);
  $stmt->bindParam(":take_again", $take_again);
  $stmt->bindParam(":credit", $credit);
  $stmt->bindParam(":text_book_use", $text_book_use);
  $stmt->bindParam(":attendance", $attendance);
  $stmt->bindParam(":grade", $grade);

  for ($i = 0; $i < count($rating_list); $i++){
    echo 'Professor: ', $rating_list[$i]['prof_name'], '<br> Course ID: ',
    $course_id = $rating_list[$i]['course_id'], '<br> Rating out of 5: ',
    $rating = $rating_list[$i]['rating'], '<br> Difficulty out of 5: ',
    $difficulty = $rating_list[$i]['difficulty'], '<br> Would you study with this professor again?: ',
    $take_again = $rating_list[$i]['take_again'], '<br> Was this course taken for credit?: ',
    $credit = $rating_list[$i]['credit'], '<br> Textbook: ',
    $text_book_use = $rating_list[$i]['text_book_use'], '<br> Attendance Required:',
    $attendance = $rating_list[$i]['attendance'], '<br> Grade achieved: ',
    $grade = $rating_list[$i]['grade'], '<br><br>';

    $prof_name = $rating_list[$i]['prof_name'];
    $course_id = $rating_list[$i]['course_id'];
    $rating = $rating_list[$i]['rating'];
    $difficulty = $rating_list[$i]['difficulty'];
    $take_again = $rating_list[$i]['take_again'];
    $credit = $rating_list[$i]['credit'];
    $text_book_use = $rating_list[$i]['text_book_use'];
    $attendance = $rating_list[$i]['attendance'];
    $grade = $rating_list[$i]['grade'];
    $stmt->execute();
  }

  $pdo = null;
 ?>
