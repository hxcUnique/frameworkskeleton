<?php

//Autoloader
require_once 'autoloader.php';

$autoloader = new Autoloader();
$autoloader::register();

//$blogClass = new Controller_BlogController();
//$blogClass->index();

//Routing
$routingClass = new Library_Routing_Route();
$routingClass->setUri($_SERVER['REQUEST_URI']);
$routingClass->setRoute();
$routingClass->callRoute();