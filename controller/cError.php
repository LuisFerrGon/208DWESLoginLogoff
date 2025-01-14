<?php
    /**
     * @author Luis Ferreras González
     * @version 1.0.0 Fecha última modificación del archivo: 14/01/2025
     * @since 1.0.0
     */

    if(isset($_REQUEST['volver'])){
        $_SESSION['paginaEnCurso']=$_SESSION['paginaAnterior'];
        header('Location: index.php');
        exit();
    }
    if(isset($_SESSION['error'])){
        $avError=[
            
        ];
    }
    require_once $aVistas['layout'];
?>