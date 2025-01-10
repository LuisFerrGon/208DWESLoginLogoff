<?php
    /**
     * @author Luis Ferreras González
     * @version 1.0.0 Fecha última modificación del archivo: 10/01/2025
     * @since 1.0.0
     */

    /**
     * 
     */
    class UsuarioPDO implements UsuarioDB{
        /**
         * Función para validar un usuario
         * 
         * Función para comprobar si existe un usuario dados el código y contraseña;
         * devuelve un objeto Usuario si existe y null si no o en caso de PDOException.
         * 
         * @param string $codigoUsuario El codigo del usuario a validar
         * @param string $contrasenaUsuario La contraseña sin codificar ni haber
         *                                  añadido el codigo de usuario
         * @return Usuario|null Devuelve un objeto usuario si existe, si no, null
         */
        public static function validarUsuario($codigoUsuario, $contrasenaUsuario) {
            $oUsuario=null;
            $consulta=<<<SQL
                SELECT * FROM T01_Usuario WHERE T01_CodUsuario='{$codigoUsuario}' 
                AND T01_Password=SHA2('{$codigoUsuario}{$contrasenaUsuario}', 256);
            SQL;
            $resultado=DBPDO::ejecutarConsulta($consulta);
            if($resultado!=null && !($resultado instanceof PDOException)){
                $oUsuario=new Usuario(
                    $resultado->T01_CodUsuario,
                    $resultado->T01_Password,
                    $resultado->T01_DescUsuario,
                    $resultado->T01_NumConexiones,
                    date_create("now"),
                    $resultado->T01_FechaHoraUltimaConexion,
                    $resultado->T01_Perfil
                );
            }
            return $oUsuario;
        }
        public static function altaUsuario(){
            
        }
        public static function modificarUsuario(){
            
        }
        public static function borarUsuario(){
            
        }
        public static function validarCodNoExiste(){
            
        }
    }
?>