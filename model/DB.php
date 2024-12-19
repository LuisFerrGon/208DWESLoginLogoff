<?php
    /**
     * @author Luis Ferreras González
     * @version 19/12/2024
     * @since 19/12/2024
     */
    interface DB{
        public function ejecutarConsulta($sentenciaSQL, $aParametros);
    }
?>