<?php

function text($score1, $score2, $score3)
{
  $b = $score1 + $score2 + $score3;
  if ($b > 210) {
    echo $b . "点なので合格です。";
  }else{
    echo $b . "点なので不合格です。";
  }
}
echo (text(60, 70, 90));

$f = 10;
$g = 5 ;
$h = 7 ;
$i = 6 ;

function getSquareArea($c, $d)
{
  return $c * $d;
}
function getSquareArea2($c, $d)
{
  return $c * $d / 2;
}
function getSquareArea3($e, $f, $d)
{
  return ($e + $f) * $d / 2;
}

echo getSquareArea(5 ,5) . "\n";
echo getSquareArea2(7, 8) . "\n";
echo getSquareArea3(4, 5, 4);