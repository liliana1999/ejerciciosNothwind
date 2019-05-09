<?php

//require manda un error
//si no encuentra el archivo 
require "conexion.php";
//hace un llamado a la consulta 
$consulta = mysqli_query($conn,"select * from pedidos");

//mysqli_num_rows obtiene el numero de registros 
$row= mysqli_num_rows($consulta);
echo "<h1 align='center'> Consulta de Tabla pedidos </h1> ";
echo "<table border='1' align='center'>";
echo "<tr>";
echo "<th>Idpedidos</th><th>Idempleado</th><th>Fechapedido</th>
<th>fechaentrega</th><th>FechaEnvio</th><th>EnviadoVia</th><th>Flete</th><th>NombreDestinatario</th>
<th>DireccionDestinatario</th><th>CiudadDestino</th><th>CodigoPostalDestinatario</th><th>PaisDestino</th>";
echo "</tr>";
while($row = mysqli_fetch_array($consulta)){
    echo "<tr>";
    echo "<td>".$row[0]."</td>"."<td>".$row[1]."</td>".
    "<td>".$row[2]."</td>"."<td>".$row[3]."</td>";
    "<td>".$row[4]."</td>"."<td>".$row[5]."</td>";
    "<td>".$row[6]."</td>"."<td>".$row[7]."</td>";
    "<td>".$row[8]."</td>"."<td>".$row[9]."</td>";
    "<td>".$row[10]."</td>"."<td>".$row[11]."</td>";
    "<td>".$row[12]."</td>"."<td>".$row[13]."</td>";
    echo "</tr>";
}
echo "<table>"
?>
