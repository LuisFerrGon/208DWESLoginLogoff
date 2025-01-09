<?php
    /**
     * @author Luis Ferreras González
     * @version 1.0.0 Fecha última modificación del archivo: 09/01/2025
     * @since 1.0.0
     */
?>
<div id="idiomas">
    <a href="?idioma=es" <?php if($idioma=="es"){echo "id='idiomaEscogido'";}?>>Español</a>
    <a href="?idioma=en" <?php if($idioma=="en"){echo "id='idiomaEscogido'";}?>>Inglés</a>
    <a href="?idioma=pt" <?php if($idioma=="pt"){echo "id='idiomaEscogido'";}?>>Portugués</a>
    <form>
        <button type="submit" name="login">Iniciar sesión</button>
    </form>
</div>
<img src="webroot/images/navegacion.PNG" alt="Mapa de la aplicación" id="mapaAplicacion"/>