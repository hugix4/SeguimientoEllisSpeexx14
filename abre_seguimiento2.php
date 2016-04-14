<?php 

// Parametros a configurar para la conexion de la base de datos 

$hotsdb = "mysql6.000webhost.com";    // Servidor BD 
$basededatos = "a6831370_h4";    // sera el valor de nuestra BD 

$usuariodb = "a6831370_h";    // sera el valor de nuestra BD 
$clavedb = "h0lamund0";    // sera el valor de nuestra BD 

$tabla = "CuestionarioFinal";    // sera el valor de una tabla 

// Fin de los parametros a configurar para la conexion de la base de datos 

$conexion_db = mysql_connect("$hotsdb","$usuariodb","$clavedb") 
    or die ("Conexión denegada, el Servidor de Base de datos que solicitas NO EXISTE"); 
    $db = mysql_select_db("$basededatos", $conexion_db) 
    or die ("La Base de Datos <b>$basededatos</b> NO EXISTE"); 
?> 

