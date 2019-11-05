<?php

    include_once('../../vendor/autoload.php');
    $editar = new ConsultaProd();
    
    echo json_encode($editar->listarProduto());
    

?>