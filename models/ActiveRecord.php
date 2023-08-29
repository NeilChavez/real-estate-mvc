<?php

namespace Model;

class ActiveRecord
{


  //data base 
  protected static $db;
  protected static $columnsDB = [];
  protected static $table = "";

  // properties
  public $id;

  //errors 
  protected static $errors = [];

  //set the connection with the DB;
  public static function setDB($dataBase)
  {

    self::$db = $dataBase;
  }

  public function create()
  {

    $attributes = $this->getAttributes();

    $columns = join(", ", array_keys($attributes));
    $values = join("', '", array_values($attributes));

    $query = "INSERT INTO " . static::$table . " (" . $columns . ") VALUES ('$values')";

    $result = self::$db->query($query);

    if ($result) {
      $code = CODE_CREATED_SUCCESS;
      $direction = ROUTE_ADMIN . "?code_message=" . $code;
      header("Location: " . $direction);
    } else {
      echo "NOT INSERTED IN DB";
    }
  }


  public function getAttributes()
  {

    $attributes = [];

    foreach ($this as  $key => $value) {

      if ($key ===  "id") continue;

      $attributes[$key] = $this->sanitizeAttribute($value);
    }

    return $attributes;
  }

  public function sanitizeAttribute($attribute)
  {

    $sanitized = self::$db->escape_string($attribute);

    return $sanitized;
  }
}
