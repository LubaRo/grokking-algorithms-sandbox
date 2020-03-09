<?php

function sumRecursive($arr)
{
    if (sizeof($arr) == 0) {
        return 0;
    } elseif (sizeof($arr) == 1) {
        return reset($arr);
    } else {
        $first_elem = array_shift($arr);
        return $first_elem + sumRecursive($arr);
    }
}
