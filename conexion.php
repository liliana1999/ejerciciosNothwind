<?php

$dbhost = "127.0.0.1:3308";
$dbuser = "root";
$dbpass = "";
$dbname = "northwind";
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
mysqli_set_charset($conn,'utf-8');
    //Chequea la conexion si es que da error
    //Mysqli_connect_error => Devuelve una cadena con la descripcion 
    //del ultimo error de conexion
    If (!$conn) {
        die("Connection failed: " . Mysqli_connect_error());
    }


?>
