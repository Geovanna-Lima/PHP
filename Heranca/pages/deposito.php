<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Depósito</title>
</head>

<body>
  <form action="./menu.php" method='POST'>
    <input type="number" name="deposito">
    <input type="hidden" name="saldo" value="<?php echo $saldo; ?>">
    <button type="submit" >Confirmar depósito</button>
  </form>
</body>
</html>