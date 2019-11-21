<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="CSS/master.css">
    <title>Database 2</title>
  </head>
  <body>
    <table>
      <tr>
        <th> ID:</th>
        <th> Artist: </th>
        <th> Title: </th>
      </tr>
      <br>
      <a id="button" href="addnew.php">Add a song</a>
      <?php include 'PHP/database.php'; ?>
  </body>
</html>
