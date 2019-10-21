<?php
    require_once('vendor/autoload.php');
   
    $cadUsuario = new ConsultaUsuario();
    $cadUsuario->listarUsuario();

    foreach($cadUsuario->listarUsuario() as $a):
        echo $a['nome']."<br>".$a['idade'].$a['tipoUsuario']."<hr>";
    endforeach;
