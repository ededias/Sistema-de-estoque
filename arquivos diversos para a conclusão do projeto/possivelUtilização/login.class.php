<?php  
    session_start();
    include('carregamentoDb.php');
    #class ValidaLogin extends Db {
        
        #function login() {
            
            if(empty($_POST['usuario']) || empty($_POST['senha'])) {
                header('location: ../login.php');
                exit();
            }
        
            
            
            $loginUsuario = mysqli_real_escape_string($db->ConexaoDb(), $_POST['usuario']);
            $senhaUsuario = mysqli_real_escape_string($db->ConexaoDb(), $_POST['senha']);
            
            $query = "select loginUsuario, senhaUsuario from usuario where loginUsuario = '$loginUsuario' and senhaUsuario = md5('$senhaUsuario')";
                    
            $result = mysqli_query($db-> ConexaoDb(), $query);
            
            $row = mysqli_num_rows($result);
    
            if($row == 1) {
                $_SESSION['usuario'] = $loginUsuario;
                header('location: ../index.php'); 
            } else {
                header('location: ../login.php');
            }
        #}
    #}   
  

?>