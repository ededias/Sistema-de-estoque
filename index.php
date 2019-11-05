<?php 
    session_start();
    require_once('vendor/autoload.php');
    $validar = new ValidaUsuario();
    
    if(!isset($_SESSION['nome'])){
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

    <title>AMA-GI | ESTOQUE</title>
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
      <section class="container">
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
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="javascript/jquery.mask.js"></script>
    <script type="text/javascript" src="javascript/mascara.js"></script>
  </body>
</html>