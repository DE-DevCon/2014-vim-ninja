<?php

echo add(3, 7);
echo ',';
echo add(4, 13);
echo ',';
echo add(5, 8);
echo ',';
echo add(10, 4);
echo PHP_EOL;
echo add(8, 5);
echo ',';
echo add(6, 5);
echo ',';
echo add(4, 7);
echo ',';
echo add(25, 4);
echo PHP_EOL;
echo add(11, 6);
echo ',';
echo add(3, 7);
echo ',';
echo multiply(13, 5);
echo ',';
echo add(54, 65);
echo PHP_EOL;

function add($a, $b)
{
    return $a + $b;
}

function multiply($a, $b)
{
    return $a * $b;
}
