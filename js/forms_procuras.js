$(document).ready(function() {
    $('#form-cadastra-procura').submit(function(e) {
        e.preventDefault();
        var form = $('form')[2];
        formDados = new FormData(form);
        swal.fire({
            title: 'Deseja cadastrar essa procura?',
            text: "Após o cadastro, a mesma poderá ser deletada.",
            icon: "question",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim',
            cancelButtonText: 'Não'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    type: 'POST',
                    url: 'controllers/controller-cadastra-procura.php?id_cliente=' + parseInt($('#i001').html()),
                    data: formDados,
                    contentType: false,
                    cache: false,
                    processData: false,
                    beforeSend: () => {
                        $('input').attr('readonly', true);
                        $('body').css('cursor', 'wait');
                        $("#bt-cadastrar-usuario").attr("disabled", true);
                    },
                    success: function(response) {
                        $('input').attr('readonly', false);
                        $('#rps').empty().append(response).fadeIn('slow');
                        $("#bt-cadastrar-usuario").attr("disabled", false);
                        $('body').css('cursor', 'auto');
                        swal.fire('Concluído', 'Procura cadastrada com sucesso', 'success').then((result) => {
                            if (result.value) {
                                document.location.reload(true);
                            }
                        })


                    }
                });

            }
        })



    });

});

function deleteProcura($procura) {
    swal.fire({
        title: 'Deseja apagar essa prucura?',
        text: "Esse processo não pode ser revertido.",
        icon: "question",
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim',
        cancelButtonText: 'Não'
    }).then((result) => {
        if (result.value) {
            $.ajax({
                type: 'POST',
                url: 'controllers/controller-deleta-procura.php?id_procura=' + parseInt($procura),
                contentType: false,
                cache: false,
                processData: false,
                success: function() {
                    $('#content' + $procura).fadeOut('slow').remove();
                    swal.fire('Concluído', 'Procura deletada com sucesso', 'success')
                }
            });

        }
    })


}