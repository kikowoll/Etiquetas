<?php

$usu = "qadl648";
$pas = "Granavenida2";
$hos = "qadl648.area07aa.org";
$dbs = "qadl648";

$conexion = mysqli_connect($hos,$usu,$pas,$dbs);
if(!$conexion) {
    echo 'sin conexion :( ';
} else {
    $conexion->set_charset('utf-8');
}