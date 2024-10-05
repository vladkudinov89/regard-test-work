<?php

class test
{
    public $next;
}

$a = new test();
$b = new test();
$c = new test();
$a->next = $b;
$b->next = $c;
$c->next = null;

function reverse($a)
{
    $newElement = null;
    $currentElement = $a;

    while (null !== $currentElement) {
        $nextElement = $currentElement->next;

        $currentElement->next = $newElement;

        $newElement = $currentElement;

        $currentElement = $nextElement;
    }

    return $newElement;
}

$ob1 = reverse($a);
var_dump($ob1);