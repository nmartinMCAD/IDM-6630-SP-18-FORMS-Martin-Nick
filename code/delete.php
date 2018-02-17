<?php

  require 'nav.php';
  require 'conn.php';

  try {

    $query = "DELETE FROM heroes WHERE id = " . $_REQUEST['hero_id'];
    $conn->exec($query);

    echo "hero deleted";

  } catch (PDOException $e) {

    echo "Hero Failed to Delete: " . $e->getMessage();
    $conn = null;
    exit();

  }

?>
