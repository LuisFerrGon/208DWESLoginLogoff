<?php
    /**
     * @author Luis Ferreras González
     * @version 1.0.0 Fecha última modificación del archivo: 15/01/2025
     * @since 1.0.0
     */

    if(isset($_REQUEST['volver'])){
        $_SESSION['paginaEnCurso']=$_SESSION['paginaAnterior'];
        $_SESSION['paginaAnterior']='registro';
        header('Location: index.php');
        exit();
    }
    $idioma=isset($_COOKIE['idioma']) ? $_COOKIE['idioma'] : 'en';
    require_once $aVistas['layout'];require_once $aVistas['layout'];
    require_once 'core/lValidacionFormularios.php';
    require_once 'config/confDB.php';
    
    define('OBLIGATORIO', 1);
    define('MAX_CODIGO', 8);
    define('MIN_CODIGO', 4);
    define('MAX_PASS', 8);
    define('MIN_PASS', 4);
    define('MAX_DESC', 255);
    define('MIN_DESC', 4);
    define('DEBIL', 1); //La contraseña admite solo letras
    //Array donde recogemos los mensajes de error
    $aErrores=[
        'codigoUsuario' => '',
        'contrasenaUsuario' => '',
        'descripcionUsuario' => ''
    ];
    
    if(isset($_REQUEST['login'])){
        $aErrores['codigoUsuario']=validacionFormularios::comprobarAlfabetico($_REQUEST['codigoUsuario'], MAX_CODIGO, MIN_CODIGO, OBLIGATORIO);
        $aErrores['contrasenaUsuario']=validacionFormularios::validarPassword($_REQUEST['contrasenaUsuario'], MAX_PASS, MIN_PASS, DEBIL, OBLIGATORIO);
        $aErrores['descripcionUsuario']=validacionFormularios::comprobarAlfabetico($_REQUEST['descripcionUsuario'], MAX_DESC, MIN_DESC, OBLIGATORIO);
        if($aErrores['codigoUsuario']==null && $aErrores['contrasenaUsuario']==null){
            $oUsuarioActivo=UsuarioPDO::validarUsuario($_REQUEST['codigoUsuario'], $_REQUEST['contrasenaUsuario']);
            if($oUsuarioActivo instanceof PDOException){
                $_SESSION['paginaAnterior']='login';
                $_SESSION['error']=new ErrorApp(
                    $oUsuarioActivo->getCode(),
                    $oUsuarioActivo->getMessage(),
                    $oUsuarioActivo->getFile(),
                    $oUsuarioActivo->getLine(),
                    $_SESSION['paginaAnterior']
                );
                $_SESSION['paginaEnCurso']='error';
                header('Location: index.php');
                exit();
            }
            if($oUsuarioActivo instanceof Usuario){
                UsuarioPDO::registrarUltimaConexion($oUsuarioActivo);
                $_SESSION['usuarioDAW208LoginLogoff']=$oUsuarioActivo;
                $_SESSION['paginaAnterior']='login';
                $_SESSION['paginaEnCurso']='inicioPrivado';
                header('Location: index.php');
                exit();
            }
        }
    }
?>