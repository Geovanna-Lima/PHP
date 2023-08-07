<html>
  <head>
    <title>PHP - Function</title>
  </head>

  <body>
    <?php
    //Criada a referência em $num_1 
    function referencia(&$num_1) {
      $num_1 *= 5;
      return $num_1;  
    }

    $num_2 = 3;
    referencia($num_2);
    echo $num_2;
    ?>
  </body>
</html>