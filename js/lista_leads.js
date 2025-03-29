$(document).ready(function() {
    $.ajax({
        type: "post",
        url: "controllers/controller-lista-leads.php",
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

function deleteEmail(id) {
    swal.fire({
        title: 'Deseja apagar esse Lead?',
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
                url: 'controllers/controller-deleta-lead.php?id_lead=' + parseInt(id),
                contentType: false,
                cache: false,
                processData: false,
                success: function() {
                    $('#' + id).fadeOut('slow').remove();
                    swal.fire('Concluído', 'Lead deletado com sucesso', 'success')
                }
            });

        }
    })
}