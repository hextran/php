<?php 

define("enter","<br>");

$value = 2;
update_number($value);
echo $value.enter;

update_number($value,100);

echo $value.enter;

function update_number (&$num , int $num2 = 5) {
  echo "Đã cập nhật num từ ". $num;
  $num += $num2;
  echo " lên ". $num .enter;
  
}
