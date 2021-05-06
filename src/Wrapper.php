<?php

namespace Francis\ArrayWrapper;

use JsonSerializable;

class Wrapper implements JsonSerializable
{
    protected $data;
    protected $columns;
    protected $idColumn;

    public function __construct(array $data, WrapperOption $option)
    {
        $this->columns = $option['columns'];
        $this->idColumn = $option['id'];

        $this->data = array_map(function ($row) use ($option) {
            return new Row($row, $option['columns']);
        }, $data);
    }

    public function filter($callback)
    {
        $this->data = array_filter($this->data, $callback);

        return $this;
    }

    public function length()
    {
        return count($this->data);
    }

    public function jsonSerialize()
    {
        return $this->data;
    }
}
