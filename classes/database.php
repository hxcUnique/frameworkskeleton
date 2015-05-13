<?php

class Classes_Database
{
    public function __construct()
    {
        $connect = mysql_connect('dd24138.kasserver.com', 'd0161b48', 'mdW72eqhcBouU2TC');

        if (!$connect) {
            die('Verbindung nicht möglich: ' . mysql_error());
        }
    }
}