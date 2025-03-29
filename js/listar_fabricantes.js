$(document).ready(function() {
    $.ajax({
        type: 'POST',
        url: 'controllers/listar-fabricantes.php',
        contentType: false,
        cache: false,
        processData: false,
        dataType: 'json',
        contentType: "application/json; charset=utf-8",
        success: function(data) {
            var selectBox = $('select[name="fabricantes-barcos"]')
            $.each(data, function(key, value) {
                $('<option>').val(value.id_fabricantes).text(value.fabricante).appendTo(selectBox);
            });
        },
        error: function(xhr, ajaxOptions, thrownError) {}


    });


});