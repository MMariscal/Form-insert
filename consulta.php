<?php

    //Configuracion de la conexion a base de datos
    $bd_host = "localhost";
    $bd_usuario = "user";
    $bd_password = "123456";
    $bd_base = "NTCSerie22";

	$con = mysql_connect($bd_host, $bd_usuario, $bd_password);
	mysql_select_db($bd_base, $con);

    //consulta todos los empleados
    $sql=mysql_query("SELECT * FROM pieza", $con);
?>

<table style="color:#000099;width:400px;">
	<tr style="background:#9BB;">
		<td>Modelo</td>
		<td>Medidas</td>
		<td>Uso</td>
		<td>Serie</td>
		<td>Color</td>
		<td>Aplicacion</td>
		<td>Estilo</td>
		<td>Imagen</td>
		<td>Otros</td>
	</tr>

<?php
    while($row = mysql_fetch_array($sql)){
        echo "<tr>";
        echo "<td>".$row['modelo']."</td>";
        echo "<td>".$row['medidas']."</td>";
        echo "<td>".$row['uso']."</td>";
        echo "<td>".$row['serie']."</td>";
        echo "<td>".$row['color']."</td>";
        echo "<td>".$row['aplicacion']."</td>";
        echo "<td>".$row['estilo']."</td>";
        echo "<td>".$row['imagen']."</td>";
        echo "<td>".$row['otros']."</td>";
        echo "</tr>";
    }
?>
</table>
