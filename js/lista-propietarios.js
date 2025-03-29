$(document).ready(function() {
    $.ajax({
        type: 'POST',
        url: 'controllers/controller-lista-propietario.php',
        contentType: false,
        cache: false,
        processData: false,
        dataType: 'json',
        contentType: "application/json; charset=utf-8",
        success: function(data) {
            var selectBox = $('select[name="propietario-barco"]')
            $.each(data, function (key, value) { 
                $('<option>').val(value.id_clientes).text(value.nome+' '+value.sobrenome).appendTo(selectBox);
            });
        },
        error: function(xhr, ajaxOptions, thrownError) {}


    });


});