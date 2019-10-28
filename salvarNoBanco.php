<?php 

    require_once('vendor/autoload.php');

    $produto = new Produto();
    $id = (int) $_POST['idusuario'];
    $produto->setNomeProd($_POST['nomeProduto']);
    $produto->setTipoProd($_POST['tipoProduto']);
    $produto->setDescProd($_POST['descricao']);
    $produto->setIpi($_POST['IPI']);
    $produto->setCOFINS($_POST['COFINS']);
    $produto->setQtdProd($_POST['quantidade']);
    $produto->setId($id);
    $consultaProd = new ConsultaProd();

    $consultaProd->cadProd($produto);



?>