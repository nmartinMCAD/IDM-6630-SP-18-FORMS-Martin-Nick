<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>WEEK 05</title>
  </head>
  <body>
    <main>
      <?php

        $host = '172.25.0.2';
        $database = 'week05';
        $user = 'idm6630';
        $pass = 'idm6630';

        try {

          $conn = new PDO("mysql:host=$host;dbname=$database", $user, $pass);
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          echo 'Welcome to the dataPit';

          $conn = null;

        } catch(PDOException $e) {

            echo 'Connection Failed: ' . $e->getMessage();
            exit();

        }



      ?>
    </main>
  </body>
</html>
