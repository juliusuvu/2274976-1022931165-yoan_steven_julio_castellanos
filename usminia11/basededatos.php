<?php

$servidor="localhost"; //11.127.0.0.1
$usuario="root";
$contrasenia="";

try{

$conexion=new PDO("mysq:host=$servidor;dbname=album",$usuario,$contrasenia)
$conexion->setAtrributter(PDO :: ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
excho"conexion establecida";
}catch(PDOexeption $error){
    echo "conexion erronea".$error;
}



?>