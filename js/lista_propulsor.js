$(document).ready(function() {
    $.ajax({
        type: 'POST',
        url: 'controllers/controller-lista-propulsor.php',
        contentType: false,
        cache: false,
        processData: false,
        dataType: 'json',
        contentType: "application/json; charset=utf-8",
        success: function(data) {
            var selectBox = $('select[name="tipo-propulsor"]')
            $.each(data, function(key, value) {
                $('<option>').val(value.id_propulsor).text(value.modelopropulsor).appendTo(selectBox);
            });
        },
        error: function(xhr, ajaxOptions, thrownError) {}


    });


});