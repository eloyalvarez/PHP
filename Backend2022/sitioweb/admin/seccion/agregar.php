<?php include("../template/header.php"); ?>

<?php

$conexion = mysqli_connect("127.0.0.1","root","");
mysqli_select_db($conexion,"football_store");

$id=$_POST['id'];
$modelo=$_POST['modelo'];
$año=$_POST['año'];
$precio=$_POST['precio'];
$imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

$consulta = "INSERT INTO ball (id,modelo,año,precio,imagen)
        VALUES ('','$modelo','$año','$precio','$imagen')";

  mysqli_query($conexion,$consulta);
  header('location: productos.php');
?>



























<?php include("../template/footer.php"); ?>