<?php

namespace Stockpile;


class QueryBuilder
{
    const ASC  = 'ASC';
    const DESC = 'DESC';

    public static function get()
    {
        return new static();
    }

    public static function create()
    {
        return new static();
    }

    public function where($arg1, $arg2)
    {
        return $this;
    }

    public function orWhere($arg1, $arg2)
    {
        return $this;
    }

    public function order($column, $order = QueryBuilder::ASC)
    {
        return $this;
    }
}
