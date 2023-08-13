<?php 

namespace Controllers;

use Model\Property;
use MVC\Router;

class PagesController{

  public static function home(Router $router){

    $properties = Property::getAll(); 

    $router->render('home', [
      "properties" => $properties
    ]);
  }

}
?>