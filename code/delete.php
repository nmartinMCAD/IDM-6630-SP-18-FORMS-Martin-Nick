<?php

  require 'conn.php';

  try {

    $query = "DELETE FROM heroes WHERE id = " . $_REQUEST['hero_id'];
    $conn->exec($query);

    header('Location: index.php');

  } catch (PDOException $e) {

    echo "Hero Failed to Delete: " . $e->getMessage();
    $conn = null;
    exit();

  }

?>
