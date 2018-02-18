<?php

  //file variable that will determine what form to display on page
  $file = basename(__FILE__);

  //file which creates database connect
  require 'db_actions/conn.php';

  $query = "SELECT * FROM sites WHERE id = :site_id";

  $statement = $conn->prepare($query);
  $statement->bindParam(':site_id', $_REQUEST['site_id']);
  $statement->execute();


  $site_to_update = $statement->fetchAll()[0];

  //file which populates page with HTML elements
  require 'elements/html.php';

?>
