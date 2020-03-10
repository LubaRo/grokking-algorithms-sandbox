<?php

require_once __DIR__ . "/../src/findLargestRecursive.php";

use PHPUnit\Framework\TestCase;

class findLargestRecursiveTest extends TestCase
{
    public function testFindLargestRecursive()
    {

        $this->assertEquals(null, findLargestRecursive([]));
        $this->assertEquals(2, findLargestRecursive([0, 2, -2, -9]));
        $this->assertEquals(9000, findLargestRecursive([null, 100, 9000, 35]));
        $this->assertEquals(10, findLargestRecursive([10]));
        $this->assertEquals(15, findLargestRecursive([0, 0, 15, 10, 15]));
    }
}
