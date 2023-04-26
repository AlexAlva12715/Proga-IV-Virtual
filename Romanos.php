<!DOCTYPE html>
<html>
<head>
	<title>Números Romanos</title>
	<style type="text/css">
		table {
			border-collapse: collapse;
			width: 50%;
			margin: 0 auto;
			text-align: center;
		}
		table td, th {
			border: 1px solid black;
			padding: 10px;
		}
	</style>
</head>
<body>
	<h1>Números Romanos</h1>
	<form method="post">
		<label for="inicio">Inicio:</label>
		<input type="number" name="inicio" id="inicio" required>
		<br><br>
		<label for="fin">Fin:</label>
		<input type="number" name="fin" id="fin" required>
		<br><br>
		<input type="submit" value="Generar tabla">
	</form>
	<?php
		class NumerosRomanos {
			public function generarTabla($inicio, $fin) {
				echo "<table>";
				echo "<tr><th>Número</th><th>Valor Romano</th></tr>";
				for ($i = $inicio; $i <= $fin; $i++) {
					echo "<tr><td>$i</td><td>".$this->convertirARomano($i)."</td></tr>";
				}
				echo "</table>";
			}

			public function convertirARomano($numero) {
				$romanos = array(
					'M' => 1000,
					'CM' => 900,
					'D' => 500,
					'CD' => 400,
					'C' => 100,
					'XC' => 90,
					'L' => 50,
					'XL' => 40,
					'X' => 10,
					'IX' => 9,
					'V' => 5,
					'IV' => 4,
					'I' => 1
				);
				$valorRomano = '';
				foreach ($romanos as $letra => $valor) {
					while ($numero >= $valor) {
						$valorRomano .= $letra;
						$numero -= $valor;
					}
				}
				return $valorRomano;
			}
		}

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$inicio = $_POST['inicio'];
			$fin = $_POST['fin'];
			if (!empty($inicio) && !empty($fin)) {
				if ($inicio <= $fin) {
					$numerosRomanos = new NumerosRomanos();
					$numerosRomanos->generarTabla($inicio, $fin);
				} else {
					echo "<p>El valor inicial no puede ser menor al valor final.</p>";
				}
			} else {
				echo "<p>Los campos no pueden estar vacíos.</p>";
			}
		}
	?>
</body>
</html>
