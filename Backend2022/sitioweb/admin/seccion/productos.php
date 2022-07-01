<?php include("../template/header.php"); ?>

    <div class="col-md-12">
     <table class="table table-bordered">
        <thead>
       
            <tr>
                <th>ID</th>
                <th>Modelo</th>
                <th>Año</th>
                <th>Precio</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php     
        $conexion = mysqli_connect("127.0.0.1", "root", "");
        mysqli_select_db($conexion, "football_store");
        $consulta='SELECT * FROM ball';
        $datos= mysqli_query($conexion, $consulta);

        while ($reg=mysqli_fetch_array($datos)) { ?>
            <tr>
                <td><?php echo $reg['id']; ?></td>
                <td><?php echo $reg['modelo']; ?></td>
                <td><?php echo $reg['año']; ?></td>
                <td><?php echo $reg['precio']; ?></td>
                <td><img src="data:image/png;base64, <?php echo base64_encode($reg['imagen'])?>" alt="" width="50px" height="50px"></td>
                <td><a href="modificar.php?id=<?php echo $reg['id'];?>">Modificar</a></td>
                <td><a href="modificar.php?id=<?php echo $reg['id'];?>">Borrar</a></td>
            </tr>
            <?php } ?>
        </tbody>
     </table>   
    </div>


<?php include("../template/footer.php"); ?>