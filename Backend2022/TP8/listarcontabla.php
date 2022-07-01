<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
</head>
<body>
    <h1>Tienda de ropa</h1>
    <br>
    <button type="submit"><ahref="index.html">Inicio </a></button>
    <button type="submit"><a href="listar.php"> Listar ropa </a></button>
    <button type="submit"><a href=""> Agregar ropa </a></button>

    <h2>Lista de ropa</h2>
    <p>La siguiente lista muestra los datos de la ropa actualmente en stock.</p>

    <table border= 1px>

    <tr>
        <th>ID</th>
        <th>TIPO DE PRENDA</th>
        <th>MARCA</th>
        <th>TALLE</th>
        <th>PRECIO</th>
        <th>IMAGEN</th>
        <th>EDITAR</th>
        <th>BORRAR</th>
    </tr>




    <?php
    $conexion = mysqli_connect("127.0.0.1", "root", "");
    $consulta='SELECT * FROM ropa';
    mysqli_select_db($conexion, "potrero");
    $datos= mysqli_query($conexion, $consulta);
    ?>

    <h4>    a. Listar todos los registros </h4>
        <?php
        while ($a=mysqli_fetch_array($datos)) { 
        ?>

            <tr>
    
            <td><?php echo $a['id']; ?></td>
            <td><?php echo $a['tipo de prenda']; ?></td>
            <td><?php echo $a['marca']; ?></td>
            <td><?php echo $a['talle']; ?></td>
            <td><?php echo $a['precio']; ?></td>
    
            </tr>
        <?php } ?>

    </table>
        <h4>    b. Listar todos los registros cuyo tipo de prenda sea ‘buzo’ </h4>
        <table border= 1px>

        <tr>
            <th>ID</th>
            <th>TIPO DE PRENDA</th>
            <th>MARCA</th>
            <th>TALLE</th>
            <th>PRECIO</th>
            <th>IMAGEN</th>
            <th>EDITAR</th>
            <th>BORRAR</th>
        </tr>
        <?php
          $consultab="SELECT * FROM `ropa` WHERE `tipo de prenda` LIKE 'buzo'";
          mysqli_select_db($conexion, "potrero");
          $datosb= mysqli_query($conexion, $consultab);
            ?>
        <?php
            while ($b=mysqli_fetch_array($datosb)) { 
         ?>       

            <tr>
    
            <td><?php echo $b['id']; ?></td>
            <td><?php echo $b['tipo de prenda']; ?></td>
            <td><?php echo $b['marca']; ?></td>
            <td><?php echo $b['talle']; ?></td>
            <td><?php echo $b['precio']; ?></td>
    
            </tr>
        <?php } ?>
            


    </table>


        <h4>    c. Listar todos los registros cuya marca sea ‘nike’ </h4>
        <table border= 1px>

        <tr>
            <th>ID</th>
            <th>TIPO DE PRENDA</th>
            <th>MARCA</th>
            <th>TALLE</th>
            <th>PRECIO</th>
            <th>IMAGEN</th>
            <th>EDITAR</th>
            <th>BORRAR</th>
        </tr>
        <?php
          $consultab="SELECT * FROM `ropa` WHERE `marca` LIKE 'nike'";
          mysqli_select_db($conexion, "potrero");
          $datosb= mysqli_query($conexion, $consultab);
            ?>
        <?php
            while ($b=mysqli_fetch_array($datosb)) { 
         ?>       

            <tr>
    
            <td><?php echo $b['id']; ?></td>
            <td><?php echo $b['tipo de prenda']; ?></td>
            <td><?php echo $b['marca']; ?></td>
            <td><?php echo $b['talle']; ?></td>
            <td><?php echo $b['precio']; ?></td>
    
            </tr>
        <?php } ?>
            
      </table>

      <h4>    d. Listar todos los registros cuyo precio sea mayor a ‘500’ </h4>
        <table border= 1px>

        <tr>
            <th>ID</th>
            <th>TIPO DE PRENDA</th>
            <th>MARCA</th>
            <th>TALLE</th>
            <th>PRECIO</th>
            <th>IMAGEN</th>
            <th>EDITAR</th>
            <th>BORRAR</th>
        </tr>
        <?php
          $consultab="SELECT * FROM `ropa` WHERE `precio` > 500 ";
          mysqli_select_db($conexion, "potrero");
          $datosb= mysqli_query($conexion, $consultab);
            ?>
        <?php
            while ($b=mysqli_fetch_array($datosb)) { 
         ?>       

            <tr>
    
            <td><?php echo $b['id']; ?></td>
            <td><?php echo $b['tipo de prenda']; ?></td>
            <td><?php echo $b['marca']; ?></td>
            <td><?php echo $b['talle']; ?></td>
            <td><?php echo $b['precio']; ?></td>
    
            </tr>
        <?php } ?>
            


  </table>





</body>
</html>
