<?php
/**
 * Conectamos a la base de datos
 */
$bd_host = "localhost";
$bd_nombre = "music";

$conexion=@mysqli_connect($bd_host, $bd_nombre) or die ("No puedo conectar a el Servidor de Base de Datos");

include_once("lib/tpl.inc.php");


$tpl = new tpl("");
?>