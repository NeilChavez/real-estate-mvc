<?php

namespace Controllers;


use MVC\Router;
use Model\Admin;

class LoginController
{
  public static function login(Router $router)
  {

    $admin = new Admin;
    $errors = [];
    if ($_SERVER[REQUEST_METHOD] === POST) {

      $admin = new Admin($_POST);

      $errors = $admin->validate();

      //check if there are errors in the form
      if (empty($errors)) {

        //now check if the user exists
        $result = $admin->userExists();

        if ($result) {

          //check if password if correct
          $singleResult = array_shift($result);
          $passInDB = $singleResult->password;

          $auth =  $admin->checkPassword($passInDB);

          if ($auth) {

            //give the authorization to start the session to the user
            $admin->authUser();
          }
        }
        $errors = Admin::$errors;
      }
    }

    $router->render(ROUTE_LOGIN, [
      "errors" => $errors,
      "user" => $admin
    ]);
  }

  public static function logout()
  {
    session_start();
    $_SESSION = [];
    header("Location: /");
  }
}
