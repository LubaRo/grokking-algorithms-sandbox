<?php

function factorial($num)
{
    if ($num < 1) {
        return false;
    }
    if ($num == 1) {
        return $num;
    } else {
        return $num * factorial($num - 1);
    }
}
