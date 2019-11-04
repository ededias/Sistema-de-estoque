<?php
    session_start();

    require_once('vendor/autoload.php');
    $validar = new ValidaUsuario();
    $a = 1;
    if(!isset($_SESSION['nome'])){
      header('location: login.php');
    }
    require_once('vendor/autoload.php');
    $listarProd = new ConsultaProd();
    $visualizar = new VisualizacaoProd();
    $listaProduto = $listarProd->listarProduto($a);

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>vizualizar produtos</title>
    
  </head>
  <body>
    <h1>Vizualizar produtos</h1>
    
    <div id="tabela">
        <table class="table table-hover">
            <thead>
                <th>Nome do produto</th>
                <th>Tipo do produto</th>
                <th>Descrição do produto</th>
                <th>IPI</th>
                <th>COFINS</th>
                <th>Valor sem impostos</th>
                <th>Valor com impostos</th>
                <th>Quantidade</th>
                <th>Editar</th>
                <th>Excluir</th>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
    <!-- Botão para acionar modal -->
    <a href="index.php">retornar a ao cadastro</a>
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
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Nome do produto:</label>
                            <input type="text" class="form-control" name="nomeProd" id="nomeProd">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Tipo produto:</label>
                            <input type="text" class="form-control" name="tipoProd" id="tipoProd">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Descrição do produto:</label>
                            <input type="text" class="form-control" name="descricaoProd" id="descricaoProd">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">IPI:</label>
                            <input type="text" class="form-control" name="IPI" id="IPI">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">COFINS:</label>
                            <input type="text" class="form-control" name="COFINS" id="COFINS">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Valor sem imposto:</label>
                            <input type="text" class="form-control" name="valorSemImpostos" id="valorSemImpostos">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">quantidade:</label>
                            <input type="text" class="form-control" name="quantidade" id="quantidade">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <button type="button" class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <script src="javascript/visualizarEditar.js"></script>
    
  </body>
</html>