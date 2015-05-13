<?php

class Library_Database_Database
{
    protected $_db = null;

    public function __construct()
    {
        $this->_db = mysql_connect('**', '**', '**');

        if (!$this->_db) {
            die('Verbindung nicht möglich: ' . mysql_error());
        }
    }

    public function getDb()
    {
        return $this->_db;
    }
}