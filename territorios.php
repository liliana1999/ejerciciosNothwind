<?php

//Require manda un error fatal y detiene la ejecucion
//del programa si no se encuentra el archivo conexion.php

require "conexion.php";

//hace un llamado a una consulta

$consulta = mysqli_query($conn,"Select * from Territorios");

//mysqli_num_rows obtiene el numero de registros 

$filas = mysqli_num_rows($consulta);
echo "<h1 align= 'center'> Tabla Empleados </h1>";
echo "<h1> cantidad de registro : " .$filas . " <br></h1>";
echo "<Table border='1'>";
echo "<tr>";
echo "<th>IdTerritorio</th><th>DescripcionTerritorio</th><th>IdRegion</th>";
echo "</tr>";
while ($row = mysqli_fetch_array($consulta)) {
    echo "<tr>";
    echo "<td>".$row[0] ."</td>"."<td>".$row[1] ."</td>"."<td>".$row[2] ."</td>";
    echo "</tr>";
}
echo "</table>"
?>
