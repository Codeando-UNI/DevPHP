<?php
require_once ("conexion.class.php");
$dato1 = htmlspecialchars($_GET["dato1"],ENT_QUOTES);
$dato2 = htmlspecialchars($_GET["dato2"],ENT_QUOTES);
$dato3 = htmlspecialchars($_GET["dato3"],ENT_QUOTES);
$obj1 = new conexion();
$var = "INSERT INTO numeros2 (idnumeros2, numeros21, numeros22,numeros23) VALUES (NULL,".$dato1.",".$dato2.",".$dato3."); ";
$obj1->ejecutar_sentencia($var);
echo "Conexion exitosa :)";
echo ".$dato1.";
?>