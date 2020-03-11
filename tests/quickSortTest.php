<?php

require_once __DIR__ . "/../src/quickSort.php";

use PHPUnit\Framework\TestCase;

class quickSortTest extends TestCase
{
    public function testQuickSort()
    {
        $unsorted_array = [2, 8, 10, 3, 1, 84, 32];
        $sorted_array = [1, 2, 3, 8, 10, 32, 84];

        $this->assertEquals($sorted_array, quickSort($unsorted_array));

        $unsorted_array = [15, 9, 46, 9, 30, 18, 35, 35, 0, -23, 5];
        $sorted_array   = [-23, 0, 5, 9, 9, 15, 18, 30, 35, 35, 46];

        $this->assertEquals($sorted_array, quickSort($unsorted_array));

        $this->assertEquals([], quickSort([]));
        $this->assertEquals([5], quickSort([5]));
        $this->assertEquals([26, 35], quickSort([35, 26]));
        $this->assertEquals([15, 26, 35], quickSort([35, 26, 15]));
        $this->assertEquals([15, 26, 35, 115, 125], quickSort([15, 26, 35, 115, 125]));
    }
}
