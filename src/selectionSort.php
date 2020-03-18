<?php
/*
    The simplest and most intuitive iterative implementation
*/
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

/*
    The best of the given implementations
    It doesn't require additional memory,
    only for storing the index of current minimal value
*/
function selectionSortOptimal($arr)
{
    if (count($arr) <= 1) {
        return $arr;
    }

    for ($i = 0; $i < count($arr) - 1; $i++) {
        $minIndex = $i;
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$j] < $arr[$minIndex]) {
                $minIndex = $j;
            }
        }

        if ($minIndex != $i) {
            [$arr[$minIndex], $arr[$i]] = [$arr[$i], $arr[$minIndex]];
        }
    }

    return $arr;
}

/*
    Recursion Implementation
*/
function selectionSortRecursive($unsortedArr)
{
    if (count($unsortedArr) <= 1) {
        return $unsortedArr;
    }

    [$minVal, $minValKey] = findSmallest($unsortedArr);

    unset($unsortedArr[$minValKey]);

    return array_merge([$minVal], selectionSortRecursive($unsortedArr));
}

/*
    Helper function that returns
    the smallest array value and its index
*/
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
