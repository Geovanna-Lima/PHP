<html>
  <head>
    <title>PHP - Array</title>
  </head>

  <body>
    <?php
    $age = array("Ana" => "45", "João" => "44", "Felipe" => "8");
    krsort($age);

    foreach($age as $x => $x_value) {
      echo "Chave = " . $x . ", Valor = " . $x_value;
      echo "<br>";
    }
    ?>
  </body>
</html>