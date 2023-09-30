<?php

namespace Model;

class Property extends ActiveRecord

{
  protected static $table = "properties";
  protected static $columnsDB = ["id", "title", "address_name", "address_number", "description", "image", "area", "rooms", "date_creation", "agents_id", "price"];

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
  public $price;

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
    $this->price = $args["price"] ?? "";
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
    if ($this->price === "") {
      self::$errors[] = "You need to insert a valid price";
    }

    //validate if there an image

    return self::$errors;
    // we take care then of images and agent_id 
  }

}
