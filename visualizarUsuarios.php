<?php  
    require_once('vendor/autoload.php');
    $usuario = new Usuario();
    $consultaAtualiza = new ConsultaUsuario();
    $consulta = $consultaAtualiza->listarUsuario();
    $vizualizar = new Vizualizacao();   
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
    
  </head>
  <body>
    <h1>Vizualizar usuarios</h1>
    <?php $vizualizar->tabela($consulta); ?>
    <!-- Botão para acionar modal -->
    <a href="index.php">retornar a ao cadastro</a>
    <!-- Modal -->
    <div class="modal" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="TituloModalCentralizado">Atualizar usuarios</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form method="post" action="enviarParametrosClasses.php" class="form-grup">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="input">Nome</label>
                        <input type="text" name="nome" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="input">Login</label>
                        <input type="text"  name="usuario" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="input">Senha</label>
                        <input type="password" name="senha" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="input">Idade</label>
                        <input type="text" name="idade" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="input">Tipo usuario</label>
                        <input type="text" name="tipoUsuario" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="input">CPF</label>
                        <input type="text" name="CPF" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="input">Função</label>
                        <input type="text" name="funcao" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="input">Sexo</label>
                        <input type="text" name="sexo" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="input">id</label>
                        <input type="text" name="id" id="teste" value="<?php  $a['idproduto'] ?>" class="form-control">
                    </div>
                    
                </div>
                <input type="submit" value="teste"> 
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <button type="button" class="btn btn-primary" >Salvar mudanças</button>
        </div>
        </div>
    </div>
    </div>
    
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
        var teste;
        teste = document.getElementByid('teste');
        alert(teste);
    </script>
  </body>
</html>