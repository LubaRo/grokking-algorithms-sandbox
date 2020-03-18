<?php

function mergeSort($arr1, $arr2)
{
    $result = [];

    $pointer1 = $pointer2 = 0;
    $max_key1 = sizeof($arr1) - 1;
    $max_key2 = sizeof($arr2) - 1;

    while ($pointer1 <= $max_key1  && $pointer2 <= $max_key2) {
        if ($arr1[$pointer1] < $arr2[$pointer2]) {
            $result[] = $arr1[$pointer1];
            $pointer1 += 1;
        } else {
            $result[] = $arr2[$pointer2];
            $pointer2 += 1;
        }
    }

    $end_arr = [];

    if ($pointer1 > $max_key1 && $pointer2 <= $max_key2) {
        $end_arr = array_slice($arr2, $pointer2);
    } elseif ($pointer2 > $max_key2 && $pointer1 <= $max_key1) {
        $end_arr = array_slice($arr1, $pointer1);
    }

    if (!empty($end_arr)) {
        $result = array_merge($result, $end_arr);
    }

    return $result;
}