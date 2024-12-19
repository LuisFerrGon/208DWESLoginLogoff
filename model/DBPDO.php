<?php
    /**
     * @author Luis Ferreras González
     * @version 19/12/2024
     * @since 19/12/2024
     */
    require_once '../config/confDB.php';
    class DBPDO implements DB{
        public static function ejecutarConsulta($sentenciaSQL, $aParametros=null){
            try{
                $conexion=new PDO(SERVIDOR, USUARIO, CONTRASENA);
                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $query=$conexion->prepare($sentenciaSQL);
                $query->execute($aParametros);
                return $query->fetchObject();
            } catch (PDOException $ex) {
                return $ex;
            } finally {
                unset($conexion);
            }
        }
    }
?>