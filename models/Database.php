<?php

class Database
{
    public static function getPdo()
    {
        $database = new PDO('mysql:host=localhost;dbname=;charset=utf8', '', '');
       
        return $database;
    }
}