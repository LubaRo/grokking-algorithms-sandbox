<?php

function binarySearch($array, $needle)
{
    $min = 0;
    $max = sizeof($array);
    $found_position = null;

    while ($max >= $min) {
        $middle_index = ceil(($min + $max) / 2);

        if (!isset($array[$middle_index])) {
            break;
        } elseif ($array[$middle_index] == $needle) {
            $found_position = $middle_index;
            break;
        } elseif ($array[$middle_index] > $needle) {
            $max = $middle_index - 1;
        } else {
            $min = $middle_index + 1;
        }
    }

    return $found_position;
}

$sorted_array = [1, 3, 5, 7, 12, 15, 18, 23, 27, 32, 40, 45, 46, 50];

echo binarySearch($sorted_array, 0) . PHP_EOL;
echo binarySearch($sorted_array, 1) . PHP_EOL;
echo binarySearch($sorted_array, 3) . PHP_EOL;
echo binarySearch($sorted_array, 5) . PHP_EOL;
echo binarySearch($sorted_array, 7) . PHP_EOL;
echo binarySearch($sorted_array, 12) . PHP_EOL;
echo binarySearch($sorted_array, 15) . PHP_EOL;
echo binarySearch($sorted_array, 18) . PHP_EOL;
echo binarySearch($sorted_array, 23) . PHP_EOL;
echo binarySearch($sorted_array, 27) . PHP_EOL;
echo binarySearch($sorted_array, 50) . PHP_EOL;
echo binarySearch($sorted_array, 82) . PHP_EOL;
