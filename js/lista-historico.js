$(document).ready(function() {
    $.ajax({
        type: 'POST',
        url: 'controllers/controller-lista-historico.php?ref=' + parseInt($('#i001').html()),
        contentType: false,
        cache: false,
        processData: false,
        success: function(data) {
            $('.modal-body').empty().append(data).fadeIn('slow');
        },
        error: function(xhr, ajaxOptions, thrownError) {}


    });


});