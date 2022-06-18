<?php

$i = 0;
while ($i <= 100){
  echo $i . "\n";
  $i += 10;
}

define("enter","<br>");
echo enter;

$i = 0;

do {
  echo $i . "\n";
  $i += 10;
} while ($i <= 100);
