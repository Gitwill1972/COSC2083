<!DOCTYPE>
<html>
  <head>

  </head>
    <body>

      <table>
        <tr>
          <th>House ID</th>
          <th>Bedroom</th>
          <th>Bathroom</th>
          <th>Floorspace</th>
          <th>Address</th>
          <th>City</th>
          <th>Country</th>
          <th>Price</th>
        </tr>
        <?php
        $pdo = require 'connectDB.php';
        $sql = 'SELECT * FROM houses';
        $stmt = $pdo->query($sql);
        // get all publishers
        $houses = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($houses) {

          foreach ($houses as $house) {

            echo '<tr><td>' . $house['house_id'] . '</td>', '<td>' . $house['bedroom'] . '</td>', '<td>' . $house['bathroom'] . '</td>',
            '<td>' . $house['floorspace'] . ' m<sup>2</sup></td>',
            '<td>' . $house['address'] . '</td>', '<td>' . $house['city'] . '</td>',
             '<td>' . $house['country'] . '</td>', '<td>' . $house['price'] . ' $</td>';
            echo '<td>
            <form action="queryDelete.php" method="POST" >
              <input type="hidden" name="form_id" value="' . $house['house_id'] . '">
              <input type="submit" name="submit" value="Delete">
            </form>
            <form action="updateForm.php" method="GET" >
              <input type="hidden" name="form_id" value="' . $house['house_id'] . '">
              <input type="submit" name="submit" value="Edit Content">
            </form>
            <td>';
            echo '</tr>';
          }
        }
        ?>
      </table>
      <form action="insertForm.php" method="GET" >
        <input type="submit" name="submit" value="Insert New">
      </form>

    </body>
</html>
