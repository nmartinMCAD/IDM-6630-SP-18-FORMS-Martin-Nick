<?php

  //file variable that will determine what form to display on page
  $file = basename(__FILE__);

  //file which creates database connect
  require 'db_actions/conn.php';

  //file which populates page with HTML elements
  require 'elements/html.php';

?>
