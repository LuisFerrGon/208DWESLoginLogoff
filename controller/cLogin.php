<?php
    /**
     * @author Luis Ferreras González
     * @version 1.0.0 Fecha última modificación del archivo: 10/01/2025
     * @since 1.0.0
     */

    // Si la cookie está vacia se crea y se le pone un valor por defecto
    if(!isset($_COOKIE['idioma'])){
        setcookie('idioma', 'en', time()+60, '/');
    }
    // Si el idioma enviado está vacio o es null
    if (isset($_REQUEST['idioma'])) {	
        setcookie('idioma', $_REQUEST['idioma'], time() + 60, '/');
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit();
    }
    require_once $aVistas['layout'];
    require_once 'core/lValidacionFormularios.php';
    require_once 'config/confDB.php';
    if(isset($_REQUEST['login'])){
        $oUsuarioActivo=UsuarioPDO::validarUsuario($_REQUEST['codigoUsuario'], $_REQUEST['contrasenaUsuario']);
        if($oUsuarioActivo!=null){
            $_SESSION['usuarioDAW208LoginLogoff']=$oUsuarioActivo;
            $_SESSION['paginaEnCurso']='inicioPrivado';
            header('Location: index.php');
            exit();
        }
    }
?>