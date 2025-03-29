$(document).ready(function() {
    $('#form-atualiza-embarcacao').submit(function(e) {
        e.preventDefault();
        var form = $('form')[0];
        formDados = new FormData(form);
        swal.fire({
            title: 'Confirmar alterações da Embarcação?',
            icon: "question",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim',
            cancelButtonText: 'Não'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    type: "post",
                    url: "controllers/controller-atualiza-embarcacao.php?id-embarcacao=" + parseInt($('#i001').html()),
                    data: formDados,
                    contentType: false,
                    cache: false,
                    processData: false,
                    beforeSend: () => {
                        $('input').attr('readonly', true);
                        $('select').attr('readonly', true);
                        $("button").attr("disabled", true);
                        $('body').css('cursor', 'wait');
                    },
                    success: function(response) {
                        swal.fire('Concluído', 'Embarcação alterada com sucesso!', 'success')
                        $('input').attr('readonly', false);
                        $('select').attr('readonly', false);
                        $("button").attr("disabled", false);
                        $("#bt-cadastrar-usuario").attr("disabled", false);
                        $('body').css('cursor', 'auto');

                    }
                });


            }
        })
    });

});