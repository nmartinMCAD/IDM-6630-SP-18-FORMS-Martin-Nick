<?php

  require 'conn.php';

  try {

    $query = "UPDATE heroes SET hero_name=:hero_name WHERE id = " . $_REQUEST['hero_id'];

    $statement = $conn->prepare($query);
    $statement->bindParam(':hero_name', $_REQUEST['hero_name']);
    $statement->execute();

    header('Location: index.php');

  } catch (PDOException $e) {

    echo "Hero Failed to Update: " . $e->getMessage();
    $conn = null;
    exit();

  }

?>
