<?php

require_once __DIR__ . "/../src/factorial.php";

use PHPUnit\Framework\TestCase;

class factorialTest extends TestCase
{
    public function testFactorial()
    {

        $this->assertEquals(1, factorial(1));
        $this->assertEquals(2, factorial(2));
        $this->assertEquals(6, factorial(3));
        $this->assertEquals(720, factorial(6));
        $this->assertEquals(3628800, factorial(10));

        $this->assertEquals(false, factorial(-5));
    }
}
