
<!DOCTYPE>
<html>
  <head>

  </head>
    <body>
      <form action="queryUpdate.php" method="POST">

        <?php
        $house_id = $_GET["form_id"];

        $pdo = require_once 'connectDB.php';
        $sql = 'SELECT * FROM houses
                WHERE house_id = :house_id';

        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':house_id', $house_id, PDO::PARAM_INT);
        $stmt->execute();
        $house = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($house) {
          echo 'Bedroom: <input type="number" name="form_bedroom" value="' . $house['bedroom'] . '"> <br/>';
          echo 'Bathroom<input type="number" name="form_bathroom" value="' . $house['bathroom'] . '"> <br/>';
          echo 'Floorspace: <input type="text" name="form_floorspace" value="' . $house['floorspace'] . '">m<sup>2</sup> <br/>';
          echo 'Address: <input type="text" name="form_address" value="' . $house['address'] . '"> <br/>';
          echo 'City: <input type="text" name="form_city" value="' . $house['city'] . '"> <br/>';
          echo 'Country: <input type="text" name="form_country" value="' . $house['country'] . '"> <br/>';
          echo 'Price: <input type="text" name="form_price" value="' . $house['price'] . '"> <br/>';
          echo '<input type="hidden" name="form_id" value="' . $house['house_id'] . '"> <br/>';
        } else {
        	echo "The house with id $house_id was not found.";
        }

        $pdo = null;
        ?>

          <input type="submit" name="submit" value="Confirm Update">
      </form>

    </body>
</html>
