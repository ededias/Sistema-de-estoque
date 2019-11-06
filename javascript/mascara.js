$(document).ready(function(){
    $("#cadastroProduto").keyup(function(){
        $('#data').mask('00/00/0000');
        $('#quantidade').mask('0000000');
        $('#IPI').mask('0000000000');
        $('#COFINS').mask('0000000000');
        $('#imposto').mask('0000000000');
    })

    $("#cadastroUsuario").keyup(function(){
        $('#cpf').mask('000.000.000-00');
    })
})