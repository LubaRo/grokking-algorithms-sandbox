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
