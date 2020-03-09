<?php

require_once __DIR__ . "/../src/sumRecursive.php";

use PHPUnit\Framework\TestCase;

class sumRecursiveTest extends TestCase
{
    public function testFactorial()
    {
        $this->assertEquals(0, sumRecursive([]));
        $this->assertEquals(6, sumRecursive([1,2,3]));
        $this->assertEquals(16, sumRecursive([16]));
        $this->assertEquals(75, sumRecursive([0,0,25,50]));
        $this->assertEquals(50, sumRecursive([-25,25,59,-9]));
    }
}