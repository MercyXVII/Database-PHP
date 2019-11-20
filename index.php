<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $servername = "localhost";
      $databasename = "db_level2_opdr1";
      $username = "Martijn";
      $password = "Welkom1234";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $databasename);

      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error); }
          echo "Connected successfully";



    ?>
  </body>
</html>
