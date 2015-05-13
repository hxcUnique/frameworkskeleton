<?php

class Library_Routing_Route
{
    protected $_uri = '';
    protected $_controller = '';
    protected $_action = '';

    public function setUri($uri = '')
    {
        if ($this->_uri == '') {
            $this->_uri = $uri;
        }
    }

    public function getUri()
    {
        return $this->_uri;
    }

    public function setController($controller = '')
    {
        if ($controller == '') {
            $this->_controller = $controller;
        }
    }

    public function getController()
    {
        return $this->_controller;
    }

    public function setAction($action = '')
    {
        if ($action == '') {
            $this->_action = $action;
        }
    }

    public function getAction()
    {
        return $this->_action;
    }

    public function setRoute()
    {
        $baseSplit = explode('/', $this->_uri);

        $this->setController($baseSplit[count($baseSplit) - 2]);
        $this->setAction($baseSplit[count($baseSplit) - 1]);
    }

    public function callRoute()
    {
        $controllerName = 'Controller_' . ucfirst($this->_controller) . 'Controller';
        $controller     = new $controllerName();
        $action         = $this->getAction() . 'Action';

        if (method_exists($controller, $action)) {
            $controller->$action;
        } else {
            header("HTTP/1.0 404 Not Found");
            header("Status: 404 Not Found");

            echo 'Sorry, da gabs wohl einen Fehler!';
        }


    }
}