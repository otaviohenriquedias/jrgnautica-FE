$(document).ready(function() {
    $.ajax({
        type: 'POST',
        url: 'controllers/controller-lista-captador.php',
        contentType: false,
        cache: false,
        processData: false,
        dataType: 'json',
        contentType: "application/json; charset=utf-8",
        success: function(data) {
            var selectBox = $('select[name="captador-barco"]')
            $.each(data, function (key, value) { 
                $('<option>').val(value.id_captador).text(value.nome_captador).appendTo(selectBox);
             
            });
        },
        error: function(xhr, ajaxOptions, thrownError) {}


    });


});