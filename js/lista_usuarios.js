$(document).ready(function() {
    $.ajax({
        type: 'POST',
        url: 'controllers/controller-lista-usuarios.php',
        contentType: false,
        cache: false,
        processData: false,
        dataType: 'json',
        contentType: "application/json; charset=utf-8",
        success: function(data) {
            var selectBox = $('select[name="atendimento"]')
            $.each(data, function(key, value) {
                $('<option>').val(value.id_usuario).text(value.nome).appendTo(selectBox);
            });
        },
    });



});