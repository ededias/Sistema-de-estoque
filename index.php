<?php 
    session_start();
    require_once('vendor/autoload.php');
    $validar = new ValidaUsuario();
    
    if(!isset($_SESSION['nome'])){
      print_r($_SESSION['nome']);
      header('location: login.php');
    }
    require_once('animacao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>AMA-GI | ESTOQUE</title>
    <style>
        body {
          background: rgb(242,242,242);
        }
    </style>
  </head>
  <body>
    <div id="corpo">
      <header>
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="collapse navbar-collapse">
            <div class="pl-3">
              <a href="index.php">
                <img src="img/logoCabecalho.png">
              </a>
            </div>
            <ul class="navbar-nav mx-auto">
                <li class="nav-item text-uppercase font-weight-bold"><a class="nav-link" href="index.php">Cadastro de produto</a></li>
                <li class="nav-item text-uppercase font-weight-bold"><a class="nav-link" href="visualizarProd.php">Visualizar produtos</a></li>
                <li class="nav-item text-uppercase font-weight-bold"><a class="nav-link" href="cadastroUsuario.php">Cadastro usuario</a></li>
                <li class="nav-item text-uppercase font-weight-bold"><a class="nav-link" href="visualizarUsuarios.php">Visualizar usuarios</a></li>
                <li class="nav-item text-uppercase font-weight-bold"><a class="nav-link" href="sair.php">Sair</a></li>
              <li class="nav-item text-uppercase font-weight-bold"><label class="nav-link">Bem vindo <?php echo $_SESSION['nome'] ?></label></li>
            </ul>      
          </div>
        </nav>
      </header>
      <section class="container pb-5">
        <div class="mx-auto col-6">
          <h1 class="mx-auto">Cadastro de produtos</h1>
        </div>
        <div class="form">
          <form id="cadastroProduto" class="mx-auto row col" method="post" action="salvarNoBanco.php">
            <div class="col-6">
              <label>Nome do produto</label>
              <input type="text" class="form-control" name="nomeProduto" placeholder="Nome do produto">
            </div>
            <div class="col-6">
              <label>Descrição</label>
              <input type="textarea" class="form-control" name="descricao" placeholder="Descrição">
            </div>
            <div class="col-6">
              <label >Tipo produto</label>
              <input type="text" class="form-control" name="tipoProduto" placeholder="Tipo produto">
            </div>
            <div class="w-100 d-none d-md-block"></div>
            <div class="col-4">
              <label>Quantidade</label>
              <input id="quantidade" type="text" class="form-control" name="quantidade" placeholder="Quantidade">
            </div>
            <div class="col-4">
              <label>IPI</label>
              <input id="IPI" type="text" class="form-control" name="IPI" placeholder="IPI">
            </div>
            <div class="col-4">
              <label>COFINS</label>
              <input id="COFINS" type="text" class="form-control" name="COFINS" placeholder="COFINS">
            </div>
            <div class="col">
              <label>Valor sem impostos</label>
              <input id="imposto" type="text" class="form-control" name="valorSem" placeholder="Valor sem impostos">
            </div>
            <div class="col">
              <label>Data de cadastro</label>
              <input type="text" class="form-control col-md-4" id="data" placeholder="__/__/____" name="dataCad">
            </div>
            <div class="w-100 d-none d-md-block"></div>
            <div class="col-5 mx-auto pt-3 ">
              <input type="hidden" name="idusuario" value="<?php echo $_SESSION['idusuario']; ?>">
              <input type="submit" class="form-control" value="enviar">
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
    </div>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="javascript/jquery.mask.js"></script>
    <script type="text/javascript" src="javascript/mascara.js"></script>
  </body>
</html>