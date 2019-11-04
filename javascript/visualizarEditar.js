
$(document).ready(() =>{
    
    var dados = $(this).serialize();
    $.ajax({
        type: "method",
        url: "App/controleProdutos/editar.class.php",
        data: dados,
        dataType: "json",
        success: function (response) {
            
            $.each(response, function(key,value) { 
                $("#tabela table tbody").append(
                    `<tr>
                        <td> ${value.nomeProduto} </td>
                        <td> ${value.tipoProduto}</td>
                        <td> ${value.descricaoProduto}</td>
                        <th> ${value.IPI}</th>
                        <td> ${value.COFINS}</td>
                        <td> ${value.valorSemImposto}</td>
                        <td> ${value.valorComImposto}</td>
                        <td> ${value.quantidade}</td>
                        <td><button type="button" class="btn btn-primary teste" data-toggle="modal" data-target="#exampleModal" name="editarProd" data-whatever="${key}">Editar</button></td>
                        <td>
                            <form method="post" action="excluirProd.php">
                                <input type="hidden" name="produto" value="${value.idproduto}">
                                <input type="hidden" name="idusuario" value="${value.usuario_idusuario}">
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>`
                );
                return response;
            })
            $('#exampleModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget); // Botão que acionou o modal
                var recipient = button.data('whatever');
                var recipientProd = button.data('whatever');  // Extrai informação dos atributos data-*
                // Se necessário, você pode iniciar uma requisição AJAX aqui e, então, fazer a atualização em um callback.
                // Atualiza o conteúdo do modal. Nós vamos usar jQuery, aqui. No entanto, você poderia usar uma biblioteca de data binding ou outros métodos.
                var modal = $(this);
                let requisicaoJson = response;
                modal.find('.modal-title').text('Nova mensagem para');
                
                modal.find('#nomeProd').val(requisicaoJson[recipient].nomeProduto);
                modal.find('#tipoProd').val(requisicaoJson[recipientProd].tipoProduto);
                modal.find('#descricaoProd').val(requisicaoJson[recipient].descricaoProduto);
                modal.find('#IPI').val(requisicaoJson[recipientProd].IPI);
                modal.find('#COFINS').val(requisicaoJson[recipient].COFINS);
                modal.find('#valorSemImposto').val(requisicaoJson[recipientProd].valorSemImposto);
                modal.find('#quantidade').val(requisicaoJson[recipientProd].quantidade);
              })
            
        } 
    });

   
    
})
