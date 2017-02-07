<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PRINCIPAL</title>
  </head>
  <body>
<h1>INICIO</h1>
<table border="3">
<tr>
<td><a href="total.php">TOTAL</a></td>
<td><a href="ben_1.php">BENEFICIOS 1</a></td>
<td><a href="ben_2.php">BENEFICIOS 2</a></td>
</tr>
</table>
<?php
$conexion = new mysqli("localhost", "root", "", "beneficios");


$resultado = $conexion->query("SELECT id, gasto, num_semana FROM gastos");

while ($fila=$resultado->fetch_assoc()){

echo "ID: ".$fila["id"]."</td>";
echo "<br>";
echo "Gastos: ".$fila["gasto"]."</td>";
echo "<br>";
echo "Numero Semana: ".$fila["num_semana"]."</td>";
echo "<br>";
echo "<hr>";
}
echo "<hr>";
echo "<hr>";
echo "<hr>";

$conexion = new mysqli("localhost", "root", "", "beneficios");


$resultado2 = $conexion->query("SELECT id, venta, num_semana FROM ventas");

while ($fila2=$resultado2->fetch_assoc()){

echo "ID: ".$fila2["id"]."</td>";
echo "<br>";
echo "Ventas: ".$fila2["venta"]."</td>";
echo "<br>";
echo "Numero Semana: ".$fila2["num_semana"]."</td>";
echo "<br>";
echo "<hr>";
}

 ?>



  </body>
</html>
