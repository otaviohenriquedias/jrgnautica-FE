$(document).ready(function() {
    $.ajax({
        type: 'post',
        url: 'controllers/controller-getDash.php',
        contentType: false,
        cache: false,
        processData: false,
        dataType: 'json',
        success: function(data) {
            $('#TP').empty().append(data.total_procuras)
            $('#TE').empty().append(data.total_embarcacao)
            $('#TC').empty().append(data.total_clientes)
            $('#TL').empty().append(data.total_leads)
        },

    });
    $.ajax({
        type: "post",
        url: "controllers/controller-get-sinc.php",
        beforeSend: () => {
            var loader = $('<center><p><img src="assets/loader.gif" width="45"><br><h4>Sincronizando Interesses...</h4></p></center>');
            $('body').css('cursor', 'wait');
            $("#content-dashboard").empty().append(loader)
        },
        success: function(response) {
            $('#content-dashboard').empty().append(response).fadeIn('slow');
            $('body').css('cursor', 'auto');
            //form.reset();      

        }
    });


});