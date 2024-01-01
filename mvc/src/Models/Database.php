<?php

namespace App\models;

class Database
{
    private static $db;

    public static function connect()
    {
        try {
            self::$db = new \PDO('mysql:host=localhost;dbname=pharmacie', 'root', '');
            // Configure PDO to throw exceptions
            self::$db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return self::$db;
        } catch (\PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public static function close()
    {
        self::$db = NULL;
    }
}
