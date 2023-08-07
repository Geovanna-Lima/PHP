<html>
	<head>
		<title>PHP - Function</title>
	</head>

	<body>
		<?php
		$pessoa = array(
			"nome" => "Geovanna",
			"idade" => 19
		);

		foreach ($pessoa as &$value) {
			if (gettype($value) === 'integer') $value += 10;
			echo $value."<br/>";
		}
		print_r($pessoa);
		?>
	</body>
</html>