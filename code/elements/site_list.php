<?php

$query = "SELECT * FROM sites ORDER BY id DESC";

foreach ($conn->query($query) as $site) {

  echo "<ul>";
    echo "<li><a href=" . $site['site_url'] . " target='_blank'>" . $site['site_name'] . "</a></li>";
    //echo "<li>" . $site['id'] . "</li>";
    echo "<li>
      <form action='db_actions/delete.php' method='post'>
        <input type='hidden' name='site_id' value='". $site['id'] ."'>
        <label class='delete' for='delete'><i class='fas fa-trash-alt'></i></label>
        <input type='submit' id='delete'>
      </form>
    </li>";
    echo "<li>
      <form action='stage.php' method='post'>
        <input type='hidden' name='site_id' value='". $site['id'] ."'>
        <label class='edit' for='edit'><i class='far fa-edit'></i></label>
        <input type='submit' id='edit'>
      </form>
    </li>";
  echo "</ul>";
}


?>
