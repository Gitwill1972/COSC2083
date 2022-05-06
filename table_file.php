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
            attedance FLOAT NOT NULL,
            grade VARCHAR (2) NOT NULL,
            PRIMARY KEY (rating_id)
          )';