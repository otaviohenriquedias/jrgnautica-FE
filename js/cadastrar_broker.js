$(document).ready(function() {
    $('#cadastra-broker').submit(function(e) {
        e.preventDefault();
        var form = $('form')[0];
        formDados = new FormData(form);
        swal.fire({
            title: 'Confirmar cadastro do Broker?',
            icon: "question",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim',
            cancelButtonText: 'Não'
        }).then((result) => {
            if (result.value) {
                if ($('#senha').val() == $('#confirm_senha').val()) {
                    $.ajax({
                        type: "post",
                        url: "controllers/controller-cadastra-broker.php",
                        data: formDados,
                        contentType: false,
                        cache: false,
                        processData: false,
                        dataType: 'json',
                        beforeSend: () => {
                            $('input').attr('readonly', true);
                            $('body').css('cursor', 'wait');
                            $("#bt-cadastrar-usuario").attr("disabled", true);
                        },
                        success: function(response) {
                            swal.fire(response.status, response.Mensagem, response.type)
                            $('input').attr('readonly', false);
                            $("#bt-cadastrar-usuario").attr("disabled", false);
                            $('body').css('cursor', 'auto');
                            //form.reset();      

                        }
                    });

                } else {
                    swal('Ops!', 'As senhas não conferem!', 'warning')
                }


            }
        })
    });
    $('#altera-usuario').submit(function(e) {
        e.preventDefault();
        var form = $('form')[0];
        formDados = new FormData(form);
        swal.fire({
            title: 'Confirmar alterações do Broker?',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim',
            cancelButtonText: 'Não'
        }).then((result) => {
            if (result.value) {
                if ($('#senha').val() == $('#confirm_senha').val()) {
                    $.ajax({
                        type: "post",
                        url: "controllers/controller-atualiza-broker.php?id_broker=" + parseInt($('#i001').html()),
                        data: formDados,
                        contentType: false,
                        cache: false,
                        processData: false,
                        dataType: 'json',
                        beforeSend: () => {
                            $('input').attr('readonly', true);
                            $('body').css('cursor', 'wait');
                            $("#bt-cadastrar-usuario").attr("disabled", true);
                        },
                        success: function(response) {
                            swal.fire(response.status, response.Mensagem, response.type)
                            $('input').attr('readonly', false);
                            $("#bt-cadastrar-usuario").attr("disabled", false);
                            $('body').css('cursor', 'auto');
                            //form.reset();      

                        }
                    });

                } else {
                    swal.fire('Ops!', 'As senhas não conferem!', 'warning')
                }


            }
        })
    });
});