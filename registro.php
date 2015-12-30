<?php

    include('consulta.php');

    //Configuracion de la conexion a base de datos
    $bd_host = "localhost";
    $bd_usuario = "user";
    $bd_password = "123456";
    $bd_base = "NTCSerie22";

    $conexion = mysql_connect($bd_host, $bd_usuario, $bd_password);

    mysql_select_db($bd_base, $con);

    //variables POST
    $nombre = $_POST['modelo'];
    $medidas = $_POST['medidas'];
    $uso = $_POST['uso'];
    $serie = $_POST['serie'];
    $color = $_POST['color'];
    $aplicacion = $_POST['aplicacion'];
    $estilo = $_POST['estilo'];
    $imagen = $_POST['imagen'];
    $otros = $_POST['otros'];

    //registra los datos del empleados
    $sql = "INSERT INTO pieza (modelo, medidas, uso, serie, color, aplicacion, estilo, imagen, otros) VALUES ('$modelo', '$medidas', '$uso', '$serie', '$color', '$aplicacion', '$estilo', '$imagen', '$otros')";
    mysql_query($sql, $conexion) or die('Error. '.mysql_error());

?>
