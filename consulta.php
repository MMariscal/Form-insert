<?php

    //Configuracion de la conexion a base de datos
    $bd_host = "localhost";
    $bd_usuario = "user";
    $bd_password = "123456";
    $bd_base = "NTCSerie2";

	$con = mysql_connect($bd_host, $bd_usuario, $bd_password);
	mysql_select_db($bd_base, $con);

    //consulta todos los empleados
    $sql=mysql_query("SELECT * FROM pieza", $con);
?>

<table id="consulta">
	<tr id="trconsulta">
	    <td>idPIEZA</td>
		<td>MODELO</td>
		<td>MEDIDAS</td>
		<td>USO</td>
		<td>SERIE</td>
		<td>COLOR</td>
		<td>APLICACION</td>
		<td>ESTILO</td>
		<td>IMAGEN</td>
		<td>OTROS</td>
	</tr>

<?php
    while($row = mysql_fetch_array($sql)){
        echo "<tr>";
        echo "<td>".$row['idPIEZA']."</td>";
        echo "<td>".$row['MODELO']."</td>";
        echo "<td>".$row['MEDIDAS']."</td>";
        echo "<td>".$row['USO']."</td>";
        echo "<td>".$row['SERIE']."</td>";
        echo "<td>".$row['COLOR']."</td>";
        echo "<td>".$row['APLICACION']."</td>";
        echo "<td>".$row['ESTILO']."</td>";
        echo "<td>".$row['IMAGEN']."</td>";
        echo "<td>".$row['OTROS']."</td>";
        echo "</tr>";
    }
?>
</table>
