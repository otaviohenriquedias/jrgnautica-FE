$(document).ready(function() {
    $.ajax({
        type: "post",
        url: "controllers/controller-lista-usuario.php",
        beforeSend: () => {
            var loader = $('<center><p><img src="assets/loader.gif" width="45"><br><h4>Sincronizando Interesses...</h4></p></center>');
            $('body').css('cursor', 'wait');
            $("#retorno-busca").empty().append(loader)
        },
        success: function(response) {
            $('#retorno-busca').empty().append(response).fadeIn('slow');
            $('body').css('cursor', 'auto');
            //form.reset();      

        }
    });



});

function deleteUser(id) {
    swal.fire({
        title: 'Deseja apagar esse usuário?',
        text: "Esse processo não pode ser revertido.",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim',
        cancelButtonText: 'Não'
    }).then((result) => {
        if (result.value) {
            $.ajax({
                type: 'POST',
                url: 'controllers/controller-deleta-usuario.php?id_usuario=' + parseInt(id),
                contentType: false,
                cache: false,
                processData: false,
                success: function() {
                    $('#' + id).fadeOut('slow').remove();
                    swal.fire('Concluído', 'Usuário deletado com sucesso', 'success')
                }
            });

        }
    })
}