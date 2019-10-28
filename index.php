<?php 
    require_once('vendor/autoload.php');
    $validar = new ValidaUsuario();
    session_start();
    if(!isset($_SESSION)):
      header('location: login.php');
    endif;
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Olá, mundo!</title>
  </head>
  <body>
    <h1>Cadastro de produtos</h1>
    <h3>Bem vindo </h3>
      <a href="visualizarProd.php">visualizar produtos</a>
      <div class="container">
        <form class="form-group row" method="post" action="salvarNoBanco.php">
          <label class="mr-md-3 ml-md-3">Nome do produto</label>
          <input type="text" class="form-control col-md-4" name="nomeProduto" placeholder="Digite aqui">
          <label class="mr-md-3 ml-md-3">Tipo produto</label>
          <input type="text" class="form-control col-md-4" name="tipoProduto">
          <label class="mr-4 ml-md-3">Descrição</label>
          <input type="text" class="ml-md-5 form-control col-md-6" name="descricao">
          <label class="mr-md-3 ml-md-3">Quantidade</label>
          <input type="number" class="form-control col-sm-2" name="quantidade">
          <label class="mr-md-3 ml-md-5">IPI</label>
          <input type="number" class="form-control col-md-2" name="IPI">
          <label class="mr-md-3 ml-md-3">COFINS</label>
          <input type="number" class="form-control col-md-2" name="COFINS">
          <label class="mr-md-3 ml-md-3">Valor sem impostos</label>
          <input type="number" class="form-control col-md-2" name="valorSem">
          <label class="mr-md-3 ml-md-3">Data de cadastro</label>
          <input type="date" class="form-control col-md-4" name="dataCad">
          <input type="hidden" name="idusuario" value="<?php echo $_SESSION['idusuario']; ?>">
          <input type="submit" class="form-control">
        </form>
      </div>
        <a href="visualizarUsuarios.php">visualizar usuarios</a>
        <a href="sair.php">sair</a>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>