<?php
require('conexion.php');

$id_recibido = $_GET["id_enviado"];

$consulta = "DELETE from peliculas WHERE id = '$id_recibido'";
$resultado = mysqli_query($conexion,$consulta);

header('location: index.php');

?>