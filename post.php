<form method="POST" action=<?php echo $_SERVER["PHP_SELF"]?>>
    <input type="text" name="fname">
</form>

<?php

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = htmlspecialchars($_POST["fname"]);
    if(empty($name)){
      echo "Không có dữ liệu";
    } else {
      echo "<b>".$name."<b>";
    }
  }

?>
