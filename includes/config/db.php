<?php

function getConnectionDB()
{

  $connection = new mysqli(LOCALHOST, USERNAME, PASSWORD, DB_NAME);

  //check connection
  if ($connection->connect_error) {
    echo "NO CONNECTION";
  } else {
    return $connection;
  }
}
