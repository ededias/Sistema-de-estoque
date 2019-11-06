<?php
    session_start();
    require_once('vendor/autoload.php');
    $validar = new ValidaUsuario();
    if(!isset($_SESSION['nome'])){
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
    <title>vizualizar produtos</title>
    <style>
        body{
            background: rgb(242,242,242);
        }
        #tabela {
            background: rgb(255,255,255);
        }
        .cabecalhoTabela {
            background: rgb(242,242,242);
        }
    </style>
  </head>
  <body>
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
        <section class="conteiner">
            <div class="p-5 m-5">
                <div id="tabela">
                    <table class="table table-hover">
                        <thead class="cabecalhoTabela">
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
                        <h5 class="modal-title" id="exampleModalLabel">Editar produto</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="atualizarProd.php">
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
                                <input type="hidden" class="form-control" name="idproduto" id="idproduto">
                                <input type="hidden" class="form-control" name="usuarioid" id="usuarioid">
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
        
        <script src="javascript/visualizarEditar.js"></script>
  </body>
</html>