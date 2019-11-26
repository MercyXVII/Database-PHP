<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
      error_reporting(0);
      require_once("includes/config.php");

      $id = $_GET['id'];

      $sql = "SELECT * FROM songs WHERE id = $id";
      $result = $conn->query($sql);
      $row = $result->fetch_assoc();

      echo "Het geselecteerde nummer is: ".$row['artist']." - ".$row['title'];
    ?>

    <form method="post">
      <label for="artist">Artist:</label>
      <input type="text" name="artist">
      <label for="title">Title:</label>
      <input type="text" name="title">
      <input type="submit" name="submit">
    </form>

    <div id="form">
      <p><a href="index.php">Ga terug naar het overzicht</a></p>
      <p><a href="addnew.php">Insert New Song</a></p>

    <?php
    $artist = $_POST['artist'];
    $title = $_POST['title'];

    $query = "UPDATE songs SET artist='$artist', title='$title' WHERE id='$id'";

    if(isset($_POST['submit'])){
      $result = $conn->query($query);
      header("Location: index.php");
    }

     ?>

  </body>
</html>
