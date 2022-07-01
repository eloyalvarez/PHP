<!DOCTYPE html>
<html>
<head>
<title>Title of the document</title>
</head>

<body>

    <h2>Ejercicio 1</h2>
    <h3>Imprima por pantalla: “Hola mundo”.
    </h3>
    <?php
     echo "Hola Mundo";
    ?>

    <hr>

    <h2>Ejercicio 2</h2>
    <h3>Cargue en una variable la cadena de caracteres
         “Hola mundo” y luego la imprima por pantalla.
    </h3>
    <?php
     $hola = "Hola Mundo";
     echo $hola;
    ?>

    <hr>

    <h2>Ejercicio 3</h2>
    <h3>Crear dos variables enteras y mostrar por pantalla, la suma, 
        la resta, la multiplicación, la división
        entera y el resto de la división entera.
    </h3>
    <?php
     $numero1 = 7;
     $numero2 = 5;

     echo "<p> Número 1: 7";
     echo "<p> Número 2: 5";
     echo "<br>";
     echo "<p> Suma: "; 
     echo $numero1 + $numero2;
     echo "<p> Resta: "; 
     echo $numero1 - $numero2;
     echo "<p> Multipicación: "; 
     echo $numero1 * $numero2;
     echo "<p> División: "; 
     echo $numero1 / $numero2;
     echo "<p> Resto: "; 
     echo $numero1 % $numero2;

    ?>

    <hr>

    <h2>Ejercicio 4</h2>
    <h3>Realizar la transformación de grados Celsius a 
        Fahrenheit, para el valor 20°C y luego lo imprima por pantalla.
    </h3>
    <?php
     $celsius = 20;
     $farenheit = ($celsius * 9/5) + 32;
     echo $farenheit ;
    ?>

    <hr>

    <h2>Ejercicio 5</h2>
        <h3>Implementar algoritmos que permitan: </h3> 
        <h4> a) Calcular el perímetro y el área de un rectángulo,
        dado que su base es 18cm y su altura 12cm. </h4>
        <?php
         $base = 18;
         $altura = 12;
         $perimetro_rectangulo = 2 * ($base + $altura);
         $area_rectangulo = $base * $altura;
         echo "<p> Perímetro: "; 
         echo $perimetro_rectangulo;
         echo "<p> Área: ";
         echo $area_rectangulo;
        ?>

        <h4>b) Calcular el perímetro y el área de un círculo dado que
        su radio es de 30cm. </h4>
        <?php
        $radio = 30;
        $perimetro_circulo = 2 * 3.1415926535898 * $radio;
        $area_circulo = 3.1415926535898 * $radio**2;
        echo "<p> Perímetro: " ;
        echo$perimetro_circulo;
        
        echo "<p> Área: ";
        echo $area_circulo;
         ?>
 














</body>

</html>