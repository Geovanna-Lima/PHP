<html>
	<head>
		<title>PHP - Array</title>
	</head>

	<body>
	<?php
	// Cria um array multidimensional
	$um_array = array(
		"paises" => array(
			'Brasil',
			'USA'
		),
		"anos" => array(
			'2013',
			'2014'
		),
		array(
			'Um array com chave automática'
		),
		"Ops, sou só um valor."
	);
	
	// Mostra os dados do array
	echo $um_array['paises'][1];
	echo "<br>";
	echo $um_array['anos'][0];
	echo "<br>";
	echo $um_array[0][0];
	echo "<br>";
	echo $um_array[1];
	?>
	</body>
</html>