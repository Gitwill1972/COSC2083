# COSC2083
COSC2083 - Introduction to IT - 2021 -Group 16
Technology used: <br>
  -Appache 2.4<br>
  -PHP 8.0<br>
  -Mysql 8.1.5<br>
    -PDO extension<br>

Purpose of website:<br>
  -To collect student's opinion regarding the lecturers that the courses they took. Store and display these opinion for new student to decide which professor's style of lecturing is more suitable for them.<br>
  
Files:<br>
  -config.php: Contain information require to connect website to database. Name of host, name of database, username and password with privilege to access database<br>
  -connectDB.php: Command to connect website to database<br>
  -insertForm.php: html form that collect answers from users<br>
  -queryCreateRating.php: Create mysql table and fill it with predertermined rows. <br>
  -queryDelete.php: Delete a row from database<br>
  -queryGet.php: Retrieve rows from database according to filter<br>
  -queryGetAll.php: retrieve all rows from database. Have filter function. Have buttons to delete or edit specific rows<br>
  -queryInsert.php: Insert data from form into database<br>
  -queryUpdate.php: Allow user to make changes to existing entires<br>
  -updateForm.php: html form for users to update existing entries<br>
