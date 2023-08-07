<html>
	<head>
		<title>PHP - Foreach</title>
	</head>

	<body>
	<?php
	$meses = array("Janeiro", "Fevereiro", "Março",	"Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");

	foreach ($meses as $index => $mes) {	
		echo "Índice: ".$index."<br/>";	
		echo "O mês é ".$mes. "<br/><br/>";
	}
	?>
	</body>
</html>