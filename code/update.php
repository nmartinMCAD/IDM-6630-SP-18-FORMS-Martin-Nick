<?php

  require 'nav.php';

  require 'conn.php';

  try {

    $query = "UPDATE heroes SET hero_name = 'Nathan Summers' WHERE hero_name = 'Cable'";
    $conn->exec($query);

  } catch (PDOException $e) {

    echo "Failed to Reveal Hero's Identity: " . $e->getMessage();
    $conn = null;
    exit();

  }

  require 'hero_list.php';

?>
