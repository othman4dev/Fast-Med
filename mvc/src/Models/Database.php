<?php

namespace App\Models;

class Database
{
    public static $db;

    public static function connect()
    {
        try {
            self::$db = new \PDO("mysql:host={$_ENV['HOST']};user={$_ENV['USER']};dbname={$_ENV['DB_NAME']}");
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
