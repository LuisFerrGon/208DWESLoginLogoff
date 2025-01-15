<?php
    /**
     * @author Luis Ferreras González
     * @version 1.0.0 Fecha última modificación del archivo: 15/01/2025
     * @since 1.0.0
     */
    /**
     * @var array $bienvenida Array que contiene el mensaje de bienvenida.
     */
    $mensaje=[
        'es'=>"Se está trabajando en esta página y no se encuentra disponible.",
        'en'=>"This page is being worked on and isn't available.",
        'pt'=>"pt wip"
    ];
?>
<div id="idiomas">
    <a href="?idioma=es" <?php if($idioma=="es"){echo "id='idiomaEscogido'";}?>>Español</a>
    <a href="?idioma=en" <?php if($idioma=="en"){echo "id='idiomaEscogido'";}?>>Inglés</a>
    <a href="?idioma=pt" <?php if($idioma=="pt"){echo "id='idiomaEscogido'";}?>>Portugués</a>
    <form>
        <input type="submit" name="volver" value="Volver">
    </form>
</div>
<div id="formulariologin">
    <h2>Registro de usuario</h2>
    <form name="plantilla" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" novalidate>
        <table>
            <tbody>
                <tr>
                    <td>
                        <label for="codigoUsuario">Código:</label>
                    </td>
                    <td>
                        <input type="text" id="codigoUsuario" name="codigoUsuario" class="obligatorio" required>
                    </td>
                    
                </tr>
                <tr>
                    <td>
                        <label for="contrasenaUsuario">Contraseña:</label>
                    </td>
                    <td>
                        <input type="password" id="contrasenaUsuario" name="contrasenaUsuario" class="obligatorio" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="descripcionUsuario">Descripción:</label>
                    </td>
                    <td>
                        <input type="text" id="descripcionUsuario" name="descripcionUsuario" class="obligatorio" required>
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td>
                        <input id="registro" name="registro" type="submit" value="Regiastrarse">
                    </td>
                </tr>
            </tfoot>
        </table>
    </form>
</div>
<div style='height: 30px'></div>