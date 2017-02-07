<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>BENEFIICIOS 2</h1>
<table border="3">
    <tr>
    <td><a href="index.php">INICIO</a></td>
    <td><a href="total.php">TOTAL</a></td>
    <td><a href="ben_1.php">BENEFICIOS 1</a></td>
    </tr>
</table>
<?php
$conexion = new mysqli("localhost", "root", "", "beneficios");

//gastos semana 2
$resultado = $conexion->query("SELECT id, gasto, num_semana FROM gastos WHERE num_semana=2");

    echo "<table border=2>";
    echo "<th>ID</th>";
    echo "<th>GASTOS</th>";
    echo "<th>NUM SEMANA</th>";
    $totalgastos=0;
    while ($fila=$resultado->fetch_assoc()){
    $totalgastos=$totalgastos+$fila["gasto"];
    echo "<tr>";
    echo "<td>" .$fila["id"]."</td>";
    echo "<td>" .$fila["gasto"]."</td>";
    echo "<td>" .$fila["num_semana"]."</td>";
    }
    echo "</table>";

//ventas semana 2

  $resultado2 = $conexion->query("SELECT id, venta, num_semana FROM ventas WHERE num_semana=2");

    echo "<table border=2>";
    echo "<th>ID</th>";
    echo "<th>VENTAS</th>";
    echo "<th>NUM SEMANA</th>";
    $totalventas=0;
    while ($fila2=$resultado2->fetch_assoc()){
    $totalventas=$totalventas+$fila2["venta"];
    echo "<tr>";
    echo "<td>" .$fila2["id"]."</td>";
    echo "<td>" .$fila2["venta"]."</td>";
    echo "<td>" .$fila2["num_semana"]."</td>";
    }
    echo "</table>";


$beneficio=$totalgastos-$totalventas;
echo "Beneficio: " .$beneficio;

 ?>


  </body>
</html>
