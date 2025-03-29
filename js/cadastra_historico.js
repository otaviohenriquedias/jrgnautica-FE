$(document).ready(function() {
    $('#form-cadastra-historico').submit(function(e) {
        e.preventDefault();

        var form = $('form')[0];
        formDados = new FormData(form);
        swal.fire({
            title: 'Confirma lançamento no histórico?',
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
                    url: "controllers/controller-create-historico.php?ref=" + parseInt($('#i001').html()),
                    data: formDados,
                    contentType: false,
                    cache: false,
                    dataType: 'json',
                    processData: false,
                    beforeSend: () => {
                        $('input').attr('readonly', true);
                        $('select').attr('readonly', true);
                        $("button").attr("disabled", true);
                        $('body').css('cursor', 'wait');
                    },
                    success: function(response) {
                        console.log(response)
                        swal.fire(response.status, response.mensagem, response.type)
                        $('input').attr('readonly', false);
                        $('select').attr('readonly', false);
                        $("button").attr("disabled", false);
                        $("#bt-cadastrar-historico").attr("disabled", false);
                        $('body').css('cursor', 'auto');
                    }
                });

            }
        })



    });
});