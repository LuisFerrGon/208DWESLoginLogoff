<?php
    /**
     * @author Luis Ferreras González
     * @version 1.0.0 Fecha última modificación del archivo: 09/01/2025
     * @since 1.0.0
     */

    /**
     * 
     * @author Luis Ferreras González
     * @version 1.0.0 Fecha última modificación: 09/01/2025
     * @since 1.0.0
     */
    class Usuario{
        /**
         * @var string $codUsuario Cadena del código de usuario, max length=8.
         * @var string $password Cadena de la contraseña de usuario, max length=64.
         * @var string $descUsuario Cadena de la descripción de usuario, max length=255.
         * @var int $numAccesos Número de accesos de usuario.
         * @var datetime $fechaHoraUltimaConexion Fecha y hora de la última conexión.
         * @var datetime $fechaHoraUltimaConexionAnterior Fecha y hora de la conexión anterior.
         * @var string $perfil Cadena que tiene el valor de 'usuario' o de 'administrador'.
         */
        private $codUsuario,
                $password,
                $descUsuario,
                $numAccesos,
                $fechaHoraUltimaConexion,
                $fechaHoraUltimaConexionAnterior,
                $perfil;
        public function __construct($codUsuario, $password, $descUsuario, $numAccesos, $fechaHoraUltimaConexion, $fechaHoraUltimaConexionAnterior, $perfil) {
            $this->codUsuario = $codUsuario;
            $this->password = $password;
            $this->descUsuario = $descUsuario;
            $this->numAccesos = $numAccesos;
            $this->fechaHoraUltimaConexion = $fechaHoraUltimaConexion;
            $this->fechaHoraUltimaConexionAnterior = $fechaHoraUltimaConexionAnterior;
            $this->perfil = $perfil;
        }
        public function getCodUsuario() {
            return $this->codUsuario;
        }
        public function getPassword() {
            return $this->password;
        }
        public function getDescUsuario() {
            return $this->descUsuario;
        }
        public function getNumAccesos() {
            return $this->numAccesos;
        }
        public function getFechaHoraUltimaConexion() {
            return $this->fechaHoraUltimaConexion;
        }
        public function getFechaHoraUltimaConexionAnterior() {
            return $this->fechaHoraUltimaConexionAnterior;
        }
        public function getPerfil() {
            return $this->perfil;
        }
        public function setCodUsuario($codUsuario): void {
            $this->codUsuario = $codUsuario;
        }
        public function setPassword($password): void {
            $this->password = $password;
        }
        public function setDescUsuario($descUsuario): void {
            $this->descUsuario = $descUsuario;
        }
        public function setNumAccesos($numAccesos): void {
            $this->numAccesos = $numAccesos;
        }
        public function setFechaHoraUltimaConexion($fechaHoraUltimaConexion): void {
            $this->fechaHoraUltimaConexion = $fechaHoraUltimaConexion;
        }
        public function setFechaHoraUltimaConexionAnterior($fechaHoraUltimaConexionAnterior): void {
            $this->fechaHoraUltimaConexionAnterior = $fechaHoraUltimaConexionAnterior;
        }
        public function setPerfil($perfil): void {
            $this->perfil = $perfil;
        }
    }
?>