<?php

function binarySearchRecursive($array, $needle)
{
    if (empty($array)) {
        return null;
    }

    $min_key = array_key_first($array);
    $max_key = array_key_last($array);

    $middle_key = floor(($min_key + $max_key) / 2);

    if ($array[$middle_key] == $needle) {
        return $middle_key;
    } elseif ($array[$middle_key] > $needle) {
        $new_start = $min_key;
        $new_end = $middle_key - 1;
    } else {
        $new_start = $middle_key + 1;
        $new_end = $max_key;
    }

    $length = $new_end - $new_start + 1;
    $offset = array_search($new_start, array_keys($array));
    $new_array = array_slice($array, $offset, $length, true);

    return binarySearchRecursive($new_array, $needle);
}
