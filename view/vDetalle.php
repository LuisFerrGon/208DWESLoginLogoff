<?php
    /**
     * @author Luis Ferreras González
     * @version 1.0.0 Fecha última modificación del archivo: 14/01/2025
     * @since 1.0.0
     */
?>
<div id="idiomas">
    <a href="?idioma=es" <?php if($idioma=="es"){echo "id='idiomaEscogido'";}?>>Español</a>
    <a href="?idioma=en" <?php if($idioma=="en"){echo "id='idiomaEscogido'";}?>>Inglés</a>
    <a href="?idioma=pt" <?php if($idioma=="pt"){echo "id='idiomaEscogido'";}?>>Portugués</a>
    <form>
        <input type="submit" name="volver" value="Volver">
    </form>
</div>
<?php
    if(isset($_SESSION)){
        mostrarSuperglobal('$_SESSION', $_SESSION);
    }else{
        echo '<h2>La variable $_SESSION está vacia</h2>';
    }
    mostrarSuperglobal('$_COOKIE', $_COOKIE);
    mostrarSuperglobal('$_SERVER', $_SERVER);
    mostrarSuperglobal('$_REQUEST', $_REQUEST);
    mostrarSuperglobal('$_GET', $_GET);
    mostrarSuperglobal('$_POST', $_POST);
    mostrarSuperglobal('$_ENV', $_ENV);
    mostrarSuperglobal('$_FILES', $_FILES);
    phpinfo();
?>
<div style='height: 30px'></div>