<?php

define("GET", "GET");
define("POST", "POST");
define("PATH_INFO", "PATH_INFO");
define("REQUEST_METHOD", "REQUEST_METHOD");
define("DOCUMENT_ROOT", "DOCUMENT_ROOT");
define("PATH_IMAGES", $_SERVER[DOCUMENT_ROOT] . "/images/");

//ROUTES CONSTS
define("ROUTE_HOME", "/");
define("ROUTE_PROPERTY", "/property");
define("ROUTE_PROPERTIES", "/properties/all-properties");
define("ROUTE_ADMIN",  "/properties/admin");
define("ROUTE_CREATE", "/properties/create");
define("ROUTE_UPDATE", "/properties/update");
define("ROUTE_DELETE", "/properties/delete");
define("ROUTE_LOGOUT", "/logout");
define("ROUTE_LOGIN", "/login/form");
define("AGENT_CREATE", "/agents/create");
define("AGENT_UPDATE", "/agents/update");
define("AGENT_DELETE", "/agents/delete");
define("ROUTE_ABOUT_US", "/about-us");


//CODE MESSAGES 
define("CODE_CREATED_SUCCESS", "1");
define("CODE_UPDATED_SUCCESS", "2");
define("CODE_DELETED_SUCCESS", "3");

//DATABASE CONSTS
define("LOCALHOST", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DB_NAME", "real_state");

//MESSAGES OPERATIONS 
define("CREATE_SUCCESS", "Data created with success!");
define("UPDATED_SUCCESS", "Data updated with success!");
define("DELETED_SUCCESS", "Data deleted with success!");

//CONTENT TEXT
define("PAGE_TITLE", "Real State");
