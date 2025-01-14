<?php
    /**
     * @author Luis Ferreras González
     * @version 1.0.0 Fecha última modificación del archivo: 14/01/2025
     * @since 1.0.0
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
         * @author Luis Ferreras González
         * @version 1.0.0 Fecha última modificación: 14/01/2025
         * @since 1.0.0
         */
        public static function validarUsuario($codigoUsuario, $contrasenaUsuario){
            $oUsuario=null;
            $consulta=<<<SQL
                SELECT * FROM T01_Usuario WHERE T01_CodUsuario='{$codigoUsuario}' 
                AND T01_Password=SHA2('{$codigoUsuario}{$contrasenaUsuario}', 256);
            SQL;
            $resultado=DBPDO::ejecutarConsulta($consulta);
            if($resultado instanceof PDOException){
                return $resultado;
            }else{
                if($resultado!=null){
                    $oUsuario=new Usuario(
                        $resultado->T01_CodUsuario,
                        $resultado->T01_Password,
                        $resultado->T01_DescUsuario,
                        ($resultado->T01_NumConexiones)+1,
                        date_create("now"),
                        $resultado->T01_FechaHoraUltimaConexion,
                        $resultado->T01_Perfil
                    );
                }
            }
            return $oUsuario;
        }
        /**
         * Funcion para cambiar la ultima conexion y el numero de estas.
         * 
         * Funcion que cambia en la base de datos el numero de conexiones y la
         * fecha-hora de la ultima dado el usuario
         * 
         * @param Usuario $oUsuario Usuario al que se van a actualizar los datos
         * @author Luis Ferreras González
         * @version 1.0.0 Fecha última modificación: 14/01/2025
         * @since 1.0.0
         */
        public static function registrarUltimaConexion(Usuario $oUsuario){
            $sCodigo=$oUsuario->getCodUsuario();
            $sPassword=$oUsuario->getPassword();
            $iConexiones=$oUsuario->getNumConexiones();
            $dtUltimaConexion=$oUsuario->getFechaHoraUltimaConexion();
            $consulta=<<<SQL
                UPDATE T01_Usuario SET
                    T01_NumConexiones={$iConexiones},
                    T01_FechaHoraUltimaConexion='{$dtUltimaConexion->format('Y-m-d H:i:s')}'
                WHERE T01_CodUsuario='{$sCodigo}'
                AND T01_Password='{$sPassword}';
            SQL;
            $resultado=DBPDO::ejecutarConsulta($consulta);
            if($resultado instanceof PDOException){
                return $resultado;
            }
        }
        public static function buscarUsuarioPorCod($sCodigo){
        }
        public static function altaUsuario(){
        }
        public static function validarCodNoExiste(){
        }
        public static function modificarUsuario(){
        }
        public static function cambiarPassword(){
        }
        public static function borrarUSuario(){
        }
        public static function buscarUsuariosPorDesc(){
        }
        public static function creaOpinion(){
        }
        public static function modificaOpinion(){
        }
        public static function borraOpinion(){
        }
        public static function buscarOpinionUsuario(){
        }
    }
?>