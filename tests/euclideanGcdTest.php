<?php

require_once __DIR__ . "/../src/euclideanGcd.php";

use PHPUnit\Framework\TestCase;

class euclideanGcdTest extends TestCase
{
    public function testEuclideanGcd()
    {
        $this->assertEquals(0, euclideanGcd(0, 0));
        $this->assertEquals(6, euclideanGcd(0, 6));
        $this->assertEquals(5, euclideanGcd(15, 40));
        $this->assertEquals(48, euclideanGcd(240, 336));
        $this->assertEquals(1, euclideanGcd(17, 31));
        $this->assertEquals(21, euclideanGcd(357, 252));
        $this->assertEquals(16, euclideanGcd(272, 240));
    }
}
