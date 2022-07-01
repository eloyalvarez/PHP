<!DOCTYPE html>
<html>
<head>
<title>TP4</title>
</head>

<body>
<h2>Ejercicio 1</h2>
    <h3>Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro.</h3>
    <?php
    $pares= [2, 4, 6, 8, 10, 12, 14, 16, 18, 20];
    // print $pares[0]."<br>";
    // print $pares[1]."<br>"; 
    // print $pares[2]."<br>"; 
    // print $pares[3]."<br>"; 
    // print $pares[4]."<br>"; 
    // print $pares[5]."<br>"; 
    // print $pares[6]."<br>"; 
    // print $pares[7]."<br>"; 
    // print $pares[8]."<br>"; 
    // print $pares[9]."<br>"; 
    foreach ($pares as $valor) {
        print "<p>$valor</p>";
    }


    ?>

<hr>

<h2>Ejercicio 2</h2>
    <h3>Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la
    matriz. Mostrar el esquema del array con print_r().
</h3>
    <?php
    $datos= ["Pedro","Ana", 34, 1];
    print_r($datos);
    
    ?>

<hr>

<h2>Ejercicio 3</h2>
    <h3>Crear un array asociativo e introducir los siguientes valores: <br><br>
    Nombre: Pedro. <br>
    Apellido: Torres.<br>
    Dirección: Av. Mayor 3703 <br>
    Teléfono: 1122334455 <br>
    </h3>
    <?php
    $datos2= [
        'Nombre'=> "Pedro",
        'Apellido'=> "Torres",
        'Dirección'=> "Av Mayor 3703",
        'Teléfono'=> 1122334455,
    ];
    print_r($datos2);
    ?>


<hr>

<h2>Ejercicio 4</h2>
    <h3>Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y
    Chicago, sin asignar índices al array. A continuación, muestra el contenido del array.
    Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid.
</h3>
    <?php
    $Ciudades= ["Madrid", "Barcelona", "Londres", "Nueva York", "Los Angeles", "Chicago"];
    foreach ($Ciudades as $index => $valor); {
        echo "<p>La ciudad con el índice $index tiene el nombre $valor.</p>"; 
    }  
    

    ?>

<hr>

<h2>Ejercicio 5</h2>
    <h3>Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona,
    LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago.
    Ejemplo: El índice de Madrid es MD.</h3>

    <?php
         $Ciudades1=[
        'MD' => "Madrid",
        'BLC' =>"Barcelona",
        'LD' => "Londres",
        'NY' => "New York",    
        'LA' => "Los Ángeles",  
        'CCG' => "Chicago",     
     ];
     foreach ($Ciudades1 as $indice => $valor);{
         print "<p>El indice de $valor es $indice</p>";
        if ($indice==$Ciudades1);
     }

    //  print "<p> El índice de ". $Ciudades1['MD']. " es MD.</p>";
    //  print "<p> El índice de ". $Ciudades1['BLC']. " es BLC.</p>";
    //  print "<p> El índice de ". $Ciudades1['LD']. " es LD.</p>";
    //  print "<p> El índice de ". $Ciudades1['NY']. " es NY.</p>";
    //  print "<p> El índice de ". $Ciudades1['LA']. " es LA.</p>";
    //  print "<p> El índice de ". $Ciudades1['CCG']. " es CCG.</p>";


    ?>

<hr>



</body>

</html>

