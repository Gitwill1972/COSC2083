# COSC2083
COSC2083 - Introduction to IT - 2021 -Group 16
Technology used;
  -Appache 2.4
  -PHP 8.0
  -Mysql 8.1.5
    -PDO extension

Purpose of website:
  -To collect student's opinion regarding the lecturers that the courses they took. Store and display these opinion for new student to decide which professor's style of lecturing is more suitable for them.
  
Files:
  -config.php: Contain information require to connect website to database. Name of host, name of database, username and password with privilege to access database
  -connectDB.php: Command to connect website to database
  -insertForm.php: html form that collect answers from users
  -queryCreateRating.php: Create mysql table and fill it with predertermined rows. 
  -queryDelete.php: Delete a row from database
  -queryGet.php: Retrieve rows from database according to filter
  -queryGetAll.php: retrieve all rows from database. Have filter function. Have buttons to delete or edit specific rows
  -queryInsert.php: Insert data from form into database
  -queryUpdate.php: Allow user to make changes to existing entires
  -updateForm.php: html form for users to update existing entries
