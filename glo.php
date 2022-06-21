<?php

$num1 = 15;
$num2 = 30;

function add($num1,$num2){
  $GLOBALS['num3'] = $GLOBALS['num1'] + $GLOBALS['num2'];
}

add($num1,$num2);

echo $num3;
