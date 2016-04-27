<?php
require_once ("conexion.class.php");

$numero = htmlspecialchars($_GET["numero"],ENT_QUOTES);

$obj1 = new conexion();

$var = "INSERT INTO Numeros (idNumero, Numero) VALUES (NULL,".$numero."); ";

$obj1->ejecutar_sentencia($var);

echo "Conexion exitosa :)";

?>