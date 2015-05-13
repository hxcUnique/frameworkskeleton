<?php

class Classes_Database
{
    public function __construct()
    {
        $connect = mysql_connect('**', '**', '**');

        if (!$connect) {
            die('Verbindung nicht möglich: ' . mysql_error());
        }
    }
}