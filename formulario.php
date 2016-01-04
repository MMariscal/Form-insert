<html>
  <head>
  <title>Inserción de piezas</title>
  <script language="JavaScript" type="text/javascript" src="ajax.js"></script>
  </head>
  <body>
		<form name="nueva_pieza" action="" onsubmit="enviarDatosPieza(); return false">
			<h2>Formulario Nuevas Piezas</h2>
				<table>
                    <tr>
                        <td>Modelo</td><td><label><input name="modelo" type="text" /></label></td>
                    </tr>
                    <tr>
                        <td>Medidas</td><td><label><input type="text" name="medidas"></label></td>
                    </tr>
                    <tr>
                        <td>Uso</td><td><label><input name="uso" type="text" /></label></td>
                    </tr>
                    <tr>
                        <td>Serie</td><td><label><input name="serie" type="text" /></label></td>
                    </tr>
                    <tr>
                        <td>Color</td><td><label><input name="color" type="text" /></label></td>
                    </tr>
                    <tr>
                        <td>Aplicación</td><td><label><input name="aplicacion" type="text" /></label></td>
                    </tr>
                    <tr>
                        <td>Estilo</td><td><label><input name="estilo" type="text" /></label></td>
                    </tr>
                    <tr>
                        <td>Imagen</td><td><label><input name="imagen" type="text" /></label></td>
                    </tr>
                    <tr>
                        <td>Otros</td><td><label><input name="otros" type="text" /></label></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td><td><label><input type="submit" name="Submit" value="Grabar" /></label>
                        <label><input type="submit" name="Reload" value="Recargar" onclick="avascript:location.reload()"/></label></td>
                    </tr>
                </table>
		</form>

		<div id="resultado"><?php include('consulta.php');?></div>

    </body>
</html>
