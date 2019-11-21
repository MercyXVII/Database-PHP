<?php

    $artist = $_POST['Artist'];
    $song = $_POST['Song'];

    $sql = "INSERT INTO songs (artist, title) values ('$artist', '$song')";


    if(isset($_POST['submit']))
    {
      if(!mysql_query($conn, $sql)){
        echo "Not inserted.";
      }
      else {
        echo "Inserted.";
        header("Location: index.php");
      }
    }



    $conn->close();
?>
