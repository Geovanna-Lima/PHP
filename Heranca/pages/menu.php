<?php
  // error_reporting(0);
  require_once '../classes/Conta.php';
  $c1 = new Conta('Jão','123');

  if(isset($_POST['deposito']))
  $c1->deposito($_POST['deposito'],$_COOKIE['saldo']);
  else if(isset($_POST['transferencia']))
  $c1->transferencia($_POST['transferencia'],$_COOKIE['saldo']);
  else
    $c1->setSaldo($_COOKIE['saldo']);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Minha Conta</title>
</head>

<body>
  <p>Bem-vindo <span><?php $c1->getNome(); ?></span></p>
  <p>Saldo atual: R$ <strong name="saldo"><?php echo $c1->getSaldo() ?></strong> </p>

  <form action="./deposito.php" method="GET">
    <input name="saldo" type="hidden" value="<?php echo $c1->getSaldo(); ?>">
    <button type="submit">Depositar</button>
  </form>

  <form action="./transferencia.php" method="GET">
    <input name="saldo" type="hidden" value="<?php echo $c1->getSaldo(); ?>">
    <button type="submit">Transferir</button>
  </form>
</body>
</html>
