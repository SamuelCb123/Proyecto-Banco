<?php
$usuario = "root";
$password = "";
$servidor = "localhost";
$basededatos = "ginkou";
$conexion= mysqli_connect($servidor,$usuario,$password)or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db($conexion, $basededatos) or die("No se ha poidido conectar al servidor de Base de datos");


?>