<?php include("../template/header.php"); ?>

<?php

$conexion=mysqli_connect("127.0.0.1","root","");
 mysqli_select_db($conexion,"football_store");
$id = $_GET['id'];
$consulta = "SELECT * FROM ball WHERE id=$id";
$repuesta=mysqli_query ($conexion, $consulta);
$datos=mysqli_fetch_array($repuesta);

?>

<div class="col-md-5">
<?php
        $id=$datos["id"];
        $modelo=$datos["modelo"];
        $año=$datos["año"];
        $precio=$datos["precio"];
        $imagen=$datos['imagen'];?>

    <div class="card">
        <div class="card-header">
            Datos
        </div>
        <div class="card-body">

            <form method="post" enctype="multipart/form-data">
            
            <div class="form-group">
            <label>ID:</label>
            <input type="text" class="form-control" name="id"  placeholder="ID" value="<?php echo "$id";?>">
            </div>

            <div class="form-group">
            <label>Modelo:</label>
            <input type="text"class="form-control"name="modelo" placeholder="Modelo" value="<?php echo "$modelo";?>" >
            </div>

            <div class="form-group">
            <label>Año:</label>
            <input type="text"class="form-control"name="año"  placeholder="Año" value="<?php echo "$año";?>" >
            </div>

            <div class="form-group">
            <label>Precio:</label>
            <input type="text"class="form-control"name="precio" placeholder="Precio" value="<?php echo "$precio";?>" >
            </div>

            <div class="form-group">
            <label>Imagen:</label>
            <input type="file"class="form-control"name="imagen" placeholder="Imagen" >
            </div>

            <div class="btn-group"role="group"aria-label="">
            <button type="submit" name="agregar" action="agregar.php" value="Agregar" class="btn btn-success">Agregar</button>
            <button type="submit" name="guardar" value="Guardar" class="btn btn-success">Guardar</button> 
            <button type="submit" name="cancelar" value="Cancelar" class="btn btn-warning" formaction="productos.php">Cancelar</button>
            <button type="submit" name="borrar" value="Eliminar" class="btn btn-danger"  formaction="borrar.php"  >Eliminar</button>
            

            </div>

            </form>   
            <?php 
            
            if(array_key_exists('guardar',$_POST)){
            $id=$_POST['id'];
            $modelo=$_POST['modelo'];
            $año=$_POST['año'];
            $precio=$_POST['precio'];
            $imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
            $consulta = "UPDATE ball SET modelo='$modelo', año='$año', precio='$precio', imagen='$imagen' WHERE id=$id";
            mysqli_query($conexion,$consulta);
            header('location: productos.php');
          } ?>

        </div>
    </div>
</div>

<?php include("../template/footer.php"); ?>