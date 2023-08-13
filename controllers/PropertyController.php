<?php 

namespace Controllers;

use MVC\Router;
use Model\Property;

class PropertyController {

  public static function adminIndex(Router $router){

      $properties = Property::getAll();

      $router->render("/admin", [
        "properties" => $properties
      ]);
      
  }
  public static function create(Router $router){

      if($_SERVER[REQUEST_METHOD] === POST){
        
       $property = new Property($_POST);
       $property->create();
      }

      $router->render("/create", [

      ]);
  }
}

?>