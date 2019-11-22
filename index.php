<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="CSS/master.css">
    <title>Database 2</title>
  </head>
  <body>
    <?php require_once("PHP/connection.php");?>
    <table>
      <tr>
        <th> Artist: </th>
        <th> Title: </th>
      </tr>
     <?php include('PHP/database.php'); ?>
    <a id="button" href="addnew.php">Add a song</a>
  </body>
</html>
