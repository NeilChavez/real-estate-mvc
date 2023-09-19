<?php 

namespace Controllers;

use Model\Agent;
use Model\Property;
use MVC\Router;

class PagesController{

  public static function home(Router $router){

    $limit = 3;
    $properties = Property::get($limit); 

    $router->render('home', [
      "properties" => $properties
    ]);
  }

  public static function property(Router $router)
  {
    $id = filter_var($_GET["id"], FILTER_VALIDATE_INT);

    if (!$id) header("Location: /");

    $property = Property::findById($id);
    $agent = Agent::findById($property->agents_id);
  
    $router->render("property", [
      "property" => $property,
      "agent" => $agent
    ]);
  }

}
?>