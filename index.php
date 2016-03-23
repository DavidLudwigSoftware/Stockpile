<?php


// Open the autoloader
require __DIR__ . '/vendor/autoload.php';

use Stockpile\Connection\MySQL\MySQLConnection;
use Stockpile\Stockpile;
use Stockpile\QueryBuilder;
use Stockpile\Model;

// Create a new MySQL connection
$conn = new MySQLConnection();


// Set the connection information
$conn->host('localhost')
     ->username('root')
     ->password('helloworld')
     ->database('test');


// Add the connection to the environment
Stockpile::add($conn);

$p = new Model\Person();
