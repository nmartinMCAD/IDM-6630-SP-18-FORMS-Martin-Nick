<form action="update.php" method="post">

  <input type="text" name="hero_name" value="<?php echo $hero_to_update['hero_name']; ?>">
  <input type="hidden" name="hero_id" value="<?php echo $hero_to_update['id']; ?>">
  <input type="submit" value="Update Hero">

</form>
