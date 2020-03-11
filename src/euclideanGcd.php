<?php

function euclideanGcd($num1, $num2)
{
    if ($num1 == 0) {
        return $num2;
    } elseif ($num2 == 0) {
        return $num1;
    }

    if ($num1 > $num2) {
        $reminder = $num1 % $num2;
        $smalest_num = $num2;
    } else {
        $reminder = $num2 % $num1;
        $smalest_num = $num1;
    }

    return euclideanGcd($smalest_num, $reminder);
}
