<?php

  $sql = "SELECT id, artist, title FROM songs";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
          echo "<tr><td>". $row["artist"] ."</td><td>". $row["title"] ."</td></tr>";

      }
      echo "</table>";
  } else {
      echo "0 results";
  }
  $conn->close();
?>
