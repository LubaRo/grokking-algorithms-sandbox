<?php

require_once __DIR__ . "/../src/countRecursive.php";

use PHPUnit\Framework\TestCase;

class countRecursiveTest extends TestCase
{
    public function testCountRecursive()
    {
        $this->assertEquals(0, countRecursive([]));
        $this->assertEquals(1, countRecursive(["elem"]));
        $this->assertEquals(2, countRecursive(['a', 'b']));
        $this->assertEquals(5, countRecursive([1, 2, 3, 4, 5]));
        $this->assertEquals(26, countRecursive(range('A', 'Z')));
    }
}