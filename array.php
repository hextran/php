<?php

// tăng dần
$b = array(
  1 => 7,
  6 => 4,
  9 => 6,
  7 => 5,
  5 => 9
);

arsort($b);
krsort($b);
define ("en","\n");
foreach ($b as $c => $d){
  echo $c." => ".$d.en;
}
