<?php

namespace Src\model;

class Database
{
    public static $db;

    public static function connect()
    {
        try {
            self::$db = new \PDO('mysql:host=localhost;user=root;dbname=pharmacie');
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
