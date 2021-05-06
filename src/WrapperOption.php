<?php

namespace Francis\ArrayWrapper;

use ArrayAccess;
use JsonSerializable;

class WrapperOption implements ArrayAccess, JsonSerializable
{
    protected $option;

    public function __construct(array $option)
    {
        $this->option = $option;
    }

    public function offsetExists($offset)
    {
        return isset($this->option[$offset]);
    }

    public function offsetGet($offset)
    {
        return $this->option[$offset];
    }

    public function offsetSet($offset, $value)
    {
        $this->option[$offset] = $value;
    }

    public function offsetUnset($offset)
    {
        unset($this->option[$offset]);
    }

    public function jsonSerialize()
    {
        return $this->option;
    }

    public function __toString()
    {
        return json_encode($this, JSON_UNESCAPED_UNICODE);
    }
}
