<?php
$user = $_POST["user"];
$pass = $_POST["pass"];
$usuario = "admin";
$contra = "1234";

if( $usuario == $user && $contra == $pass ) {
    header("location:https://www.youtube.com/");
} else {
    header("location");
}

?>