$(document).ready(() =>{
    
    var dados = $(this).serialize();
    $.ajax({
        type: "method",
        url: "App/ControleUsuarios/codificacaoJsonUsuario.php",
        data: dados,
        dataType: "json",
        success: function (response) {
            
            $.each(response, function(key,value) { 
                $("#tabela table tbody").append(
                    `<tr>
                        <td> ${value.nome}</td>
                        <td> ${value.idade}</td>
                        <th> ${value.tipoUsuario}</th>
                        <td> ${value.loginUsuario}</td>
                        <td> ${value.CPF}</td>
                        <td> ${value.funcao}</td>
                        <td><button type="button" class="btn btn-primary teste" data-toggle="modal" data-target="#exampleModal" name="editarProd" data-whatever="${key}">Editar</button></td>
                        <td>
                            <form method="post" action="excluir.php">
                                <input type="hidden" name="idusuario" value="${value.idusuario}">
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>`
                );
                return response;
            })
            $('#exampleModal').on('show.bs.modal', function (event) {
                let button = $(event.relatedTarget); // Botão que acionou o modal
                let recipient = button.data('whatever');
                let recipientProd = button.data('whatever');  // Extrai informação dos atributos data-*
                // Se necessário, você pode iniciar uma requisição AJAX aqui e, então, fazer a atualização em um callback.
                // Atualiza o conteúdo do modal. Nós vamos usar jQuery, aqui. No entanto, você poderia usar uma biblioteca de data binding ou outros métodos.
                let modal = $(this);
                let requisicaoJson = response;
                modal.find('.modal-title').text('Nova mensagem para');
                
                modal.find('#nome').val(requisicaoJson[recipient].nome);
                modal.find('#idade').val(requisicaoJson[recipientProd].idade);
                modal.find('#tipo').val(requisicaoJson[recipient].tipoUsuario);
                modal.find('#login').val(requisicaoJson[recipientProd].loginUsuario);
                modal.find('#funcao').val(requisicaoJson[recipient].funcao);
                modal.find('#CPF').val(requisicaoJson[recipient].CPF);
                modal.find('#senha').val(requisicaoJson[recipient].senhaUsuario);
                modal.find('#quantidade').val(requisicaoJson[recipient].funcao);
                modal.find('#sexo').val(requisicaoJson[recipient].sexo);
                modal.find('#idusuario').val(requisicaoJson[recipient].idusuario);
              })
            
        } 
    });

   
    
})
