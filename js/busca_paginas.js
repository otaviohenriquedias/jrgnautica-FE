$(document).ready(function() {
    $.ajax({
        type: "post",
        url: "controllers/controller-count-happy.php",
        success: function(response) {
            $('#count').empty().append(response);
        }
    });
    $('#bt-captadores').on('click', function() {
        $.ajax({
            type: "post",
            url: "requests/lista_captadores.php",
            beforeSend: function() {
                var loader = $('<center><p><img src="assets/loader.gif" width="45"><br><h4>Carregando dados...</h4></p></center>');
                $('#conteudo-painel').empty().append(loader);
            },
            success: function(response) {
                $('#conteudo-painel').empty().append(response);
            }
        });
    });
    $('#bt-brokers').on('click', function() {
        $.ajax({
            type: "post",
            url: "requests/broker.php",
            beforeSend: function() {
                var loader = $('<center><p><img src="assets/loader.gif" width="45"><br><h4>Carregando dados...</h4></p></center>');
                $('#conteudo-painel').empty().append(loader);
            },
            success: function(response) {
                $('#conteudo-painel').empty().append(response);
            }
        });
    });
    $('#cad_bem').on('click', function() {
        $.ajax({
            type: "post",
            url: "requests/cadastrar_bem.php",
            beforeSend: function() {
                var loader = $('<center><p><img src="assets/loader.gif" width="45"><br><h4>Carregando dados...</h4></p></center>');
                $('#conteudo-painel').empty().append(loader);
            },
            success: function(response) {
                $('#conteudo-painel').empty().append(response);
            }
        });
    });
    $('#bt-fp').on('click', function() {
        $.ajax({
            type: "post",
            url: "requests/follow-up.php",
            beforeSend: function() {
                var loader = $('<center><p><img src="assets/loader.gif" width="45"><br><h4>Carregando dados...</h4></p></center>');
                $('#conteudo-painel').empty().append(loader);
            },
            success: function(response) {
                $('#conteudo-painel').empty().append(response);
            }
        });
    });
    $('#cad_broker').on('click', function() {
        $.ajax({
            type: "post",
            url: "requests/cadastrar_broker.php",
            beforeSend: function() {
                var loader = $('<center><p><img src="assets/loader.gif" width="45"><br><h4>Carregando dados...</h4></p></center>');
                $('#conteudo-painel').empty().append(loader);
            },
            success: function(response) {
                $('#conteudo-painel').empty().append(response);
            }
        });
    });
    $('#cad_marinas').on('click', function() {
        $.ajax({
            type: "post",
            url: "requests/cadastrar_marinas.php",
            beforeSend: function() {
                var loader = $('<center><p><img src="assets/loader.gif" width="45"><br><h4>Carregando dados...</h4></p></center>');
                $('#conteudo-painel').empty().append(loader);
            },
            success: function(response) {
                $('#conteudo-painel').empty().append(response);
            }
        });
    });
    $('#cad_clientes').on('click', function() {
        $.ajax({
            type: "post",
            url: "requests/cadastrar_clientes.php",
            beforeSend: function() {
                var loader = $('<center><p><img src="assets/loader.gif" width="45"><br><h4>Carregando dados...</h4></p></center>');
                $('#conteudo-painel').empty().append(loader);
            },
            success: function(response) {
                $('#conteudo-painel').empty().append(response);
            }
        });
    });
    $('#cad_embarcacoes').on('click', function() {
        $.ajax({
            type: "post",
            url: "requests/cadastrar_embarcacoes.php",
            beforeSend: function() {
                var loader = $('<center><p><img src="assets/loader.gif" width="45"><br><h4>Carregando dados...</h4></p></center>');
                $('#conteudo-painel').empty().append(loader);
            },
            success: function(response) {
                $('#conteudo-painel').empty().append(response);
            }
        });
    });
    $('#bt-disponivel').on('click', function() {
        $.ajax({
            type: "post",
            url: "requests/embarcacoes_disponiveis.php",
            beforeSend: function() {
                var loader = $('<center><p><img src="assets/loader.gif" width="45"><br><h4>Carregando dados...</h4></p></center>');
                $('#conteudo-painel').empty().append(loader);
            },
            success: function(response) {
                $('#conteudo-painel').empty().append(response);
            }
        });
    });
    $('#bt-clientes').on('click', function() {
        $.ajax({
            type: "post",
            url: "requests/clientes.php",
            beforeSend: function() {
                var loader = $('<center><p><img src="assets/loader.gif" width="45"><br><h4>Carregando dados...</h4></p></center>');
                $('#conteudo-painel').empty().append(loader);
            },
            success: function(response) {
                $('#conteudo-painel').empty().append(response);
            }
        });
    });
    $('#cad-captadores').on('click', function() {
        $.ajax({
            type: "post",
            url: "requests/captadores.php",
            beforeSend: function() {
                var loader = $('<center><p><img src="assets/loader.gif" width="45"><br><h4>Carregando dados...</h4></p></center>');
                $('#conteudo-painel').empty().append(loader);
            },
            success: function(response) {
                $('#conteudo-painel').empty().append(response);
            }
        });




    });
    $('#bt-leads').on('click', function() {
        $.ajax({
            type: "post",
            url: "requests/leads.php",
            beforeSend: function() {
                var loader = $('<center><p><img src="assets/loader.gif" width="45"><br><h4>Carregando dados...</h4></p></center>');
                $('#conteudo-painel').empty().append(loader);
            },
            success: function(response) {
                $('#conteudo-painel').empty().append(response);
            }
        });



    });
    $('#bt-marinas').on('click', function() {
        $.ajax({
            type: "post",
            url: "requests/marinas.php",
            beforeSend: function() {
                var loader = $('<center><p><img src="assets/loader.gif" width="45"><br><h4>Carregando dados...</h4></p></center>');
                $('#conteudo-painel').empty().append(loader);
            },
            success: function(response) {
                $('#conteudo-painel').empty().append(response);
            }
        });


    });
    $('#cad_fab').on('click', function() {
        $.ajax({
            type: "post",
            url: "requests/fabricante.php",
            beforeSend: function() {
                var loader = $('<center><p><img src="assets/loader.gif" width="45"><br><h4>Carregando dados...</h4></p></center>');
                $('#conteudo-painel').empty().append(loader);
            },
            success: function(response) {
                $('#conteudo-painel').empty().append(response);
            }
        });


    });
    $('#aniversariantes').on('click', function() {
        $.ajax({
            type: "post",
            url: "requests/aniversariantes.php",
            beforeSend: function() {
                var loader = $('<center><p><img src="assets/loader.gif" width="45"><br><h4>Carregando dados...</h4></p></center>');
                $('#conteudo-painel').empty().append(loader);
            },
            success: function(response) {
                $('#conteudo-painel').empty().append(response);
            }
        });


    });
    $('#logout').on('click', function() {
        swal.fire({
            title: 'Deseja sair do sistema?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim',
            cancelButtonText: 'Não'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    type: "post",
                    url: "controllers/controller-logout.php",
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function() {
                        window.location.replace("login.php");
                    }
                });

            }
        })
    });
});