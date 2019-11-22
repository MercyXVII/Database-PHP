<?php

$servername = "localhost";
$databasename = "songs";
$username = "root";
$password = "";

//Creating a connection
$conn = new mysqli($servername, $username, $password, $databasename);

//check connection
if($conn->connect_error)
{
  die("Connection failed.");
}
 ?>
