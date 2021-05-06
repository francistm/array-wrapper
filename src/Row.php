<?php

namespace Francis\ArrayWrapper;

use ArrayAccess;
use JsonSerializable;

class Row implements ArrayAccess, JsonSerializable
{
    protected $data;
    protected $columns;

    public function __construct($data, $columns)
    {
        $this->data = $data;
        $this->columns = $columns;
    }

    public function offsetExists($offset)
    {
        // TODO: Implement offsetExists() method.
    }

    public function offsetGet($offset)
    {
        // TODO: Implement offsetGet() method.
    }

    public function offsetSet($offset, $value)
    {
        // TODO: Implement offsetSet() method.
    }

    public function offsetUnset($offset)
    {
        // TODO: Implement offsetUnset() method.
    }

    public function jsonSerialize()
    {
        $out = array();

        for ($i = 0; $i < count($this->data); $i++) {
            $column = $this->columns[$i];
            $out[$column] = $this->data[$i];
        }

        return $out;
    }
}