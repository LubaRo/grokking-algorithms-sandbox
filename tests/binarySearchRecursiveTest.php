<?php

require_once __DIR__ . "/../src/binarySearchRecursive.php";

use PHPUnit\Framework\TestCase;

class binarySearchRecursivehTest extends TestCase
{
    public function testBinarySearchRecursive()
    {
        $sorted_array = [1, 3, 5, 7, 12, 15, 18, 23, 27, 32, 40, 45, 46, 50];

        $this->assertEquals(null, binarySearchRecursive($sorted_array, 0));
        $this->assertEquals(0, binarySearchRecursive($sorted_array, 1));
        $this->assertEquals(5, binarySearchRecursive($sorted_array, 15));
        $this->assertEquals(8, binarySearchRecursive($sorted_array, 27));
        $this->assertEquals(10, binarySearchRecursive($sorted_array, 40));
        $this->assertEquals(13, binarySearchRecursive($sorted_array, 50));
    }
}
