<?php

namespace Stockpile\Connection\MySQL;

use Stockpile\Connection;

class MySQLConnection extends Connection
{
    public function __construct()
    {

    }

    public function connect()
    {
        $host = $this->connection()['host'];
        $db   = $this->connection()['db'];

        $user = $this->connection()['user'];
        $pass = $this->connection()['pass'];

        return new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    }
}
