$(document).ready(function() {
    $.ajax({
        type: "post",
        url: "controllers/controller-lista-captadores.php",
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

function deleteCaptador(id) {
    swal.fire({
        title: 'Deseja apagar esse captador?',
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
                url: 'controllers/controller-deleta-captador.php?id_captador=' + parseInt(id),
                contentType: false,
                cache: false,
                dataType: 'json',
                processData: false,
                success: function(response) {
                    if (response.type == 'success') {
                        $('#' + id).fadeOut('slow').remove()
                    }
                    console.log(response)
                    swal.fire(response.status, response.mensagem, response.type)

                }
            });

        }
    })
}