<?php
    require_once('vendor/autoload.php');
    $excluirProd = new ConsultaProd();
    $produto = new Produto();
    $id = $_POST['produto'];
    $produto->setProdId($id);
    $produto->setUsuarioId($_POST['idusuario']);
    $excluirProd->excluirProduto($produto);
