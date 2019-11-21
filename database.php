<?php
  $servername = "localhost";
  $databasename = "db_level2_opdr1";
  $username = "Martijn";
  $password = "Welkom1234";

  // Create connection
  $db = new mysqli($servername, $username, $password, $databasename);

  if($db->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
  }

  $sql = <<<SQL
    SELECT *
    FROM `users`
    WHERE `live` = 1
    SQL;

  if(!$result = $db->query($sql)){
      die('There was an error running the query [' . $db->error . ']');
  }

  while($row = $result->fetch_assoc()){
    echo $row['username'] . '<br />';
  }



?>
