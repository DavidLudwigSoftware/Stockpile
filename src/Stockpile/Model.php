<?php

namespace Stockpile;

use ICanBoogie\Inflector;

class Model
{
    protected $table = Null;

    protected $fillable = [];

    private $_inflector;

    public function __construct()
    {
        if (gettype($this->table) != "string")
        {
            $this->_inflector = Inflector::get(Inflector::DEFAULT_LOCALE);

            $parts = explode('\\', get_class($this));

            $this->table = $this->_inflector->pluralize(
                strtolower($parts[count($parts) - 1])
            );
        }
    }

    public function tableName()
    {
        return $this->table;
    }

    public function __call($name, $args)
    {
        echo $this->_inflector->underscore($name);
    }
}
