<?php

namespace Model;

class ActiveRecord {


  //data base 
  protected static $db;
  protected static $columnsDB = [];
  protected static $table = "";

  // properties
  public $id;

  //errors 
  protected static $errors = [];

  //set the connection with the DB;
  public static function setDB ($dataBase){

    self::$db = $dataBase;
  }


}

?>