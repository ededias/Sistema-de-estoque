<html>
<pre>
<?php
    $admin = $_POST['usuario'];
    $senha = $_POST['senha'];
    
    require_once('vendor/autoload.php');
    $usuario = new Usuario();
        
    $usuario->setLogin($admin);
    $usuario->setSenha($senha);
    
    $validar = new ValidaUsuario();
    $validar-> validar($usuario);
    
    
    
   
    












    /* 
    
        *$stmt->bindValue(1, $p->getNome());
        *$stmt->bindValue(2, $p->getIdade());
        *$stmt->bindValue(3, $p->getTipoUsuario());
        *$stmt->bindValue(4, $p->getLogin());
        *$stmt->bindValue(5, $p->getSenha());
        *$stmt->bindValue(6, $p->getCpf());
        *$stmt->bindValue(7, $p->getFuncao());
        *$stmt->bindValue(8, $p->getSexo());
            

        $usuario->setCpf($admin);
        $usuario->setNome($admin);
        $usuario->setIdade($admin);
        $usuario->setSexo($senha);
        $usuario->setFuncao($admin);
        $usuario->setTipoUsuario($senha);
        $usuario->setLogin($admin);
        $usuario->setSenha($senha);

    */

?>
</html>