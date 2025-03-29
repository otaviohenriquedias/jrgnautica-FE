$(document).ready(function() {
    $('#form-cadastra-marina').submit(function(e) {
        e.preventDefault();
        var form = $('form')[0];
        formDados = new FormData(form);
        swal.fire({
            title: 'Confirmar cadastro da Marina?',
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
                    url: "controllers/controller-cadastra-marina.php",
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
                        swal.fire(response.status, response.mensagem, response.type)
                        $('select').attr('readonly', false);
                        $('input').attr('readonly', false);
                        $("#cadastra-marinas").attr("disabled", false);
                        $('body').css('cursor', 'auto');
                    }
                });

            }
        })



    });

});