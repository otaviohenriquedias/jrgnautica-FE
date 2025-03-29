$(document).ready(function() {
    $('#combox-captador').change((e) => {
        if ($(e.target).val() == 2) {
            $('#empresa-captador').prop('readonly', false)
            $('#empresa-captador').attr('placeholder', 'Nome da Empresa')
            $('.form-control-plaintext').css({
                "background": "#fff",
                "pointer-events": "auto",
                "touch-action": "auto",
            })

        }
        if ($(e.target).val() == 1) {
            $('#empresa-captador').prop('readonly', true)
            $('#empresa-captador').attr('placeholder', '')
            $('.form-control-plaintext').css({
                "background": "#fff",
                "pointer-events": "auto",
                "touch-action": "auto",
            })

        }


    });
    $('#cadastra-captador').submit(function(e) {
        e.preventDefault();
        var form = $('form')[0];
        formDados = new FormData(form);
        swal.fire({
            title: 'Confirmar cadastro do Captador?',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim',
            cancelButtonText: 'Não'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    type: "post",
                    url: "controllers/controller-cadastra-captador.php",
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
                        console.log(response)
                        swal.fire(response.status, response.Mensagem, response.type)
                        $('input').attr('readonly', false);
                        $("#bt-cadastrar-usuario").attr("disabled", false);
                        $('body').css('cursor', 'auto');
                        //form.reset();      

                    }
                });


            }
        })
    });
    $('#altera-captador').submit(function(e) {
        e.preventDefault();
        var form = $('form')[0];
        formDados = new FormData(form);
        swal.fire({
            title: 'Confirmar alterações do Captador?',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim',
            cancelButtonText: 'Não'
        }).then((result) => {
            $.ajax({
                type: "post",
                url: "controllers/controller-atualiza-captador.php?id_captador=" + parseInt($('#i001').html()),
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

        })
    });
});