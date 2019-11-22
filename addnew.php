<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>insert</title>
  </head>
  <body>


<?php
require_once("PHP/connection.php");
  if(isset($_POST['submit'])){
      $sql = "INSERT INTO songs (artist, title)
      VALUES ('".$_POST["Artist"]."','".$_POST["Song"]."')";
    }
  $conn->close();
 ?>

     <form method="post">
        Artist: <input type="text" name="artist"><br>
        Song: <input type="text" name="song">
        <input type="submit" value="Add new song">
    </form>
  </body>
</html>
