<?php

$num = 10;

$numCast = (int) '25';
$numCastCheck = '50.5';
var_dump($numCast);
var_dump($numCastCheck);

$numCastCheck = (int) '50.5';
var_dump($numCastCheck);

$bool = (int) true;
var_dump($bool);

$bigNum = 2_000_000;
echo $bigNum;
?>