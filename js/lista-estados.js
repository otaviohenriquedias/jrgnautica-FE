$(document).ready(function() {
    $.ajax({
        type: 'POST',
        url: 'controllers/controller-get-estados.php',
        contentType: false,
        cache: false,
        processData: false,
        dataType: 'json',
        contentType: "application/json; charset=utf-8",
        success: function(data) {
            var selectBox = $('select[name="localizacao-marina"]')
            $.each(data, function(key, value) {
                $('<option>').val(value.id_estados).text(value.sigla).appendTo(selectBox);
            });
        },
        error: function(xhr, ajaxOptions, thrownError) {}


    });


});