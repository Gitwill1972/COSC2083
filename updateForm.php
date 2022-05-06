
<!DOCTYPE>
<html>
  <head>

  </head>
    <body>
      <form action="queryUpdate.php" method="POST">

        <?php
        $rating_id = $_GET["form_id"];

        $pdo = require_once 'connectDB.php';
        $sql = 'SELECT * FROM ratings
                WHERE rating_id = :rating_id';

        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':rating_id', $rating_id, PDO::PARAM_INT);
        $stmt->execute();
        $rating = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($rating) {
          echo 'Bedroom: <input type="number" name="form_bedroom" value="' . $rating['prof_name'] . '"> <br/>';
          echo 'Bathroom<input type="number" name="form_bathroom" value="' . $rating['course_id'] . '"> <br/>';
          echo 'Floorspace: <input type="text" name="form_floorspace" value="' . $rating['rating'] . '">m<sup>2</sup> <br/>';
          echo 'Address: <input type="text" name="form_address" value="' . $rating['difficulty'] . '"> <br/>';
          echo 'City: <input type="radio" name="form_take_again" value="YES" <?php> > <br/>';
          echo 'Country: <input type="text" name="form_country" value="' . $rating['credit'] . '"> <br/>';
          echo 'Price: <input type="text" name="form_price" value="' . $rating['text_book_use'] . '"> <br/>';
          echo 'Price: <input type="text" name="form_price" value="' . $rating['attendance'] . '"> <br/>';
          echo 'Price: <input type="text" name="form_price" value="' . $rating['grade'] . '"> <br/>';
          echo '<input type="hidden" name="form_id" value="' . $rating['rating_id'] . '"> <br/>';
        } else {
        	echo "The rating with id $rating_id was not found.";
        }

        $pdo = null;
        ?>

          <input type="submit" name="submit" value="Confirm Update">
      </form>

    </body>
</html>
