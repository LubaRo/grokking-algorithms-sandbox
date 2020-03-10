<?php

function countRecursive($arr)
{
    if (empty($arr)) {
        return 0;
    }

    array_shift($arr);

    return 1 + countRecursive($arr);
}
