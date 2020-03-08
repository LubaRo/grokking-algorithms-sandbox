<?php

require_once __DIR__ . "/../src/selectionSort.php";

use PHPUnit\Framework\TestCase;

class selectionSortTest extends TestCase
{
    public function testSelectionSort()
    {
        $unsorted_array = [2, 8, 10, 3, 1, 84, 32];
        $sorted_array = [1, 2, 3, 8, 10, 32, 84];

        $this->assertEquals($sorted_array, selectionSort($unsorted_array));
    }
}
