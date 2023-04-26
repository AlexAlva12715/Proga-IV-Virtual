<!DOCTYPE html>
<html>
<head>
	<title>Calculadora de Impuestos</title>
</head>
<body>
	<h1>Calculadora de Impuesto!!!!</h1>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label for="precio">Precio del equipo:</label>
		<input type="number" id="precio" name="precio" min="0" step="0.01" required>
        <br><br>
		<label for="cantidad">Cantidad:</label>
		<input type="number" id="cantidad" name="cantidad" min="1" required>
        <br><br>
		<input type="submit" value="Calcular">
	</form>
	<br><br>

	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$precio = $_POST['precio'];
		$cantidad = $_POST['cantidad'];

		if ($precio && $cantidad) {
			$subtotal = $precio * $cantidad;
			$cesc = $subtotal * 0.05;
			$iva = $subtotal * 0.13;
			$total = $subtotal + $cesc + $iva;

			echo "<h2>Resumen de compra:</h2>";
			echo "PRECIO DEL EQUIPO: $" . number_format($precio, 2) . "<br><br>";
			echo "CANTIDAD: " . $cantidad . "<br><br>";
			echo "SUBTOTAL: $" . number_format($subtotal, 2) . "<br><br>";
			echo "CESC (5%): $" . number_format($cesc, 2) . "<br><br>";
			echo "IVA (13%): $" . number_format($iva, 2) . "<br><br>";
			echo "TOTAL A PAGAR: $" . number_format($total, 2) . "<br><br>";
		} else {
			echo "<p style='color: #FF0000;' >Debe ingresar un precio y una cantidad válidos.</p>";
		}
	}
	?>
</body>
</html>
