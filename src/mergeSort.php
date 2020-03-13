<?php

function mergeSort($arr1, $arr2)
{
    if (empty($arr1)) {
        return $arr2;
    } elseif (empty($arr2)) {
        return $arr1;
    }

    $result = [];

    $first_elem1 = reset($arr1);
    $first_elem2 = reset($arr2);

    if ($first_elem1 < $first_elem2) {
        $result[] = array_shift($arr1);
    } else {
        $result[] = array_shift($arr2);
    }

    return array_merge($result, mergeSort($arr1, $arr2));
}