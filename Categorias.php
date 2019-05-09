<?php

//require manda un error
//si no encuentra el archivo 
require "conexion.php";
//hace un llamado a la consulta 
$consulta = mysqli_query($conn,"select * from categorias");

//mysqli_num_rows obtiene el numero de registros 
$row= mysqli_num_rows($consulta);
echo "<h1 align='center'> Consulta de Tabla Categorias </h1> ";
echo "<table border='1' align='center'>";
echo "<tr>";
echo "<th>IdCategoria</th><th>NombreCategoria</th><th>Descripcion</th>
<th>Imagen</th>";
echo "</tr>";
while($row = mysqli_fetch_array($consulta)){
    echo "<tr>";
    echo "<td>".$row[0]."</td>"."<td>".$row[1]."</td>".
    "<td>".$row[2]."</td>"."<td>".$row[3]."</td>";
    echo "</tr>";
}
echo "<table>"
?>
