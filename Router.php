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

    $currentUrl = $_SERVER[PATH_INFO] ?? ROUTE_HOME;
    $method = $_SERVER[REQUEST_METHOD];

    $fn = "";

    if ($method === GET) {
      $fn =  $this->routesGET[$currentUrl] ?? null;
    }

    if($method === POST){
      $fn = $this->routesPOST[$currentUrl] ?? null;
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
