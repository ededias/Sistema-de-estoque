<pre>
<?php
    include_once('../vendor/autoload.php');

    

    $secao = new ValidaUsuario();
    $secao->validar('admin');
    $secao->validaSecao();
?>