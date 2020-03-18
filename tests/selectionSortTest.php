<?php

require_once __DIR__ . "/../src/selectionSort.php";

use PHPUnit\Framework\TestCase;

class selectionSortTest extends TestCase
{
    public function testSelectionSort1()
    {
        $this->assertEquals([], selectionSort([]));
    }

    public function testSelectionSort2()
    {
        $this->assertEquals([2], selectionSort([2]));
    }

    public function testSelectionSort3()
    {
        $unsorted_array = [3, 1];
        $sorted_array = [1, 3];

        $this->assertEquals($sorted_array, selectionSort($unsorted_array));
    }

    public function testSelectionSort4()
    {
        $unsorted_array = [2, 8, -10, 3, 1, 84, 32];
        $sorted_array = [-10, 1, 2, 3, 8, 32, 84];

        $this->assertEquals($sorted_array, selectionSort($unsorted_array));
    }

    public function testSelectionSortRecursive1()
    {
        $this->assertEquals([], selectionSortRecursive([]));
    }

    public function testSelectionSortRecursive2()
    {
        $this->assertEquals([2], selectionSortRecursive([2]));
    }

    public function testSelectionSortRecursive3()
    {
        $unsorted_array = [3, 1];
        $sorted_array = [1, 3];

        $this->assertEquals($sorted_array, selectionSortRecursive($unsorted_array));
    }

    public function testSelectionSortRecursive4()
    {
        $unsorted_array = [2, 8, -10, 3, 1, 84, 32];
        $sorted_array = [-10, 1, 2, 3, 8, 32, 84];

        $this->assertEquals($sorted_array, selectionSortRecursive($unsorted_array));
    }

    public function testFindSmallest1()
    {
        $this->assertEquals([null, null], findSmallest([]));
    }

    public function testFindSmallest2()
    {
        $this->assertEquals([15, 0], findSmallest([15]));
    }

    public function testFindSmallest3()
    {
        $this->assertEquals([-457, 'z'], findSmallest(['a' => 15, 4 => 18, 'z' => -457, 'key' => 90]));
    }
}
