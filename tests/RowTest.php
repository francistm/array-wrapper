<?php

use Francis\ArrayWrapper\Row;
use PHPUnit\Framework\TestCase;

class RowTest extends TestCase
{
    public function testArrayAccess()
    {
        $row = new Row([1, 'francis', 'foo@example.org'], ['id', 'name', 'email']);

        $this->assertEquals(1, $row[0]);
        $this->assertEquals(1, $row['id']);
        $this->assertEquals('foo@example.org', $row[2]);
        $this->assertEquals('foo@example.org', $row['email']);
    }
}