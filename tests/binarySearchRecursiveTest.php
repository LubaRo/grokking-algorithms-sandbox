<?php

require_once __DIR__ . "/../src/binarySearchRecursive.php";

use PHPUnit\Framework\TestCase;

class BinarySearchRecursiveTest extends TestCase
{
    /**
     * @dataProvider provider
     */
    public function testBinarySearchRecursive($sorted_array, $needle, $expected)
    {
        $result = binarySearchRecursive($sorted_array, $needle);
        $this->assertSame($expected, $result);
    }

    public function provider()
    {
        $sorted_array1 = [1, 3, 5, 7, 12, 15, 18, 23, 27, 32, 40, 45, 46, 50];
        $sorted_array2 = [-2 => 1, -1 => 2, 0 => 3, 1 => 4, 2 => 5];

        return [
            'a' => [$sorted_array1, 0, null],
            'b' => [$sorted_array1, 1, 0],
            'c' => [$sorted_array1, 15, 5],
            'd' => [$sorted_array1, 27, 8],
            'e' => [$sorted_array1, 40, 10],
            'f' => [$sorted_array1, 50, 13],

            'g' => [$sorted_array2, 1, -2],
            'h' => [$sorted_array2, 2, -1],
            'i' => [$sorted_array2, 3, 0],
            'j' => [$sorted_array2, 5, 2]
        ];
    }
}
