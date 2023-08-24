<?php

namespace Controllers;

use Intervention\Image\ImageManagerStatic as Image;

use MVC\Router;
use Model\Property;

class PropertyController
{

  public static function adminIndex(Router $router)
  {

    $properties = Property::getAll();

    $router->render(ROUTE_ADMIN, [
      "properties" => $properties
    ]);
  }

  public static function create(Router $router)
  {

    $errors = [];
    $property = new Property();
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

    $errors = [];
    if ($_SERVER[REQUEST_METHOD] === POST) {

      $args = $_POST["property"];

      // this method takes the data inputs and update the property object
      // if a property has changed it will be updated in the object self
      $property->sincronize($args);

      $errors = $property->validate();

      if($_FILES["property"]["tmp_name"]["image"]){
        // user wants to insert new image and delete the older one

        
      }


      if (empty($errors)) {

        $property->update();
      }
    }

    $router->render(ROUTE_UPDATE, [
      "property" => $property,
      "errors" => $errors
    ]);
  }

  public static function delete(){
    $id = filter_var($_POST["id"], FILTER_VALIDATE_INT);
    if (!$id) {
      header("Location: /admin");
    }

    $property = Property::findById($id);
    $property->delete();

    echo "delete controller";
  }
}
