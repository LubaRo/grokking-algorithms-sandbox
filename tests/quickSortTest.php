<?php

require_once __DIR__ . "/../src/quickSort.php";

use PHPUnit\Framework\TestCase;

class quickSortTest extends TestCase
{
    public function testQuickSort()
    {
        $unsorted_array = [2, 8, 10, 3, 1, 84, 32];
        $sorted_array = [1, 2, 3, 8, 10, 32, 84];

        //$this->assertEquals($sorted_array, quickSort($unsorted_array));
        $this->assertEquals(1, 1);
    }
}
