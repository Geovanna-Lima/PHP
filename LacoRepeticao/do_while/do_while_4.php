<html>
	<head>
		<title>PHP - Do while</title>
	</head>

	<body>
		<?php
		$i = 5;

		do {
			if ($i > 3) {
				echo "$i é maior que 3 <br>";
				$i++;
			}
		} while ($i < 10);
		?>
	</body>
</html>