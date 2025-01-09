<?php
    /**
     * @author Luis Ferreras González
     * @version 1.0.0 Fecha última modificación del archivo: 09/01/2025
     * @since 1.0.0
     */
    $idioma=isset($_COOKIE['idioma']) ? $_COOKIE['idioma'] : 'en';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Index</title>
        <link type="text/css" rel="stylesheet" href="webroot/estilos.css">
    </head>
    <body>
        <header>
            <h1>Desarrollo Web en Entorno Servidor</h1>
        </header>
        <main>
            <?php require_once $aVistas[$_SESSION['paginaEnCurso']];?>
        </main>
        <footer>
            <a href="../index.html">Luis Ferreras</a>
            <a href="../208DWESProyectoDWES/indexProyectoDWES.php">DWES</a>
            <a href="https://github.com/LuisFerrGon/208DWESLoginLogoff" target="_blank">GitHub</a>
            <p>Última revisión: <?php echo(date('d/m/Y', strtotime("09 January 2025")))?></p>
        </footer>
    </body>
</html>