<?php

    Class VisualizacaoProd {

        function tabelaProd($listarProd) { ?>
        
            <table class="table table-sm table-hover">
                <th>Nome</th>
                <th>Idade</th>
                <th>Tipo</th>
                <th>Editar usuario</th>
                <th>Excluir usuario</th>
            <?php foreach($listarProd as $a): ?>
                <tr>
                    <td><?php echo $a['nomeProduto'] ?></td> 
                    <td><?php echo $a['descricaoProduto'] ?></td>
                    <td><?php echo $a['tipoProduto'] ?> </td>
                    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ExemploModalCentralizado">Editar</button></td>
                    <td>
                        <form method="post" action="excluir.php">
                            <input type="hidden" name="idusuario" value="<?php echo $a['idusuario']?>">
                            <button type="submit" class="btn btn-danger" onclick="excluir()">Excluir</button>
                        </form>
                    </td>
                </tr>
                
            <?php endforeach; ?>
            </table> 
        <?php 
            
        } 
        function Secao() {
            
        }
        
    }

?> 

