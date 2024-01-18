<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHP - Atividade 3</title>

	</head>

	<body>

		<?php

			$numeros = array();

			while(count($numeros) <= 5) {

				$num = rand(1, 60);
					if(!in_array($num, $numeros)) {
						$numeros[] = $num;
					}
			}

			echo '<pre>';
			print_r($numeros);
			echo '</pre>';

			$string_retorno = implode(',', $numeros);

			echo $string_retorno;

			
			


		?>

		


	</body>
</html>