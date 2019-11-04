<?php

    include_once('../../vendor/autoload.php');
    $editar = new ConsultaProd();
    $editarId = new ConsultaUsuario();
    echo json_encode($editar->listarProduto());
    // echo json_encode($editarId->listarUsuario())

?>