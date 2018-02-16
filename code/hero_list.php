<?php

$query = "SELECT * FROM heroes ORDER BY id DESC";

foreach ($conn->query($query) as $hero) {

  echo "<ul>";
    echo "<li>" . $hero['hero_name'] . "</li>";
    //echo "<li>" . $hero['id'] . "</li>";
    echo "<li>
      <form action='stage.php' method='post'>
        <input type='hidden' name='hero_id' value='". $hero['id'] . "'>
        <input type='submit' value='Edit'>
      </form>
    </li>";
    echo "<li>
      <form action='delete.php' method='post'>
        <input type='hidden' name='hero_id' value='". $hero['id'] . "'>
        <input type='submit' value='Delete'>
      </form>
    </li>";
  echo "</ul>";
}


?>
