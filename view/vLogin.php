<?php
    /**
     * @author Luis Ferreras González
     * @version 1.0.0 Fecha última modificación del archivo: 10/01/2025
     * @since 1.0.0
     */

    define('T_MAX_ALFABETICO', 8);
    define('T_MIN_ALFABETICO', 4);
    define('MAX_PASS', 8);
    define('MIN_PASS', 4);
?>
<form>
    <button type="submit" name="volver">Volver</button>
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
                        <input type="text" id="codigoUsuario" name="codigoUsuario" maxlength="<?php echo (T_MAX_ALFABETICO); ?>" minlength="<?php echo (T_MIN_ALFABETICO); ?>" style="background-color: lightyellow" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="contrasenaUsuario">Contraseña:</label>
                    </td>
                    <td>
                        <input type="password" id="contrasenaUsuario" name="contrasenaUsuario" maxlength="<?php echo (MAX_PASS); ?>" minlength="<?php echo (MIN_PASS); ?>" style="background-color: lightyellow" required>
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