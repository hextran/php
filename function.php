<?php declare(strict_types=1);
echo gettype(sum(
  "1" , "2"
));

function sum (string $num1, string $num2) : int {
  return $num1 + $num2;
}
