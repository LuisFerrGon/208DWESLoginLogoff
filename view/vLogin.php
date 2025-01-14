<?php
    /**
     * @author Luis Ferreras González
     * @version 1.0.0 Fecha última modificación del archivo: 14/01/2025
     * @since 1.0.0
     */
?>
<form>
    <input type="submit" name="volver" value="Volver">
</form>
<div id="formulariologin">
    <h2>Log in</h2>
    <form name="plantilla" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" novalidate>
        <table>
            <tbody>
                <tr>
                    <td>
                        <label for="codigoUsuario">Usuario:</label>
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
            </tbody>
            <tfoot>
                <tr>
                    <td>
                        <input id="login" name="login" type="submit" value="Iniciar sesión">
                    </td>
                </tr>
            </tfoot>
        </table>
    </form>
</div>