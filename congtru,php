<b>May tinh toan</b>
<br>

<form method="POST" action=<?php echo $_SERVER["PHP SELF"] ?>>
  So 1: <input type="text" name="so1"><br>
  So 2: <input type="text" name="so2"><br>
  <section>
    +<input type="radio" name="check" value="+"><br>
    -<input type="radio" name="check" value="-"><br>
    *<input type="radio" name="check" value="*"><br>
    /<input type="radio" name="check" value="/"><br>

    <input name="sess" value="on">
  </section>

  <input type="submit">
</form>

<?php

  define ("alert","<b>value>br>");
  // form
  $so1 = $_REQUEST["so1"];
  $so2 = $_REQUEST["so2"];
  $add = $_REQUEST["check"];

  if (empty($so1) and empty($so2) and empty($add) and $_POST["sess"] == "on"){
    echo str_replace(alert,"value","Khong duoc de trong");
  } else {

    if ($_POST["sess"] == "on"){
      add();
    echo str_replace(alert,'value','Ket qua la: '.$result);
      $open = fopen("data.txt","a+");
      fwrite($open,$result."\n");
      fclose($open);
    }

    loads_lichsu();


    
  }

  function loads_lichsu(){
    
    $connect = file_get_contents("data.txt");
    if($connect == ""){
      echo str_replace(alert,"value","Khong co lich su");
    } else {
      $a = explode("\n",$connect);
      //print_r($a);
      foreach ($a as $value){
        echo "value ".$value."<br>";
      }
    }
    
  }
  function add(){
    eval('$GLOBALS["result"] = $GLOBALS["so1"] '.$GLOBALS["add"].' $GLOBALS["so2"];');
  }
?>
