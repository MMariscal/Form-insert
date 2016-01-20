<HTML>
    <HEAD>
        <TITLE>Insertar.php</TITLE>
    </HEAD>
    <BODY>
        <?
        $query = $_POST['forminserta'];
        //Conexion con la base
        mysql_connect("localhost","root","");

        //selección de la base de datos con la que vamos a trabajar
        mysql_select_db("NTCSerie2");

        //Ejecucion de la sentencia SQL
        $query = mysql_query("INSERT INTO `pieza` (`idPIEZA`, `MODELO`, `MEDIDAS`, `USO`, `SERIE`, `COLOR`, `APLICACION`, `ESTILO`, `IMAGEN`, `OTROS`) VALUES (NULL, '$modelo', '$medidas', '$uso', '$serie', '$color', '$aplicacion', '$estilo', NULL, NULL)");

        ?>
        <h1><div align="center">Registro Insertado</div></h1>
        <div align="center"><a href="lectura.php">Visualizar el contenido de la base</a></div>
    </BODY>
</HTML>
