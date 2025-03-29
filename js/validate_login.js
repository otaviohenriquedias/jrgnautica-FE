$(document).ready(function() {
    $('#form-login').submit(function(e) {
        e.preventDefault();
        var form = $('form')[0];
        formDados = new FormData(form);
        $.ajax({
            type: "post",
            url: "controllers/controller-logar-usuario.php",
            data: formDados,
            contentType: false,
            cache: false,
            dataType: 'json',
            processData: false,
            beforeSend: () => {
                $('input').attr('readonly', true);
                $("button").attr("disabled", true);
                $('body').css('cursor', 'wait');
            },
            success: function(response) {
                swal(response.status, response.mensagem, response.type).then((result) => {
                    if (result.value) {
                        if (response.type == 'success') { window.location.replace("index.php"); }

                    }
                })
                $('input').attr('readonly', false);
                $('select').attr('readonly', false);
                $("button").attr("disabled", false);
                $("#bt-cadastrar-usuario").attr("disabled", false);
                $('body').css('cursor', 'auto');

            }
        });

    });
});