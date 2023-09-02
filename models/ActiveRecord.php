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
  public $image;

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

  public function update()
  {

    $attributes = $this->getAttributes();

    $values = [];

    foreach ($attributes as $key => $value) {
      $values[] = "$key='$value'";
    }

    $values = join(", ", $values);

    $query = "UPDATE " . static::$table . " SET " . $values . " WHERE id=$this->id";


    $result = self::$db->query($query);

    if ($result) {
      $code = CODE_UPDATED_SUCCESS;
      $direction = ROUTE_ADMIN . "?code_message=" . $code;
      header("Location: " . $direction);
    } else {
      echo "NOT UPDATED IN DB";
    }
  }

  public function delete()
  {

    $query = "DELETE FROM " . static::$table . " WHERE id=$this->id";

    $result = self::$db->query($query);

    if ($result) {
      //delete image in server
      $this->deleteImg();

      //redirect the user
      $code = CODE_DELETED_SUCCESS;
      $direction = ROUTE_ADMIN . "?code_message=" . $code;
      header("Location: " . $direction);
    } else {
      echo "NOT DELETED IN DB :( ";
    }
  }

  public static function getAll()
  {

    $query = "SELECT * FROM " . static::$table;

    $results = self::consultSQL($query);

    return $results;
  }

  public static function findById($id)
  {
    $query = "SELECT * FROM " . static::$table . " WHERE id=$id";

    $result = self::consultSQL($query);

    return array_shift($result);
  }


  public function sincronize($args)
  {

    foreach ($args as $key => $value) {

      if (property_exists($this, $key) && !is_null($value)) {

        $this->$key = $value;
      }
    }
  }

  public function setImage($image)
  {
    //if we have an id we are updating
    if (!is_null($this->id)) {

      //delete image from server
      $this->deleteImg();
    }

    //and in all the cases set the image property to the instance of this class
    $this->image = $image;
  }

  public static function consultSQL($query)
  {

    $values = [];

    $results = self::$db->query($query);

    if ($results) {

      while ($row = $results->fetch_assoc()) {
        $values[] = self::createObject($row);
      }
    }

    return $values;
  }

  public static function createObject($entry)
  {

    $entity = new static;

    //iterate for each column of the single row
    foreach ($entry as $key => $value) {

      //check if the object has a property and set the value if it's true

      if (property_exists($entity, $key) && $value !== null) {
        $entity->$key = $value;
      }
    }

    return $entity;
  }

  public function deleteImg()
  {
    if (is_dir(PATH_IMAGES)) {

      //this is the file position
      $fileImage = PATH_IMAGES . $this->image;

      //check it exists and delete
      file_exists($fileImage) && unlink($fileImage);
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
