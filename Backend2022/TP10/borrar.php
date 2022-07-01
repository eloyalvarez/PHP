<?php

$conexion = mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($conexion, "potrero");
$id = $_GET["id"];
$consulta = "DELETE FROM ropa WHERE id=$id";
mysqli_query($conexion, $consulta);

header("location:listar.php");
?>