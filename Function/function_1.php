<html>
  <head>
    <title>PHP - Function</title>
  </head>

  <body>
    <?php
    /*Declaração da função soma e os parâmetros $num_1 e $num_2*/
    function soma($num_1, $num_2) {
      $total = $num_1 + $num_2;
      return $total;
    }

    //Definição dos valores para as variáveis
    echo soma(5, 3);
    ?>
  </body>
</html>