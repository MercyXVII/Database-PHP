<?php
  $servername = "localhost";
  $databasename = "db_level2_opdr1";
  $username = "Martijn";
  $password = "Welkom1234";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $databasename);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT id, artist, title FROM songs";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
          echo "<tr><td>" .$row["id"] . "</td><td>". $row["artist"] ."</td><td>". $row["title"] ."</td></tr>";

      }
      echo "</table>";
  } else {
      echo "0 results";
  }
  $conn->close();
?>
