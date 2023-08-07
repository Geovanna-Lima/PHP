<html>
  <head>
    <title>PHP - Array</title>
  </head>

  <body>
    <?php
    $numeros = array(4, 6, 2, 22, 11);
    sort($numeros);

    $arrlength = count($numeros);
    for($x = 0; $x < $arrlength; $x++) {
      echo $numeros[$x];
      echo "<br>";
    }
    ?>
  </body>
</html>