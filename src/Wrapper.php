<?php

namespace Francis\ArrayWrapper;

class Wrapper
{
  protected $data;
  protected $columns;

  public function __construct(array $data, WrapperOption $option)
  {
  }

  public function filter($callback) {
      return $this;
  }

  public function length() {
      return count($this->data);
  }
}
