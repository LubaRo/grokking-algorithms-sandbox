<?php

function findLargestRecursive($list, $current_large = null)
{
    if (empty($list)) {
        return $current_large;
    }

    if ($current_large === null) {
        $current_large = array_shift($list);
    }

    $num = array_shift($list);

    $current_large = $num > $current_large ? $num : $current_large;

    return findLargestRecursive($list, $current_large);
}
