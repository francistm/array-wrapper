<?php

use PHPUnit\Framework\TestCase;

use Francis\ArrayWrapper\Wrapper;
use Francis\ArrayWrapper\WrapperOption;

class WrapperTest extends TestCase
{
    public function testFilter()
    {
        $wrapper = $this->createWrapper();
        $wrapper->filter(function ($row) {
            return $row["name"] === "User 2";
        });

        $this->assertEquals($wrapper->length(), 1);
    }

    protected function createWrapper()
    {
        $data = array(
            array(1, "User 1", "2020-01-01 00:05:25"),
            array(2, "User 2", "2020-01-01 08:07:25"),
        );

        return new Wrapper($data, new WrapperOption(array(
            "id" => "id",
            "columns" => array("id", "name", "created_at"),
        )));
    }
}