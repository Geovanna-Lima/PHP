<html>
	<head>
		<title>PHP - Function</title>
	</head>

	<body>
		<?php
		$a = 10;

		function trocaValor(&$b) {
			$b += 50;
			return $b;
		}

		echo trocaValor($a);
		echo "<br/>";
		echo $a;
		?>
	</body>
</html>