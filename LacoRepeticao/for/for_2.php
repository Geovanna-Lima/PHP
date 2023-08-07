<html>
  <head>
    <title>PHP - For</title>
  </head>

  <body>
    <?php
    for ($i = 0; $i < 150; $i += 5) {	
      if ($i >= 20 && $i <= 50) continue;	
      if ($i === 120) break;	
      echo $i . "<br/>";
    }
    ?>
  </body>
</html>