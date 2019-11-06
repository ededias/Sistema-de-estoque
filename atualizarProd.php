<?php
    require_once('vendor/autoload.php');
   
    $produto = new Produto();

    $produto->setNomeProd($_POST['nomeProd']);
    $produto->setTipoProd($_POST['tipoProd']);
    $produto->setDescProd($_POST['descricaoProd']);
    $produto->setIpi($_POST['IPI']);
    $produto->setCOFINS($_POST['COFINS']);
    $produto->setQtdProd($_POST['quantidade']);
    $produto->setProdId($_POST['idproduto']);
    $produto->setUsuarioId($_POST['usuarioid']);
   
    $consultaProd = new ConsultaProd();

    $consultaProd->atualizarProduto($produto);
?>