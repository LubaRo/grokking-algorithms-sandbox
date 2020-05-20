<?php

require_once __DIR__ . "/../src/breadthFirstSearch.php";

use PHPUnit\Framework\TestCase;

class BreadthFirstSearchTest extends TestCase
{
    public function testBreadthFirstSearch()
    {
        /* Graph:
                      root
                /       |      \
             alice     bob    clare
                |    /  |      |    \
                peggy  anuj   thom  jonny
         */

        $graph = [
            'alice' => ['peggy'],
            'bob' => ['peggy', 'anuj'],
            'claire' => ['thom', 'jonny']
        ];

        $result = breadthFirstSearch($graph, function ($name) {
            return $name[-1] === 'm';
        });
        $this->assertEquals('thom', $result);
    }
}
