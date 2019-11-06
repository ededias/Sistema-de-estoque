<?php
session_start();
include_once('vendor/autoload.php');
$validar = new ValidaUsuario();

if (!isset($_SESSION['nome'])) {
  print_r($_SESSION['nome']);
  header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Meta tags Obrigatórias -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <title>vizualizar Usuarios</title>
  <style>
    body {
      background: rgb(242, 242, 242);
    }

    #tabela {
      background: rgb(255, 255, 255);
    }

    .cabecalhoTabela {
      background: rgb(242, 242, 242);
    }
  </style>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light p-5">
      <div class="collapse navbar-collapse">
        <a href="index.php">
          <img src="img/logoCabecalho.png">
        </a>
        <ul class="navbar-nav mx-auto">
          <li class="nav-item"><a class="nav-link text-uppercase font-weight-bold" href="index.php">Cadastro de produto</a></li>
          <li class="nav-item"><a class="nav-link text-uppercase font-weight-bold" href="visualizarProd.php">Visualizar produtos</a></li>
          <li class="nav-item"><a class="nav-link text-uppercase font-weight-bold" href="cadastroUsuario.php">Cadastro usuario</a></li>
          <li class="nav-item"><a class="nav-link text-uppercase font-weight-bold" href="visualizarUsuarios.php">Visualizar usuarios</a></li>
          <li class="nav-item"><a class="nav-link text-uppercase font-weight-bold" href="sair.php">Sair</a></li>
          <li class="nav-item"><label class="nav-link text-uppercase font-weight-bold">Bem vindo <?php echo $_SESSION['nome'] ?></label></li>
        </ul>
    </nav>
  </header>
  <section class="conteiner">
    <div class="text-center pb-2">
      <h1>Vizualizar usuarios</h1>
    </div>
    <div class="p-5">
      <div id="tabela">
        <table class="table table-hover">
          <thead class="cabecalhoTabela">
            <th>Nome</th>
            <th>Idade</th>
            <th>Tipo</th>
            <th>Login</th>
            <th>CPF</th>
            <th>Tipo Usuario</th>
            <th>Editar usuario</th>
            <th>Excluir usuario</th>
          </thead>
          <tbody>

          </tbody>
        </table>
      </div>
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
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </p>
          </div>
        </div>
        <div class="col-3 pt-5 pl-5 ml-5">
          <h5>LINKS</h5>
          <div class="text-justify">
            <nav class="nav nav-navbar flex-column navbar-expands-lg navbar-light">
              <ul class="navbar-nav">
                <li class="nav-item text-uppercase font-weight-bold"><a class="nav-link" href="index.php">Inicio</a></li>
                <li class="nav-item text-uppercase font-weight-bold"><a class="nav-link" href="visualizarProd.php">Visualizar produtos</a></li>
                <li class="nav-item text-uppercase font-weight-bold"><a class="nav-link" href="cadastroUsuario.php">Cadastrar usuário</a></li>
                <li class="nav-item text-uppercase font-weight-bold"><a class="nav-link" href="visualizarUsuarios.php">Visualizar usuários</a></li>
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
  <!-- modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Nova mensagem</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" action="editarUsuario.php">
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Nome:</label>
              <input type="text" class="form-control" name="nome" id="nome">
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Idade:</label>
              <input type="text" class="form-control" name="idade" id="idade">
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Tipo:</label>
              <input type="text" class="form-control" name="tipo" id="tipo">
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Login:</label>
              <input type="text" class="form-control" name="login" id="login">
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Senha:</label>
              <input type="password" class="form-control" name="senha" id="senha">
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Função:</label>
              <input type="text" class="form-control" name="funcao" id="funcao">
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">CPF:</label>
              <input type="text" class="form-control" name="CPF" id="CPF">
            </div>
            <div class="col-6 form-check">
              <label>Sexo:</label>
              <div class="col-3">
                <input class="form-check-input" type="radio" id="masculino" name="sexo" value="masculino">
                <label class="form-check-label" for="masculino">Masculino</label>
                <input type="hidden" name="idusuario" id="idusuario">
              </div>
              <div class="col-3">
                <input class="form-check-input" type="radio" id="feminino" name="sexo" value="feminino">
                <label class="form-check-label" for="feminino">Feminino</label>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
              <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- JavaScript (Opcional) -->
  <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="javascript/usuarioEditarVisualizar.js"></script>
</body>

</html>