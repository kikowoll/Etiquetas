<?php

$usu = "usuario";
$pas = "password";
$hos = "host";
$dbs = "bbdds";

$conexion = mysqli_connect($hos,$usu,$pas,$dbs);
if(!$conexion) {
    echo 'sin conexion :( ';
} else {
    $conexion->set_charset('utf-8');
}
