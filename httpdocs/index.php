<?php

//Autoloader initialisieren
require_once 'autoloader.php';

$autoloader = new Autoloader();
$autoloader::register();

$blogClass = new Classes_Blog();
$blogClass->index();