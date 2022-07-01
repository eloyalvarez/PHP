<!DOCTYPE html>
<html>
<head>
<title>TP2</title>
</head>

<body>
<h2>Ejercicio 1</h2>
    <h3>Crear una variable n y validar que sea un número positivo.
    </h3>
    <?php
     $n = 9; 
     echo "<p> n = ".$n ."<br>";
     if ($n > 0){
        echo "n es un número positivo.";
     }
    ?>

<hr>

<h2>Ejercicio 2</h2>
    <h3>Crear una variable n y validar que sea un número mayor a 1 y menor a 10.
    </h3>
    <?php
     $n = 7; 
     echo "<p> n = ";
     echo $n;
     echo "<br>";
     if ($n > 1 and $n < 10) {
        echo "n es un número mayor a 1 y menor a 10.";
     } 
            
    ?>

<hr>

<h2>Ejercicio 3</h2>
    <h3>Crear una variable n y validar que sea un número mayor a 10 o menor a 2.
    </h3>
    <?php
     $n = 66; 
     echo "<p> n = ";
     echo $n;
     echo "<br>";
     if ($n > 10 or $n < 2) {
        echo "n es un número mayor a 10 o menor a 2.";
     } 
      
    ?>

<hr>

<h2>Ejercicio 4</h2>
    <h3>Crear dos variables, una con nombre numero1 y 
        otra con el nombre de numero2. Si numero1 es
        mayor a numero2, mostrar por pantalla, la suma y 
        la resta. Si numero2 es mayor a numero1,
        mostrar por pantalla la multiplicación, la división 
        entera y el resto de la división. Si numero1 y
        numero2 son iguales, mostrar el siguiente mensaje “Los 
        números ingresados son iguales”.
    </h3>
    <?php
     $numero1  = 10;
     $numero2  = 3;
    
     echo "<p> numero 1 = ".$numero1;
     echo "<p> numero 2 = ".$numero2;
     echo "<br>";

     if ($numero1 > $numero2 ) {
        echo "<p> numero 1 + numero 2   = ". ($numero1 + $numero2);
        echo "<br>";
        echo "<p> numero 1 - numero 2   = ". ($numero1 - $numero2);
     } elseif ($numero1 < $numero2) {
        echo "<p> numero 2 * numero 1   = ". ($numero2 * $numero1);
        echo "<br>";
        echo "<p> numero 2 / numero 1   = ". ($numero2 / $numero1);
        echo "<br>";
        echo "<p> numero 2 % numero 1   = ". ($numero2 % $numero1);
        echo "<br>";
     } else  {
        echo "<p> Los números ingresados son iguales.";
     }

    ?>

    










</body>

</html>