<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TOTAL</title>
  </head>
  <body>
    <h1>TOTAL</h1>
<table border="3">
<tr>
    <td><a href="index.php">INICIO</a></td>
    <td><a href="ben_1.php">BENEFICIOS 1</a></td>
    <td><a href="ben_2.php">BENEFICIOS 2</a></td>
</tr>
</table>
<?php
$conexion = new mysqli("localhost", "root", "", "beneficios");


//los gastos
$resultado = $conexion->query("SELECT gasto FROM gastos");

  $totalgastos=0;

  while ($fila=$resultado->fetch_assoc()){
  $totalgastos=$totalgastos+$fila["gasto"];
}

//las ventas
$resultado2 = $conexion->query("SELECT venta FROM ventas");

  $totalventas=0;

  while ($fila2=$resultado2->fetch_assoc()){
  $totalventas=$totalventas+$fila2["venta"];
  }


//final
  $beneficios=$totalgastos-$totalventas;
  echo "Los beneficios son: "  .$beneficios;

 ?>


  </body>
</html>
