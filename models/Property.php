<?php

namespace Model;

class Property extends ActiveRecord

{
  protected static $table = "properties";
  protected static $columnsDB = ["id", "title", "address_name", "address_number", "description", "image", "area", "rooms", "date_creation", "agents_id"];

  protected static $errors = [];

  public $id;
  public $title;
  public $address_name;
  public $address_number;
  public $description;
  public $image;
  public $area;
  public $rooms;
  public $date_creation;
  public $agents_id;

  public function __construct($args = [])
  {
    $this->id = $args["id"] ?? null;
    $this->title = $args["title"] ?? "";
    $this->address_name = $args["address_name"] ?? "";
    $this->address_number = $args["address_number"] ?? "";
    $this->description = $args["description"] ?? "";
    $this->image = $args["image"] ?? null;
    $this->area = $args["area"] ?? "";
    $this->rooms = $args["rooms"] ?? "";
    $this->date_creation = date('y/m/d') ?? "";
    $this->agents_id = $args["agents_id"] ?? 2;
  }

  public function validate()
  {
    if ($this->title === "") {
      self::$errors[] = "You need to insert a valid title";
    }
    if ($this->address_name === "") {
      self::$errors[] = "You need to insert a valid address name";
    }
    if ($this->address_number === "") {
      self::$errors[] = "You need to insert a valid address number";
    }
    if ($this->description === "") {
      self::$errors[] = "You need to insert a description";
    }
    if ($this->area === "") {
      self::$errors[] = "You need to insert an area";
    }
    if ($this->rooms === "") {
      self::$errors[] = "You need to insert a valid number rooms";
    }
    if ($this->image === null) {
      self::$errors[] = "You need to insert an image";
    }

    //validate if there an image

    return self::$errors;
    // we take care then of images and agent_id 
  }

  public static function getAll()
  {

    $query = "SELECT * FROM " . self::$table;

    $result = self::consultSQL($query);

    return $result;
  }

  public static function findById($id)
  {

    $query = "SELECT * FROM " . self::$table . " WHERE id = $id LIMIT 1";

    $property = self::consultSQL($query);

    return array_shift($property);
  }

  public function create()
  {

    $attributes = $this->getAttributes();
    $tables = join(", ", array_keys($attributes));
    $values = join("','", array_values($attributes));

    $query = "INSERT INTO " . self::$table . " (" . $tables . ") VALUES ('" . $values . "')";

    $result = self::$db->query($query);

    if ($result) {
      echo "SUCCESSFULLY INSERTED IN DB";
      header('Location: /admin');
    } else {
      echo "NOT INSERTED IN DB";
    }
  }

  public function update(){
    echo "envia el update" . var_dump($this);
    exit;
  }

  public function getAttributes()
  {

    $attributes = [];

    foreach (self::$columnsDB as $columnName) {
      if ($columnName === "id") continue;
      $attributes[$columnName] = $this->$columnName;
    }

    return $attributes;
  }

  public static function consultSQL($query)
  {
    $result = self::$db->query($query);

    $properties = [];
    while ($row = $result->fetch_assoc()) {

      $properties[] = self::createObject($row);
    }

    return $properties;
  }

  public static function createObject($row)
  {
    $property = new self();
    foreach ($row as $key => $value) {
      if (property_exists($property, $key)) {
        $property->$key = $value;
      }
    }

    return $property;
  }
}
