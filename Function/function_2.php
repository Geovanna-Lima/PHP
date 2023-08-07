<html>
	<head>
		<title>PHP - Function</title>
	</head>

	<body>
		<?php
		function ola() {
			$argumentos = func_get_args();
			return $argumentos;
		}

		var_dump(ola("Bom dia"));
		?>
	</body>
</html>