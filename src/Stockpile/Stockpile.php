<?php

namespace Stockpile;


class Stockpile
{
    private static $_connections = [];

    public static function add(Connection $connection)
    {
        $info = $connection->connection();

        static::$_connections[$info['name']] = $connection;
    }
}
