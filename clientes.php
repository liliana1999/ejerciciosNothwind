<?php

//Require manda un error fatal y detiene la ejecucion
//del programa si no se encuentra el archivo conexion.php

require "conexion.php";

//hace un llamado a una consulta

$consulta = mysqli_query($conn,"Select * from clientes");

//mysqli_num_rows obtiene el numero de registros 

$filas = mysqli_num_rows($consulta);
echo "<h1 align= 'center'> Tabla Clientes </h1>";
echo "<h1> cantidad de registro : " .$filas . " <br></h1>";
echo "<Table border='1'>";
echo "<tr>";
echo "<th>IdCliente</th><th>NombreCompania</th><th>NombreContacto</th>
<th>CargoContacto</th><th>Direccion</th><th>Ciudad</th><th>Region</th>
<th>CodigoPostal</th><th>Pais</th><th>Telefono</th><th>Fax</th>";
echo "</tr>";
while ($row = mysqli_fetch_array($consulta)) {
    echo "<tr>";
    echo "<td>".$row[0] ."</td>"."<td>".$row[1] ."</td>"."<td>".$row[2] ."</td>"
    ."<td>".$row[3] ."</td>"."<td>".$row[4] ."</td>"."<td>".$row[5] ."</td>".
    "<td>".$row[6] ."</td>"."<td>".$row[7] ."</td>"."<td>".$row[8] ."</td>".
    "<td>".$row[9] ."</td>"."<td>".$row[10] ."</td>";
    echo "</tr>";
}
echo "</table>"
?>
