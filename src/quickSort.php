<?php

function quickSort($arr)
{
    if (sizeof($arr) <= 1) {
        return $arr;
    }

    $values = array_values($arr);
    $pivot_key = ceil(sizeof($values) / 2);
    $pivot = $values[$pivot_key];

    $less = array_filter($values, function($num) use ($pivot) {
        return $num < $pivot;
    });

    $greater = array_filter($values, function($num) use ($pivot) {
        return $num > $pivot;
    });

    $equal = array_filter($values, function($num) use ($pivot) {
        return $num == $pivot;
    });

    return array_merge(quickSort($less), $equal, quickSort($greater));
}
