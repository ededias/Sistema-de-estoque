<?php

    include_once('../../vendor/autoload.php');
    
    $editarId = new ConsultaUsuario();
    
    echo json_encode($editarId->listarUsuario())

?>