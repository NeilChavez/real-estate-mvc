<?php

function getConnectionDB()
{

  $connection = new mysqli(LOCALHOST, USERNAME, PASSWORD, DB_NAME);

  $connection->set_charset("utf8");

  //check connection
  if ($connection->connect_error) {
    echo "NO CONNECTION";
  } else {
    return $connection;
  }
}