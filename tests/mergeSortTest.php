<?php

require_once __DIR__ . "/../src/mergeSort.php";

use PHPUnit\Framework\TestCase;

class MergeSortTest extends TestCase
{
    public function testMergeSort()
    {
        $arr1 = [3, 5, 8];
        $arr2 = [1, 2, 4];
        $result = [1, 2, 3, 4, 5, 8];

        $this->assertEquals($result, mergeSort($arr1, $arr2));
    }
}