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
                    <td id="modalEditar">
                        <button type="button" class="btn btn-primary" value="<?php echo $a['idproduto']?>">Editar</button>   
                    </td>
                    <td>
                        <form method="post" action="excluirProd.php">
                            <input type="hidden" name="produto" value="<?php echo $a['idproduto']?>">
                            <input type="hidden" name="idusuario" value="<?php echo $_SESSION['idusuario']; ?>">
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
                
            <?php endforeach; ?>
            </table> 
        <?php 
            
        } 
    } ?>

        
