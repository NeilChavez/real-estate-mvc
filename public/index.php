<?php

use MVC\Router;
use Controllers\AgentController;
use Controllers\LoginController;
use Controllers\PagesController;
use Controllers\PropertyController;
use Model\Property;

include_once __DIR__ . "/../includes/app.php";

$router = new Router();

//properties
$router->get(ROUTE_ADMIN, [PropertyController::class, "adminIndex"]);
$router->get(ROUTE_CREATE, [PropertyController::class, "create"]);
$router->post(ROUTE_CREATE, [PropertyController::class, "create"]);
$router->get(ROUTE_UPDATE, [PropertyController::class, "update"]);
$router->post(ROUTE_UPDATE, [PropertyController::class, "update"]);
$router->post(ROUTE_DELETE, [PropertyController::class, "delete"]);
$router->get(ROUTE_PROPERTIES, [PropertyController::class, "read"]);

//agents
$router->get(AGENT_CREATE, [AgentController::class, "create"]);
$router->post(AGENT_CREATE, [AgentController::class, "create"]);
$router->get(AGENT_UPDATE, [AgentController::class, "update"]);
$router->post(AGENT_UPDATE, [AgentController::class, "update"]);
$router->post(AGENT_DELETE, [AgentController::class, "delete"]);

//pages
$router->get(ROUTE_HOME, [PagesController::class, "home"]);
$router->get(ROUTE_PROPERTY, [PagesController::class, "property"]);
$router->get(ROUTE_ABOUT_US, [PagesController::class, "aboutUs"]);

//login
$router->get("/login", [LoginController::class, "login"]);
$router->post("/login", [LoginController::class, "login"]);
$router->get(ROUTE_LOGOUT, [LoginController::class, "logout"]);



$router->checkRoutes();




?>