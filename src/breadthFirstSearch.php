<?php

function breadthFirstSearch(array $graph, callable $func)
{
    foreach ($graph as $level) {
        foreach ($level as $elem) {
            if ($func($elem)) {
                return $elem;
            }
        }
    }

    return null;
}
