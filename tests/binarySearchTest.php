<?php

require_once __DIR__ . "/../src/binarySearch.php";

use PHPUnit\Framework\TestCase;

class binarySearchTest extends TestCase
{
    public function testBinarySearch()
    {
        $sorted_array = [1, 3, 5, 7, 12, 15, 18, 23, 27, 32, 40, 45, 46, 50];

        $this->assertEquals(null, binarySearch($sorted_array, 0));
        $this->assertEquals(0, binarySearch($sorted_array, 1));
        $this->assertEquals(5, binarySearch($sorted_array, 15));
        $this->assertEquals(8, binarySearch($sorted_array, 27));
        $this->assertEquals(10, binarySearch($sorted_array, 40));
        $this->assertEquals(13, binarySearch($sorted_array, 50));
    }
}
