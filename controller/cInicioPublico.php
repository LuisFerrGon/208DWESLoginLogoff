<?php
    /**
     * @author Luis Ferreras González
     * @version 1.0.0 Fecha última modificación del archivo: 09/01/2025
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
    // Redirige a la página de login si se pulsa el botón
    if (isset($_REQUEST['login'])) {  
        $_SESSION['paginaEnCurso'] = 'login';
        header('Location: index.php');
        exit();
    }
    require_once $aVistas['layout'];
?>