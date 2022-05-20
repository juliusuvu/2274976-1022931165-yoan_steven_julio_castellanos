<?php
session_start();

$_SESSION["usuario"]="hacelol";

$_SESSION["estatus"]="logueado";

echo "Sesion Iniciada".":<br/>";

echo "Usuario: ".$_SESSION["usuario"]."estatus: ".$_SESSION["estatus"];


?>