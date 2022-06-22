<form method="GET" action=<?php echo $_SERVER["PHP_SELF"]?>>
    <input type="text" name="num1">
    <input type="text" name="num2">
    <button type="submit">
</form>

<?php

  if($_SERVER["REQUEST_METHOD"] == "GET"){
    $result = 0;
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    add($result, $num1, $num2);
    echo "<b>".$result."<b>";
  } else {
    die("Bạn không có quyền POST");
  }  


  function add(&$result , $num1 , $num2){
    $result = $num1 + $num2;
  }
?>
