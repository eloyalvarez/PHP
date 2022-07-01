
<?php include("template/header.php"); ?>    
        <div class="jumbotron">
                <h1 class="display-3">Jumbo heading</h1>
                <p class="lead">Jumbo helper text</p>
                <hr class="my-2">
                <p>More info</p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Jumbo action name</a>
                </p>
            </div>    

            <section>
    <div class="container">
      <div class="row">

        <?php

        $conexion = mysqli_connect("127.0.0.1", "root", "");
        mysqli_select_db($conexion, "football_store");
        $consulta='SELECT * FROM ball';
        $datos= mysqli_query($conexion, $consulta);

        while ($reg = mysqli_fetch_array($datos)) {?>
          <div class="card col-sm-12 col-md-6 col-lg-3">
            <img class="card-img-top" src="data:image/jpg;base64, <?php echo base64_encode($reg['imagen'])?>" alt="" width="100%" height="70%")>
              <h3 class="card-title" style="width: 100%; font-size:25px;"><?php echo ucwords($reg['modelo']) ?></h3>
              <h3 class="card-title" style="width: 100%; font-size:25px;"><?php echo ucwords($reg['año']) ?></h3>
              <span>$ <?php echo $reg['precio']; ?></span>

          </div>

        <?php } ?>

      </div>
    </div>
  </section>
        
            










<?php include("template/footer.php"); ?>
