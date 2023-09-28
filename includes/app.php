<?php

use Model\ActiveRecord;

include __DIR__ . "/../vendor/autoload.php";
include __DIR__ . "/../constants.php";
include __DIR__ . "/config/db.php";
include __DIR__ . "/functions.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

$connection = getConnectionDB();

ActiveRecord::setDB($connection);
?>  