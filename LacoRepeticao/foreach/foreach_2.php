<html>
	<head>
		<title>PHP - Foreach</title>
	</head>

	<body>
		<?php
		$idade = array("Felipe" => "8", "Maria" => "2", "Ana" => "43");

		foreach($idade as $x => $valor)
			echo "$x = $valor <br>";
		?>
	</body>
</html>