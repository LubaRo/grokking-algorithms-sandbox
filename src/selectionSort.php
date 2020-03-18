<?php

function selectionSort($unsortedArr)
{
    if (count($unsortedArr) <= 1) {
        return $unsortedArr;
    }

    $sortedArr = [];

    while (sizeof($unsortedArr) > 0) {
        [$minVal, $minValKey] = findSmallest($unsortedArr);

        $sortedArr[] = $minVal;
        unset($unsortedArr[$minValKey]);
    }

    return $sortedArr;
}

function findSmallest($list)
{
    if (empty($list)) {
        return [null, null];
    }

    $smalletsKey = array_key_first($list);
    $smallestValue = $list[$smalletsKey];

    foreach ($list as $key => $value) {
        if ($value < $smallestValue) {
            $smallestValue = $value;
            $smalletsKey = $key;
        }
    }

    return [$smallestValue, $smalletsKey];
}
