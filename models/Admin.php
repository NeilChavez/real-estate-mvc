<?php

namespace Model;

use Model\ActiveRecord;

class Admin extends ActiveRecord
{

  //static properties
  protected static $table = "users";
  protected static $columnsDB = ["id", "email", "password"];

  static $errors = [];

  public $username;
  public $password;

  public function __construct($args = [])
  {
    $this->username = $args["username"] ?? "";
    $this->password = $args["password"] ?? "";
  }

  public function validate()
  {
    if ($this->username === "") {
      self::$errors[] = "You need to insert an username";
    }
    if ($this->password === "") {
      self::$errors[] = "You need to insert a password";
    }

    return static::$errors;
  }

  public function userExists()
  {

    $query = "SELECT * FROM " . self::$table . " WHERE email='$this->username' LIMIT 1";

    $result = self::consultSQL($query);

    if (!$result) {
      self::$errors[] = "User doesn't exists";
    }

    return $result;
  }

  public function checkPassword($hashedPassInDB)
  {
    $passByClient = $this->password;
  
    $auth =  password_verify($passByClient, $hashedPassInDB);

    if (!$auth) {

      self::$errors[] = "La password no es correcta";
    }
    return $auth;
  }

  public function authUser(){
    session_start();
    $_SESSION["user"] = $this->username;
    $_SESSION["login"] = true;
    header("Location: /properties/admin");
  }
}