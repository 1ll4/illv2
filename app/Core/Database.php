<?php

namespace App\Core;

use mysqli;

class Database
{
    private static ?mysqli $connection = null;

    public static function getConnection(): mysqli
    {
        $data = require_once dirname(__DIR__, 2) . "/config/database.php";
        if (self::$connection === null)
        {
            self::$connection = new mysqli(
                $data['host'],
                $data['user'],
                $data['password'],
                $data['database']
            );

            if (self::$connection->connect_error)
            {
                die("Connection failed: " .
                    self::$connection->connect_error);
            }

            self::$connection->set_charset("utf8");
        }

        return self::$connection;
    }
}