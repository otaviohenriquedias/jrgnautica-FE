$(document).ready(function() {
    $('#form-cadastra-bem').submit(function(e) {
        e.preventDefault();
        var form = $('form')[0];
        formDados = new FormData(form);
        swal.fire({
            title: 'Confirmar cadastro da BEM?',
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
                    url: "controllers/controller-cadastro-bem.php",
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
                        swal.fire(response.status, response.mensagem, response.type)
                        $('input').attr('readonly', false);
                        $("#bt-cadastrar-usuario").attr("disabled", false);
                        $('body').css('cursor', 'auto');
                        //form.reset();      

                    }
                });


            }
        })
    });

});