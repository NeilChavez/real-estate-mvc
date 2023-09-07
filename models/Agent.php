<?php

namespace Model;

use Model\ActiveRecord;

class Agent extends ActiveRecord
{

  protected static $columnsDB = ["id", "name_agent", "surname_agent", "phone_number", "imagen"];
  protected static $table = "agents";

  protected static $errors = [];

  public $id;
  public $name_agent;
  public $surname_agent;
  public $phone_number;
  public $image;

  public function __construct($args = [])
  {
    $this->id = $args["id"] ??  null;
    $this->name_agent =  $args["name_agent"] ?? "";
    $this->surname_agent = $args["surname_agent"] ?? "";
    $this->phone_number = $args["phone_number"] ?? "";
    $this->image = $args["image"] ?? "";
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

    if ($this->image === "") {
      self::$errors[] = "You need to insert an image";
    }

    return self::$errors;
  }

}
