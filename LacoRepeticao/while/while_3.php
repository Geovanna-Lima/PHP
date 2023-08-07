<html>
  <head>
    <title>PHP - While</title>
  </head>

  <body>
    <?php
    $condicao = true;

    while ($condicao) {
      $num = rand(1, 10);

      if ($num === 3) {
        $condicao = false;
      }
      echo $num . " "; 
    }  
    ?>  
  </body>
</html>