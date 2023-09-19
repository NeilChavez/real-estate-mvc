<?php

namespace Controllers;

use Intervention\Image\ImageManagerStatic as Image;
use Model\Agent;
use MVC\Router;
use Model\Property;

class PropertyController
{

  public static function adminIndex(Router $router)
  {

    $properties = Property::getAll();
    $agents = Agent::getAll();

    $router->render(ROUTE_ADMIN, [
      "properties" => $properties,
      "agents" => $agents
    ]);
  }

  public static function read(Router $router)
  { 
     $properties = Property::getAll();
     $router->render(ROUTE_PROPERTIES, [
       "properties" => $properties
     ]);
  }
  public static function create(Router $router)
  {

    $errors = [];
    $property = new Property();
    $agents = Agent::getAll();

    if ($_SERVER[REQUEST_METHOD] === POST) {

      $args = $_POST["property"];
      $imageFile = $_FILES["property"];
      $property = new Property($args);

      if ($imageFile["name"]["image"] !== "") {
        // user has uploaded an image
        $imageTmpPosition = $imageFile["tmp_name"]["image"];
        $image = Image::make($imageTmpPosition);

        //directory path for images
        $dirImages = $_SERVER[DOCUMENT_ROOT] . "/images/";

        //if the directory doesn't exist, create it
        if (!is_dir($dirImages)) {
          mkdir($dirImages);
        }

        //generate a unique name for image uploaded
        $imageName = md5(uniqid(rand(), true)) . ".jpeg";

        //update image property in "property" Object 
        $property->image = $imageName;

        //sa the image in dir images using Intervention
        $image->save($dirImages . $imageName);
      }

      // validate the inputs to check if there is some data that is missing
      $errors = $property->validate();

      //if the errors array is empty 
      if (empty($errors)) {
        //save the information in DB
        $property->create();
      }
    }

    $router->render(ROUTE_CREATE, [
      "errors" => $errors,
      "agents" => $agents,
      "property" => $property
    ]);
  }

  public static function update(Router $router)
  {
    $id = filter_var($_GET["id"], FILTER_VALIDATE_INT);

    if (!$id) {
      header("Location: /admin");
    }
    $property = Property::findById($id);
    $agents = Agent::getAll();

    $errors = [];
    if ($_SERVER[REQUEST_METHOD] === POST) {

      $args = $_POST["property"];

      // this method takes the data inputs and update the property object, if a property has changed it will be updated in the object self
      $property->sincronize($args);

      $errors = $property->validate();

      if (empty($errors)) {

        if ($_FILES["property"]["tmp_name"]["image"]) {
          // user wants to insert new image and delete the older one

          //give a new name to that image
          $newNameImage = md5(uniqid(rand(), true)) . ".jpeg";

          //make and save the image in images folder
          $image = Image::make($_FILES["property"]["tmp_name"]["image"]);
          $image->save(PATH_IMAGES . $newNameImage);

          //set the name of the image in the object $property to send the new name image to DB
          $property->setImage($newNameImage);
          //actualmente termina con d4410 7.28

        }

        $property->update();
      }
    }

    $router->render(ROUTE_UPDATE, [
      "agents" => $agents,
      "property" => $property,
      "errors" => $errors
    ]);
  }

  public static function delete()
  {
    $id = filter_var($_POST["id"], FILTER_VALIDATE_INT);
    if (!$id) {
      header("Location: /admin");
    }

    $property = Property::findById($id);
    $property->delete();

    echo "delete controller";
  }
}
