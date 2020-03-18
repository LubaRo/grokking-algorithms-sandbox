<?php

require_once __DIR__ . "/../src/selectionSort.php";

use PHPUnit\Framework\TestCase;

class SelectionSortTest extends TestCase
{
    public function testSelectionSort1()
    {
        $this->assertEquals([], selectionSort([]));
        $this->assertEquals([2], selectionSort([2]));
        $this->assertEquals([1, 3], selectionSort([3, 1]));

        $unsorted_array = [2, 8, -10, 3, 1, 84, 32];
        $sorted_array = [-10, 1, 2, 3, 8, 32, 84];

        $this->assertEquals($sorted_array, selectionSort($unsorted_array));
    }

    public function testSelectionSortImproved()
    {
        $this->assertEquals([], selectionSortImproved([]));
        $this->assertEquals([56], selectionSortImproved([56]));
        $this->assertEquals([1, 3], selectionSortImproved([3, 1]));

        $unsorted_array = [2, 8, -10, 3, 1, 84, 32];
        $sorted_array = [-10, 1, 2, 3, 8, 32, 84];

        $this->assertEquals($sorted_array, selectionSortImproved($unsorted_array));
    }

    public function testSelectionSortRecursive()
    {
        $this->assertEquals([], selectionSortRecursive([]));
        $this->assertEquals([2], selectionSortRecursive([2]));
        $this->assertEquals([3, 18], selectionSortRecursive([3, 18]));
        $this->assertEquals([3, 18], selectionSortRecursive([18, 3]));
 
        $unsorted_array = [2, 8, -10, 3, 1, 84, 32];
        $sorted_array = [-10, 1, 2, 3, 8, 32, 84];

        $this->assertEquals($sorted_array, selectionSortRecursive($unsorted_array));
    }

    public function testFindSmallest()
    {
        $this->assertEquals([null, null], findSmallest([]));
        $this->assertEquals([15, 0], findSmallest([15]));
        $this->assertEquals([-457, 'z'], findSmallest(['a' => 15, 4 => 18, 'z' => -457, 'key' => 90]));
    }
}
