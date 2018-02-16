<?php

  require 'conn.php';

  $query = "SELECT * FROM heroes WHERE id = " . $_REQUEST['hero_id'];

  $hero_to_update = $conn->query($query)->fetch();

  require "forms/update_form.php";

  require "hero_list.php";

?>
