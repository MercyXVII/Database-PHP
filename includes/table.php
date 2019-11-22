<?php

  $sql = "SELECT artist, title FROM songs";
  $result = $conn->query($sql);

  if ($result->num_rows > 0)
  {
    echo "<table><tr><th>Artist</th><th>Title</th></tr>";
    // outputs van elke row
    while ($row = $result->fetch_assoc())
    {
      echo "<tr><td>".$row["artist"]."</td><td>".$row["title"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }

  $conn->close();

 ?>
