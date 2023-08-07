<html>
	<head>
		<title>PHP - Do while</title>
	</head>

	<body>
		<?php
		$total = 100;
		$desconto = 0.9;

		do {
			$total *= $desconto; 
		}
		while ($total > 100);
		
		echo $total;
		?>
	</body>
</html>