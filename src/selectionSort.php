<?php

function selectionSort($arr)
{
    $unsortedArr = $arr;
    $sortedArr = [];

    while (sizeof($unsortedArr) > 0) {
        $minVal = false;
        foreach ($unsortedArr as $key => $value) {
            if ($value < $minVal || $minVal === false) {
                $minVal = $value;
                $minValkey = $key;
            }
        }

        $sortedArr[] = $minVal;
        unset($unsortedArr[$minValkey]);
    }

    return $sortedArr;
}
