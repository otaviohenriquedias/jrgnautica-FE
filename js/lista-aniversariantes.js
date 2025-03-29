$(document).ready(function() {
    $.ajax({
        type: 'POST',
        url: 'controllers/controller-get-aniversariantes.php',
        contentType: false,
        cache: false,
        processData: false,
        contentType: "application/json; charset=utf-8",
        success: function(data) {
            $('#retorno-busca').empty().append(data);
        },
        error: function(xhr, ajaxOptions, thrownError) {}


    });


});