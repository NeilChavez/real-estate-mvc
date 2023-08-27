<?php

namespace Model;

use Model\ActiveRecord;

class Agent extends ActiveRecord
{

  protected static $columnsDB = ["id", "name_agent", "surname_agent", "phone_number", "imagen_agent"];
  protected static $table = "agents";

  protected static $errors = [];

  public $id;
  public $name_agent;
  public $surname_agent;
  public $phone_number;
  public $image_agent;

  public function __construct($args = [])
  {
    $this->id = $args["id"] ??  null;
    $this->name_agent =  $args["name_agent"] ?? "";
    $this->surname_agent = $args["surname_agent"] ?? "";
    $this->phone_number = $args["phone_number"] ?? "";
    $this->image_agent = $args["image_agent"] ?? "";
  }

  public function create()
  {
    $attributes = $this->getAttributes();

    $columns = join(", ", array_keys($attributes));
    $values = join("', '", array_values($attributes));


    $query = "INSERT INTO agents (" .
      $columns . ") VALUES ('" .
      $values . "');";

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

    $query = "UPDATE " . self::$table . " SET " . $values . " WHERE id=$this->id;";

    $result = self::$db->query($query);

    if ($result) {
      $code = CODE_UPDATED_SUCCESS;
      $direction = ROUTE_ADMIN . "?code_message=" . $code;
      header("Location: " . $direction);
    } else {
      echo "NOT UPDATED IN DB";
    }
  }

  public function getAttributes()
  {
    $attributes = [];

    foreach ($this as $key => $value) {

      if ($key === "id") continue;


      $attributes[$key] = $this->sanitizeAttribute($value);
    }

    return $attributes;
  }

  public function sanitizeAttribute($attribute)
  {

    $escapedValue = self::$db->escape_string($attribute);

    return $escapedValue;
  }

  public function validate()
  {
    if ($this->name_agent === "") {
      self::$errors[] = "You need to insert a name";
    }
    if ($this->surname_agent === "") {
      self::$errors[] = "You need to insert a surname";
    }
    if ($this->phone_number === "") {
      self::$errors[] = "You need to insert a phone number";
    }

    //validate if the telephon number inserted is a valid telephon number
    $phoneRegex = "/^\\+?[1-9][0-9]{7,14}$/";
    $isValidPhoneNumber = preg_match($phoneRegex, $this->phone_number);
    if ($isValidPhoneNumber === 0) {
      self::$errors[] = "You need to insert a 'valid' phone number";
    }

    if ($this->image_agent === "") {
      self::$errors[] = "You need to insert an image";
    }

    return self::$errors;
  }

  public function setImage($image)
  {
    //if the object instance of this class has an id, it means we are updating
    if (!is_null($this->id)) {
      //delete image from the server

      //this is the file position
      $pathFile = PATH_IMAGES . $this->image_agent;

       //check it exists and delete
       file_exists($pathFile) &&  unlink($pathFile);
    }

    //set the image property
    $this->image_agent = $image;
  }

  public static function getAll()
  {

    $query = "SELECT * FROM agents";

    $agents = self::consultSQL($query);

    return $agents;
  }

  public static function findById($id)
  {
    $query = "SELECT * FROM " . self::$table . " WHERE id=$id";

    $result = self::consultSQL($query);

    return array_shift($result);
  }

  public static function consultSQL($query)
  {

    $result =  self::$db->query($query);

    $agents = [];

    if ($result) {
      while ($row = $result->fetch_assoc()) {

        $agents[] = self::createObject($row);
      }
    }

    return $agents;
  }

  public static function createObject($singleRow = [])
  {

    $singleAgent = new self;

    //iterate for each column of the single row
    foreach ($singleRow as $key => $value) {

      //check if the object has a property and set the value if it's true
      if (property_exists($singleAgent, $key)) {

        $singleAgent->$key = $value;
      }
    }
    return $singleAgent;
  }

  public function sincronize($args = [])
  {

    foreach ($args as $key => $value) {
      if (property_exists($this, $key) && !is_null($value)) {
        $this->$key = $value;
      }
    }
  }
}
