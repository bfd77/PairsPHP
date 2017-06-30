<?php
function cons($x, $y)
{
  return function($func) use ($x, $y) {
    return $func($x, $y);
  };
}
function  car($pair)
{
  return $pair(function ($x, $y) { return $x; });
}
function cdr($pair)
{
  return $pair(function ($x, $y) { return $y; });
}
$test_pair = cons(4, 7);
echo car($test_pair);
echo "\n";
echo cdr($test_pair) . PHP_EOL;

function pairToString($pair)
{
  return $pair(function ($x, $y) { echo "($x, $y)"; });
}

pairToString($test_pair);
