<?php
    /**
     * @author Luis Ferreras González
     * @version 08/01/2025
     * @since 19/12/2024
     */
    //Configuración de la aplicación
    require_once 'config/confAPP.php';
    //Configuración de la base de datos
    require_once 'config/confDB.php';
    //Se crea o inicia la sesión
    session_start();
    //Si no hay pagina en cuso en la sesion se asigna una
    if(!isset($_SESSION['paginaEnCurso'])){
        $_SESSION['paginaEnCurso']='inicioPublico';
    }
    //Se carga la página
    require_once $aControladores[$_SESSION['paginaEnCurso']];
?>