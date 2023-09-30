<?php

namespace MVC;

class Router
{

  public $routesGET = [];
  public $routesPOST = [];

  public function post($currentUrl, $fn)
  {
    $this->routesPOST[$currentUrl] = $fn;
  }

  public function get($currentUrl, $fn)
  {

    $this->routesGET[$currentUrl] = $fn;
  }

  public function checkRoutes()
  { 
    $protectedRoutes = [ ROUTE_ADMIN, ROUTE_CREATE, ROUTE_UPDATE, ROUTE_DELETE, ROUTE_LOGOUT, AGENT_CREATE, AGENT_UPDATE, AGENT_DELETE, ROUTE_LOGOUT ];

    // $currentUrl = $_SERVER[PATH_INFO] ?? ROUTE_HOME
    $currentUrl = strtok($_SERVER['REQUEST_URI'], '?') ?? '/';
    $method = $_SERVER[REQUEST_METHOD];

    $fn = "";

    if ($method === GET) {
      $fn =  $this->routesGET[$currentUrl] ?? null;
    }

    if($method === POST){
      $fn = $this->routesPOST[$currentUrl] ?? null;
    }

    //check if the currentUrl is a protected one
    if(in_array($currentUrl, $protectedRoutes)){

      session_start();
      $auth = $_SESSION["login"] ?? false;

      if (!$auth){
        header("Location: /");
      }
    }


    if ($fn) {
      call_user_func($fn, $this);
    } else {
      echo "PAGE NOT FOUND";
    }
  }

  public function render($view, $args = [])
  {

    foreach ($args as $key => $value) {
      $$key = $value;
    }

    ob_start();
    include __DIR__ . "/views/pages/$view.php";
    $content = ob_get_clean();
    include __DIR__ . "/views/layout.php";
  }
}
