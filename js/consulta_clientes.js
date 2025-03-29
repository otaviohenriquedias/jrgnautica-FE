$(document).ready(function() {
    $('#form-consulta-cliente').submit(function(e) {
        e.preventDefault();
        var form = $('form')[0];
        formDados = new FormData(form);
        $.ajax({
            type: "post",
            url: "controllers/controller-consulta-clientes.php",
            data: formDados,
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: () => {
                var loader = $('<center><p><img src="assets/loader.gif" width="45"><br><h4>Carregando dados...</h4></p></center>');
                $('#retorno-busca').empty().append(loader);
                $('input').attr('readonly', true);
                $('select').attr('readonly', true);
                $("button").attr("disabled", true);
                //$ ('body').css('cursor', 'wait' );
                //$("#bt-cadastrar-usuario").attr("disabled", true);
            },
            success: function(response) {
                $('input').attr('readonly', false);
                $('select').attr('readonly', false);
                $("button").attr("disabled", false);
                $('#retorno-busca').empty().append(response);
                //$('#response').empty().fadeIn(9000);
                $("#bt-cadastrar-usuario").attr("disabled", false);
                //$ ('body').css('cursor', 'auto' ); 
                //form.reset();      

            }
        });


    });

});

function deleteCliente(id) {
    swal.fire({
        title: 'Deseja apagar esse cliente?',
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
                url: 'controllers/controller-deleta-cliente.php?id_cliente=' + parseInt(id),
                contentType: false,
                cache: false,
                processData: false,
                success: function() {
                    $('#' + id).fadeOut('slow').remove();
                    swal('Concluído', 'Cliente deletado com sucesso', 'success')
                }
            });

        }
    })
}