<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Meta tags Obrigatórias -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>SISTEMA DE ESTOQUE | LOGIN</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/animacao.css">
        <title>vizualizar produtos</title>
        <style type="text/css">
            body{
                background: rgb(242,242,242);
            } 
            #logoImagem {
                background: url('img/logoCabecalho.png')no-repeat;
                width: 500px;
                height: 400px;
                position: absolute;
            }
        </style>
    </head>
    <body>
        <div id="animacao"></div>    
        <header class="p-5">
            <div id="logoImagem"></div>
            <div class="conteiner">
                <div class="row" >
                    <h1 class="mx-auto">AMA-GI</h1>
                    <div class="w-100 d-none d-md-block"></div>
                    <h3 class="mx-auto">Soluções em estoque</h3>
                </div>
            </div>
        </header>
        <section class="container p-3">
            <div class="mx-auto col-3">
                <h4>Realize seu login</h4>
            </div> 
            <div class="form row mx-auto">
                <form method="post" class="mx-auto col-4" action="validarLogin.php">
                    <div class="col">
                        <label>Nome de usuario:</label>
                        <input type="text" class="form-control" placeholder="nome de usuario" name="usuario">
                    </div>
                    <div class="col">
                        <label>Senha: </label>
                        <input type="password" class="form-control" placeholder="Senha" name="senha">
                    </div>
                    <div class="col-4 mt-2 mb-2 mx-auto">
                        <input type="submit" class="form-control" value="Entrar">
                    </div>    
                </form>
            </div>
        </section>
        <!-- JavaScript (Opcional) -->
        <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="javascript/visualizarEditar.js"></script>
        
    </body>
</html>