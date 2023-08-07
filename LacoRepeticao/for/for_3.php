<html>
  <head>
    <title>PHP - For</title>
  </head>

  <body>
    <?php
    echo "<select>";

    for ($i = date("Y"); $i >= date("Y") - 100; $i--)
      echo '<option value="'.$i.'">'.$i.'</option>';	
  
    echo "</select>";
    ?>
  </body>
</html>