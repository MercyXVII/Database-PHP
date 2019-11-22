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
?>
