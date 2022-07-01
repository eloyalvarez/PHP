<!DOCTYPE html>
<html>
<head>
<title>TP3</title>
</head>

<body>
<h2>Ejercicio 1</h2>
    <h3>Mostrar los números del 1 al 100.</h3>
    <?php
     $i = 1; 
     while ($i < 101) {
         print "<center>$i.<br>\n</center>";
         $i++;
     } 
    ?>

<hr>

<h2>Ejercicio 2</h2>
    <h3>Mostrar los números del 100 al 1.</h3>
    <?php
     $i = 100; 
     while ($i > 0) {
         print "<center>$i.<br>\n</center>";
         $i--;
     } 
    ?>

<hr>

<h2>Ejercicio 3</h2>
    <h3>Mostrar los números pares del 1 al 100.</h3>
    <?php
     $i = 2; 
     while ($i <= 100) {
         print "<center>$i.<br>\n</center>";
         $i+=2;
     } 
    ?>

<hr>

<h2>Ejercicio 4</h2>
    <h3>Mostrar los números impares del 1 al 100.</h3>
    <?php
     $i = 1; 
     while ($i <= 100) {
         print "<center>$i.<br>\n</center>";
         $i+=2;
     } 
    ?>

<hr>

<h2>Ejercicio 5</h2>
    <h3>Mostrar la suma de los números de 1 a 20.</h3>
    <?php
     $resultado = 0;
     for ($i = 1; $i <= 20; $i++) {
     $resultado = $resultado + $i;
     print "<center>$resultado.<br>\n</center>";
    
     }
    ?>

<hr>

<h2>Ejercicio 6</h2>
    <h3>Mostrar la suma de números pares de 1 a 20.</h3>
    <?php
     $resultado = 0;
     for ($i = 2; $i <= 20; $i+=2) {
     $resultado = $resultado + $i;
     print "<center>$resultado.<br>\n</center>";
    
     }
    ?>

<hr>




















</body>

</html>