<?php
    /**
     * @author Luis Ferreras González
     * @version 19/12/2024
     * @since 19/12/2024
     */

    //Se cambia si se hace un cambio en la aplicación
    $fechaUltimaRevision= strtotime("19 December 2024");
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Index</title>
        <link type="text/css" rel="stylesheet" href="../webroot/estilos.css">
    </head>
    <body>
        <header>
            <h1>Desarrollo Web en Entorno Servidor</h1>
        </header>
        <footer>
            <a href="../index.html">Luis Ferreras</a>
            <a href="../208DWESProyectoDWES/indexProyectoDWES.php">DWES</a>
            <a href="https://github.com/LuisFerrGon/208DWESLoginLogoff" target="_blank">GitHub</a>
            <p>Última revisión: <?php echo(date('d/m/Y', $fechaUltimaRevision))?></p>
        </footer>
    </body>
</html>