<?php

  $pdo = require 'connectDB.php';
  $sql = 'CREATE TABLE IF NOT EXISTS houses (
            house_id INT AUTO_INCREMENT,
            bedroom TINYINT NOT NULL,
            bathroom TINYINT NOT NULL,
            floorspace FLOAT NOT NULL,
            address VARCHAR(255) NOT NULL,
            city VARCHAR(100) NOT NULL,
            country VARCHAR (100) NOT NUll,
            price FLOAT NOT NULL,
            PRIMARY KEY (house_id)
          )';

  $pdo->exec($sql);
  $house_list = [
            ["bedroom"=>2, "bathroom"=>2, "floorspace"=> 70.5,
            "address"=>"34/12/3 Lamborghini street, district 12",
            "city"=>"london", "country"=>"United Kingdom",
            "price"=>1000],
            ["bedroom"=>4, "bathroom"=>4, "floorspace"=> 500.1,
            "address"=>"372th Houdini street, district 4",
            "city"=>"new york", "country"=>"united states",
            "price"=>49999.9999],
            ["bedroom"=>1, "bathroom"=>1, "floorspace"=> 49.1,
            "address"=>"13-23 Dimistrescu street, district 1",
            "city"=>"bakersville", "country"=>"Romania",
            "price"=>500],
            ["bedroom"=>7, "bathroom"=>6, "floorspace"=> 800.972,
            "address"=>"34th SNooty avenue, district silver spoon",
            "city"=>"beijing", "country"=>"china",
            "price"=>650000.50]
  ];
  $sql = 'INSERT INTO houses(bedroom, bathroom, floorspace, address, city, country, price)
                      VALUES(:bedroom, :bathroom, :floorspace, :address, :city, :country, :price)';
  $stmt = $pdo->prepare($sql);
  $stmt->bindParam(":bedroom", $bed, PDO::PARAM_INT);
  $stmt->bindParam(":bathroom", $bath, PDO::PARAM_INT);
  $stmt->bindParam(":floorspace", $space);
  $stmt->bindParam(":address", $addr);
  $stmt->bindParam(":city", $city);
  $stmt->bindParam(":country", $country);
  $stmt->bindParam(":price", $price);

  for ($i = 0; $i < count($house_list); $i++){
    echo 'bedroom: ', $house_list[$i]['bedroom'], '<br> bathroom: ',
    $bath = $house_list[$i]['bathroom'], '<br> space: ',
    $space = $house_list[$i]['floorspace'], '<br> address: ',
    $addr = $house_list[$i]['address'], '<br> city: ',
    $city = $house_list[$i]['city'], '<br> country: ',
    $country = $house_list[$i]['country'], '<br> price: ',
    $price = $house_list[$i]['price'], '<br><br>';

    $bed = $house_list[$i]['bedroom'];
    $bath = $house_list[$i]['bathroom'];
    $space = $house_list[$i]['floorspace'];
    $addr = $house_list[$i]['address'];
    $city = $house_list[$i]['city'];
    $country = $house_list[$i]['country'];
    $price = $house_list[$i]['price'];
    $stmt->execute();
  }
  $pdo = null;

 ?>
