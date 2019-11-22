<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>insert data</title>
    <link rel="stylesheet" href="./CSS/master.css">
  </head>
  <body id="addnew">
    <h1>Add a song</h1>
    <?php require_once("includes/insert.php") ?>

    <form method="post">
      <label for="artist">Artist:</label>
      <input type="text" name="artist">
      <label for="title">Title:</label>
      <input type="text" name="title"><br>
      <input type="submit" name="submit" value="Add song">
    </form>
  </body>
</html>
