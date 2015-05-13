<?php

class Autoloader
{
    public function __construct()
    {
        spl_autoload_register(array($this, 'load_class'));
    }

    public static function register()
    {
        new Autoloader();
    }

    public function load_class($classname = '')
    {
        $file = '../' . strtolower(str_replace('_', '/', $classname)).'.php';

        if (file_exists($file)) {
            require_once($file);
        }
    }
}