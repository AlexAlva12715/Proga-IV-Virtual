<html>
<head>
<title>Calculadora de Pago</title>
</head>
<body>

<h1>Calculadora de Pago</h1>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Cantidad de productos: <input type="number" name="cantidad" min="1" required><br><br>
  Precio por producto: $<input type="number" name="precio" min="0" step="0.01" required><br><br>
  <input type="submit" name="submit" value="Calcular">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $cantidad = $_POST["cantidad"];
  $precio = $_POST["precio"];

  // Calcular subtotal
  $subtotal = $cantidad * $precio;

  // Calcular CESC
  $cesc = $subtotal * 0.05;

  // Calcular IVA
  $iva = $subtotal * 0.13;

  // Calcular total
  $total = $subtotal + $cesc + $iva;

  // Mostrar resultados
  echo "<br>";
  echo "Subtotal: $" . number_format($subtotal, 2) . "<br>";
  echo "CESC: $" . number_format($cesc, 2) . "<br>";
  echo "IVA: $" . number_format($iva, 2) . "<br>";
  echo "Total a pagar: $" . number_format($total, 2) . "<br>";
}
?>

</body>
</html>
