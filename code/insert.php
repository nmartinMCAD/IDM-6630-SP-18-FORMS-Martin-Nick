<?php

  require 'conn.php';

  try {

    $query = "INSERT INTO heroes (hero_name) VALUES ('Cable')";
    $conn->exec($query);

    header('Location: index.php');

  } catch (PDOException $e) {

    echo "Site Failed to Add: " . $e->getMessage();
    $conn = null;
    exit();

  }

?>
