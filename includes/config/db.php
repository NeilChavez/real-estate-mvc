<?php

function getConnectionDB()
{

   $connection = new mysqli($_ENV["DB_LOCALHOST"], $_ENV["DB_USERNAME"], $_ENV["DB_PASSWORD"], $_ENV["DB_NAME"]);
   //in localhost
  // $connection = new mysqli("localhost", "root", "", "real_state");

  $connection->set_charset("utf8");

  //check connection
  if ($connection->connect_error) {
    echo "NO CONNECTION";
  } else {
    return $connection;
  }
}