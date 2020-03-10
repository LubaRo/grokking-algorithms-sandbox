<?php

require_once __DIR__ . "/../src/binarySearchRecursive.php";

use PHPUnit\Framework\TestCase;

class binarySearchRecursiveTest extends TestCase
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


        $sorted_array = [-2 => 1, -1 => 2, 0 => 3, 1 => 4, 2 => 5];

        $this->assertEquals(-2, binarySearchRecursive($sorted_array, 1));
        $this->assertEquals(-1, binarySearchRecursive($sorted_array, 2));
        $this->assertEquals(0, binarySearchRecursive($sorted_array, 3));
        $this->assertEquals(2, binarySearchRecursive($sorted_array, 5));
    }
}
