<?php

class ConnectDB
{
    public static function connect()
    {
        try {

            $dsn = "mysql:host=" . DB_HOST .
                ";port=" . DB_PORT .
                ";dbname=" . DB_NAME;

            $conn = new PDO(
                $dsn,
                DB_USERNAME,
                DB_PASSWORD,
                DB_OPTIONS
            );

            return $conn;

        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}