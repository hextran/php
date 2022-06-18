<?php
/**
$i = 0;

while ($i <= 10){
  if ($i == 5){
    echo $i;
    break;
  }
  echo $i;
  $i++;
}

**/

$i = 0;

while ($i <= 10){
  $i++;
  if ($i == 5){
    continue;
  }
  echo $i;
}
