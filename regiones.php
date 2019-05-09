<?php

//require manda un error 
//si no encuentra el archivo  
require "conexion.php";
//hace un llamado a la consulta
$consulta = mysqli_query($conn,"Select * from regiones");
//mysqli_num_assoc obtiene un array asociativo de una fila
//mysqli_num_assoc siempre te genera solo un resultado
$row = mysqli_fetch_assoc($consulta);
echo "<h1 align='center'> Primera Fila de la Tabla Regiones </h1>";
echo "<table border='1'>";
echo "<tr>";
echo "<th>IdRegion</th><th>Descripcion Region </th>";
echo "</tr>";

//cuando se usa mysqli_fetch_assoc se debe de escribir el nombre
//del campo exactamente como fue creado. (sensible a mayuscula y
//minuscula)

echo "<tr>";
echo "<td>" . $row["IdRegion"]."</td>" .
"<td>" . $row["DescripcionRegion"];

echo "</table>";

?>
