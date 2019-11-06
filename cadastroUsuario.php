<?php
session_start();
include_once('vendor/autoload.php');
$validar = new ValidaUsuario();
if (!isset($_SESSION['nome'])) {
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
    <style>
        body {
            background: rgb(242, 242, 242);
        }
    </style>
</head>

<body>
    <header class="pt-3">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse">
                <div class="pl-3">
                    <a href="index.php">
                        <img src="img/logoCabecalho.png">
                    </a>
                </div>
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item text-uppercase font-weight-bold"><a class="nav-link" href="index.php">Cadastro
                            de produto</a></li>
                    <li class="nav-item text-uppercase font-weight-bold"><a class="nav-link"
                            href="visualizarProd.php">Visualizar produtos</a></li>
                    <li class="nav-item text-uppercase font-weight-bold"><a class="nav-link"
                            href="cadastroUsuario.php">Cadastrar usuário</a></li>
                    <li class="nav-item text-uppercase font-weight-bold"><a class="nav-link"
                            href="visualizarUsuarios.php">Visualizar usuários</a></li>
                    <li class="nav-item text-uppercase font-weight-bold"><a class="nav-link" href="sair.php">Sair</a>
                    </li>
                    <li class="nav-item text-uppercase font-weight-bold">
                        <label class="nav-link">Bem vindo <?php echo $_SESSION['nome'] ?></label>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <section class="conteiner">
        <div class="mx-auto col-6">
            <h1 class="mx-auto">Cadastro de usuário</h1>
        </div>
        <div class="form mt-5" id="cadastroUsuario">
            <form class="mx-auto row col" method="post" action="salvarBancoUsuario.php">
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
                    <input class="form-control" id="cpf" type="text" name="CPF">
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
                    <input class="form-control" type="password" name="senha">
                </div>

                <div class="col-6">
                    <label>função:</label>
                    <input class="form-control" type="text" name="funcao">
                </div>
                <div class="w-100 d-none d-md-block"></div>
                <div class="col-md-5 mx-auto mt-3">
                    <input class="form-control" type="submit" value="Enviar">
                </div>
            </form>
        </div>
    </section>
    <footer class="page-footer" style="background: rgb(209,209,209)">
        <div class="conteiner">
            <div class="row">
                <div class="col-4 pt-5 pl-5">
                    <a>
                        <img src="img/logoRodape.png">
                    </a>
                </div>
                <div class="col-3 pt-5">
                    <h5>SOBRE NÓS</h5>
                    <div class="text-justify">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book.
                        </p>
                    </div>
                </div>
                <div class="col-3 pt-5 pl-5 ml-5">
                    <h5>LINKS</h5>
                    <div class="text-justify">
                        <nav class="nav nav-navbar flex-column navbar-expands-lg navbar-light">
                            <ul class="navbar-nav">
                                <li class="nav-item text-uppercase font-weight-bold"><a class="nav-link"
                                        href="index.php">Inicio</a></li>
                                <li class="nav-item text-uppercase font-weight-bold"><a class="nav-link"
                                        href="visualizarProd.php">Visualizar produtos</a></li>
                                <li class="nav-item text-uppercase font-weight-bold"><a class="nav-link"
                                        href="cadastroUsuario.php">Cadastrar usuário</a></li>
                                <li class="nav-item text-uppercase font-weight-bold"><a class="nav-link"
                                        href="visualizarUsuarios.php">Visualizar usuários</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright font-small text-center p-5" style="background: rgb(180,180,180);">
            <p>&copy Desenvolvido por Edenilson Dias</p>
        </div>
    </footer>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"crossorigin="anonymous"></script>
    <script src="javascript/jquery.mask.js"></script>
    <script src="javascript/mascara.js"></script>
</body>

</html>