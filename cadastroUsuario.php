<?php 
    session_start();
    include_once('vendor/autoload.php');
    $validar = new ValidaUsuario();
    if(!isset($_SESSION['nome'])){
      print_r($_SESSION['nome']);
      header('location: login.php');
    }
?>
<html>
    <head>
         <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/Footer-with-button-logo.css">
    </head>
    <body> 
        <header>
            <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="collapse navbar-collapse">
                <a href="index.php">
                <img src="img/images.png">
                </a>
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="visualizarProd.php">Visualizar produtos</a></li>
                    <li class="nav-item"><a class="nav-link" href="cadastroUsuario.php">Cadastro usuario</a></li>
                    <li class="nav-item"><a class="nav-link" href="visualizarUsuarios.php">Visualizar usuarios</a></li>
                    <li class="nav-item"><a class="nav-link" href="sair.php">Sair</a></li>
                    <li class="nav-item"><label class="nav-link">Bem vindo <?php echo $_SESSION['nome'] ?></label></li>
                </ul>      
            </nav>
        </header>
        <section class="conteiner">
            <div class="form" >
                <form class="mx-auto row col" method="post" action="enviarParametrosClasses.php">
                    <div class="col-6">
                        <label>Nome:</label>
                        <input class="form-control" type="text" name="nome">
                    </div>
                    <div class="col-6">
                        <label>Idade:</label>
                        <input class="form-control" type="text" name="idade">
                    </div>
                    <div class="col-6 form-check">
                        <label>Sexo:</label>
                        <div class="col-3">
                            <input class="form-check-input" type="radio" id="masculino" name="sexo" value="masculino">
                            <label class="form-check-label" for="masculino">Masculino</label>
                        </div>
                        <div class="col-3">
                            
                            <input class="form-check-input" type="radio" id="feminino" name="sexo" value="feminino">
                            <label class="form-check-label" for="feminino">Feminino</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <label>CPF:</label>
                        <input class="form-control" id="cpf" type="text"  name="CPF">
                    </div>
                    <div class="w-100 d-none d-md-block"></div>
                    <div class="col-6">
                        <label>Tipo do usuario:</label>
                        <input class="form-control" type="text" name="tipoUsuario">
                    </div>
                    <div class="col-6">
                        <label>Login:</label>
                        <input class="form-control" type="text" name="usuario">
                    </div>
                    <div class="col-6">
                        <label>Senha:</label>
                        <input class="form-control" type="text" name="senha">
                    </div>
                    
                    <div class="col-6">
                        <label>função:</label>
                        <input class="form-control" type="text" name="funcao">
                    </div>
                    <div class="w-100 d-none d-md-block"></div>
                    <div class="col mt-3">
                        <input class="form-control" type="submit" value="Enviar">
                    </div>
                </form>
            </div>
        </section>
        <footer id="myFooter">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <h2 class="logo"><a href="https://programadorviking.com.br/"> LOGO </a></h2>
                    </div>
                    <div class="col-sm-2">
                        <h5>Inicio</h5>
                        <ul>
                            <li><a href="https://programadorviking.com.br/">Home</a></li>
                            <li><a href="https://bit.ly/front-end-curso-completo-promocao-01">Cursos</a></li>
                            <li><a href="https://programadorviking.com.br/">Downloads</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-2">
                        <h5>Sobre-nós</h5>
                        <ul>
                            <li><a href="https://programadorviking.com.br/">Informações da Empresa</a></li>
                            <li><a href="https://programadorviking.com.br/">Contato</a></li>
                            <li><a href="https://programadorviking.com.br/">Blog</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-2">
                        <h5>Suporte</h5>
                        <ul>
                            <li><a href="https://programadorviking.com.br/">FAQ</a></li>
                            <li><a href="https://programadorviking.com.br/">Telefones</a></li>
                            <li><a href="https://programadorviking.com.br/">Chat</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <div class="social-networks">
                            <a href="https://programadorviking.com.br/" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="https://programadorviking.com.br/" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="https://programadorviking.com.br/" class="instagram"><i class="fa fa-instagram"></i></a>
                        </div>
                        <a href="https://programadorviking.com.br/">
                            <button type="button" class="btn btn-default">Contato</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <p>© 2019 Copyright - Programador Viking</p>
            </div>
        </footer>
        <!-- JavaScript (Opcional) -->
        <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="javascript/jquery.mask.js"></script>
        <script>
            $("#cpf").mask('000.000.000-00')
        </script>
        
    </body>
</html>



