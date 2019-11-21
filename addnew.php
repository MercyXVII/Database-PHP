<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>insert</title>
  </head>
  <body>
     <form action="addnew.php" method="post">
        Artist: <input type="text" name="Artist"><br>
        Song: <input type="text" name="Song">
        <input type="submit" value="Add new song">
        <?php include 'PHP/insert.php'; ?>
    </form>
  </body>
</html>
