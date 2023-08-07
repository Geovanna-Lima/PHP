<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Envio Formulário</title>
</head>

<style>
	body {
		align-items: center;
		display: flex;
		justify-content: center;
		height: 100vh;
		box-sizing: border-box;
		overflow-y: hidden;
	}

	fieldset {
		display: flex;
		width: 30.5rem;
    flex-direction: column;
	}
</style>

<body>
<fieldset>
  <p>O nome é: <?php echo $_POST["name"]; ?></p>
  <p>A data de nascimento é: <?php echo $_POST["dataNas"]; ?></p>
  <p>O endereço é: <?php echo $_POST["endereco"]; ?></p>
  <p>O estado civil é: <?php echo $_POST["estadoCivil"]; ?></p>
  <p>O sexo é: <?php echo $_POST["sexo"]; ?></p>
  <p>O meio de locomoção é: <?php echo $_POST["locomocao"]; ?></p>
</fieldset>
</body>
</html>