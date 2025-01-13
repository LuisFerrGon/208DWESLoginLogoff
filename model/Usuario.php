<?php
    /**
     * @author Luis Ferreras González
     * @version 1.0.0 Fecha última modificación del archivo: 13/01/2025
     * @since 1.0.0
     */

    /**
     * 
     * @author Luis Ferreras González
     * @version 1.0.0 Fecha última modificación: 13/01/2025
     * @since 1.0.0
     */
    class Usuario extends UsuarioPDO{
        /**
         * @var string $codUsuario Cadena del código de usuario, max length=8.
         * @var string $password Cadena de la contraseña de usuario, max length=64.
         * @var string $descUsuario Cadena de la descripción de usuario, max length=255.
         * @var int $numAccesos Número de accesos de usuario.
         * @var datetime $fechaHoraUltimaConexion Fecha y hora de la última conexión.
         * @var datetime $fechaHoraUltimaConexionAnterior Fecha y hora de la conexión anterior.
         * @var string $perfil Cadena que tiene el valor de 'usuario' o de 'administrador'.
         * @var type $imagenUsuario
         * @var type $listaOpinionesUsuario
         */
        private $codUsuario,
                $password,
                $descUsuario,
                $numConexiones,
                $fechaHoraUltimaConexion,
                $fechaHoraUltimaConexionAnterior,
                $perfil,
                $imagenUsuario,
                $listaOpinionesUsuario;
        public function __construct(string $codUsuario, $password, $descUsuario, $numConexiones, $fechaHoraUltimaConexion, $fechaHoraUltimaConexionAnterior, $perfil, $imagenUsuario=null, $listaOpinionesUsuario=null){
            $this->codUsuario = $codUsuario;
            $this->password = $password;
            $this->descUsuario = $descUsuario;
            $this->numConexiones = $numConexiones;
            $this->fechaHoraUltimaConexion = $fechaHoraUltimaConexion;
            $this->fechaHoraUltimaConexionAnterior = $fechaHoraUltimaConexionAnterior;
            $this->perfil = $perfil;
            $this->imagenUsuario = $imagenUsuario;
            $this->listaOpinionesUsuario = $listaOpinionesUsuario;
        }
        public function getCodUsuario():string{
            return $this->codUsuario;
        }
        public function getPassword(){
            return $this->password;
        }
        public function getDescUsuario(){
            return $this->descUsuario;
        }
        public function getNumConexiones(){
            return $this->numConexiones;
        }
        public function getFechaHoraUltimaConexion(){
            return $this->fechaHoraUltimaConexion;
        }
        public function getFechaHoraUltimaConexionAnterior(){
            return $this->fechaHoraUltimaConexionAnterior;
        }
        public function getPerfil(){
            return $this->perfil;
        }
        public function getImagenUsuario(){
            return $this->imagenUsuario;
        }
        public function getListaOpinionesUsuario(){
            return $this->listaOpinionesUsuario;
        }
        public function setCodUsuario(string $codUsuario): void{
            $this->codUsuario = $codUsuario;
        }
        public function setPassword($password): void{
            $this->password = $password;
        }
        public function setDescUsuario($descUsuario): void{
            $this->descUsuario = $descUsuario;
        }
        public function setNumConexiones($numConexiones): void{
            $this->numConexiones = $numConexiones;
        }
        public function setFechaHoraUltimaConexion($fechaHoraUltimaConexion): void{
            $this->fechaHoraUltimaConexion = $fechaHoraUltimaConexion;
        }
        public function setFechaHoraUltimaConexionAnterior($fechaHoraUltimaConexionAnterior): void{
            $this->fechaHoraUltimaConexionAnterior = $fechaHoraUltimaConexionAnterior;
        }
        public function setPerfil($perfil): void{
            $this->perfil = $perfil;
        }
        public function setImagenUsuario($imagenUsuario): void{
            $this->imagenUsuario = $imagenUsuario;
        }
        public function setListaOpinionesUsuario($listaOpinionesUsuario): void{
            $this->listaOpinionesUsuario = $listaOpinionesUsuario;
        }
    }
?>