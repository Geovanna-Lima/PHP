<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Envio Formulário</title>
</head>

<body>
  <p>O nome é: <?php echo $_POST["name"]; ?></p>
  <p>O E-mail é: <?php echo $_POST["email"]; ?></p>
  <p>O sexo é: <?php echo $_POST["sexo"]; ?></p>
  <p>A Região é: <?php echo $_POST["region"]; ?></p>  
</body>
</html>