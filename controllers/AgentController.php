<?php 

namespace Controllers;

use Model\Agent;
use MVC\Router;
use Intervention\Image\ImageManagerStatic as Image;


class AgentController {

  public static function create(Router $router){

    $agent = new Agent;
    $errors = [];

    if($_SERVER[REQUEST_METHOD] === POST){

      $args = $_POST["agent"];
      //the agent object take the values after the send of the form
      $agent->sincronize($args);

      if ($_FILES["agent"]["tmp_name"]["image"]) {
        //assign a random name to the file image
        $newImageAgent = md5(uniqid(rand(), true)) . ".jpeg";

        //set the agent_image property in the agent object
        $agent->setImage($newImageAgent);
      }

      $errors =  $agent->validate();
      
      //check if the errors array is empty
      if(empty($errors)){
        
      //make an Image istance from the tmp_file to save it in the server
      $image = Image::make($_FILES["agent"]["tmp_name"]["image"]);

      //save the image choose by the user in the images folder
      $image->save(PATH_IMAGES . $newImageAgent);
        
        //create the agent in the DB
    
       $agent->create();
      }
      
    }

    $router->render( "/agents/create",[
      "agent" => $agent,
      "errors" => $errors
    ]);
  }

  public static function update(Router $router){

    $id = filter_var($_GET["id"], FILTER_VALIDATE_INT);

    if(!$id) header("Location: /");

    $agent = Agent::findById($id);
    $errors = [];

    if($_SERVER[REQUEST_METHOD] === POST){

      $args = $_POST["agent"];

      $agent->sincronize($args);


      $errors = $agent->validate();

      if(empty($errors)){
        //check if there is a new image uploaded by the user
        if ($_FILES["agent"]["tmp_name"]["image"]) {
          
          //make an image instance using Intervention
          $image = Image::make($_FILES["agent"]["tmp_name"]["image"]);

          //give a random name to the new image
          $newImageAgent = md5(uniqid(rand(), true)) . ".jpeg";

          //set the image in the current object agent, this internally delete also the previous image
          $agent->setImage($newImageAgent);

          //save the image in server
          $image->save(PATH_IMAGES . $newImageAgent);
        }
        
        $agent->update();
      }

    }

    $router->render("agents/update", [
      "agent" => $agent,
      "errors" => $errors
    ]);
  }
  public static function delete(){
    if ($_SERVER[REQUEST_METHOD] === POST) {
        
        //take the id of the element to delete and validate it
        $id = filter_var($_POST["id"], FILTER_VALIDATE_INT);

        //if the id sended is not valid, redirect to "/"
        if(!$id) header("Location: /");
        
        //retrieve an instance of that agent by id
        $agent = Agent::findById($id);

        //then delete that agent in DB
        $agent->delete();
    }
  }
}