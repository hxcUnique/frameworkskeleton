<?php

namespace classes\autoloader\Autoloader;

class Classes_Autoloader_Autoloader
{
    public function __autoload($classname = '')
    {
        $folder = explode('_', $classname);
        $path   =

        if (file_exists($path)) {
            require_once $path;
        } else {
            return false;
        }
    }
}