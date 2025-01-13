<?php
    /**
     * @author Luis Ferreras González
     * @version 1.0.0 Fecha última modificación del archivo: 13/01/2025
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
    if (isset($_REQUEST['cerrarsesion'])) {  
        $_SESSION['paginaEnCurso'] = 'inicioPublico';
        header('Location: index.php');
        exit();
    }
    
    $idioma=isset($_COOKIE['idioma']) ? $_COOKIE['idioma'] : 'en';
    $oUsuarioActivo=$_SESSION['usuarioDAW208LoginLogoff'];
        $descripcion=$oUsuarioActivo->getDescUsuario();
        $fecha=strtotime($oUsuarioActivo->getFechaHoraUltimaConexionAnterior());
        $conexiones=$oUsuarioActivo->getNumConexiones();
    $bienvenida=[
        'es'=>[
           0=>"¡Bienvenido ".$descripcion."! Esta es la primera vez que te conectas.",
           1=>"¡Bienvenido de nuevo ".$descripcion."! Esta es la ".$conexiones."ª vez que te conectas, te conectaste por última vez el ".date('d/m/Y H:i:s', $fecha)
        ],
        'en'=>[
           0=>"Welcome ".$descripcion."! This is the first time you log in.",
           1=>"Welcome again ".$descripcion."! You have logged in ".$conexiones." times, last time was ".date('m/d/Y H:i:s', $fecha)
        ],
        'pt' => [
            0 => "Bem-vindo ".$descripcion."! Esta é a primeira vez que você se conecta.",
            1 => "Bem-vindo de volta ".$descripcion."! Esta é a ".$conexiones." vez que você se conecta, e você se conectou pela última vez em ".date('d/m/Y H:i:s', $fecha)
        ]
    ];
    require_once $aVistas['layout'];
?>