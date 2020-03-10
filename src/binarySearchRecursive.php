<?php

function binarySearchRecursive($array, $needle, $key_start = null, $key_end = null)
{
    if ($key_start === null) {
        $key_start = array_key_first($array);
    }
    if ($key_end === null) {
        $key_end = array_key_last($array);
    }

    if ($key_start == $key_end && $array[$key_start] == $needle) {
        return $key_start;
    }

    if ($key_end - $key_start < 0) {
        return null;
    }

    $middle_key = floor(($key_start + $key_end) / 2);

    if ($array[$middle_key] == $needle) {
        return $middle_key;
    } elseif ($array[$middle_key] > $needle) {
        $new_start = $key_start;
        $new_end = $middle_key - 1;
    } else {
        $new_start = $middle_key + 1;
        $new_end = $key_end;
    }

    return binarySearchRecursive($array, $needle, $new_start, $new_end);
}
