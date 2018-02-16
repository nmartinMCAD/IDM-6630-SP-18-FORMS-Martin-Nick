<?php

  require 'conn.php';

  try {

    $query = "INSERT INTO heroes (hero_name) VALUES (:hero_name)";

    $statement = $conn->prepare($query);
    $statement->bindParam(':hero_name', $_REQUEST['hero_name']);
    $statement->execute();

    header('Location: index.php');

  } catch (PDOException $e) {

    echo "Site Failed to Add: " . $e->getMessage();
    $conn = null;
    exit();

  }

?>
