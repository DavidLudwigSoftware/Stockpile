<?php

namespace Stockpile;


class Connection
{
    private $_connection = [
        'name' => Null,
        'host' => Null,
        'user' => Null,
        'pass' => Null,
        'db'   => Null,
    ];

    public function __construct() { }
    public function connect() { }

    public function grammer()
    {
        return Null;
    }

    public function connection()
    {
        return $this->_connection;
    }

    public function name(string $name)
    {
        $this->_connection['name'] = $name;

        return $this;
    }

    public function host(string $host)
    {
        $this->_connections['host'] = $host;

        return $this;
    }

    public function username(string $username)
    {
        $this->_connections['user'] = $username;

        return $this;
    }

    public function password(string $password)
    {
        $this->_connections['pass'] = $password;

        return $this;
    }

    public function database(string $database)
    {
        $this->_connections['db'] = $database;

        return $this;
    }
}
