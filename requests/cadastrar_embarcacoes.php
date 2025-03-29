<style>
    /* Adicione este estilo no seu arquivo de folha de estilo (CSS) */
    select,
    .botao-cliente {
        height: 50px !important
            /* Ajuste a altura conforme necessário */
    }
</style>
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Cadastrar cliente</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><b>Cadastro</b> de clientes</h1>
                    </div>
                </div>
                <form id="cadastra-usuario" name="cadastra-usuario" method="post">
                    <div id="response">

                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">Dados do cliente</div>
                        <div class="panel-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nome</label>
                                    <input class="form-control" name="nome-cliente" placeholder="Primeiro nome do cliente" required>
                                </div>
                                <div class="form-group">
                                    <label>Sobrenome</label>
                                    <input class="form-control" name="sobrenome-cliente" placeholder="Sobrenome do cliente" required>
                                </div>
                                <div class="form-group">
                                    <label>Contato</label>
                                    <input class="form-control" name="contato-cliente" placeholder="XX (XX) XXXXX-XXXX" id="contato" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Sexo</label>
                                    <select class="form-control" name="sexo-cliente" required>
                                        <option value="1">Masculino</option>
                                        <option value="2">Feminino</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input type="email" name="email-cliente" class="form-control" placeholder="E-mail do cliente">
                                </div>
                                <div class="form-group">
                                    <label>Data de Nascimento</label>
                                    <input class="form-control" name="nascimento-cliente" placeholder="XX/XX/XXXX" id="dt-nascimento" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <button id="bt-cadastrar-usuario" form="cadastra-usuario" type="submit" class="btn btn-info form-control form-control-lg button-confirmar">Cadastrar Cliente</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- FIM - MODAL DE CADASTRAR DE CLIENTE -->

<div class="row">
    <ol class="breadcrumb">
        <li>
            <em class="fa fa-home"></em>
        </li>
        <li class="active">Cadastro de Embarcações</li>
    </ol>
</div>
<form method="post" id="form-cadastra-embarcacao" enctype="multipart/form-data">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><b>Cadastro</b> de Embarcações</h1>
        </div>
    </div>
    <div id="response"></div>
    <div class="panel panel-default">
        <div class="panel-heading">Dados da embarcação</div>
        <div class="panel-body">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Fabricante</label>
                    <select name="fabricantes-barcos" class="form-control" name="fabricante-barco" required>

                    </select>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Combustível</label>
                        <select class="form-control" name="combustivel-barco" required>
                            <option value="0">Gasolina</option>
                            <option value="1">Diesel</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Marina</label>
                            <select name="marina-bem" class="form-control" required>
                                <option value="0">DEFINIR DEPOIS</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Modelo</label>
                            <input class="form-control" name="modelo-barco" placeholder="Ex.: Phantom 450 Full" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Valor (R$)</label>
                            <input class="form-control" name="valor-barco" placeholder="Ex.: 7.500.000,00 [SEM R$]" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Ano</label>
                    <input type="text" name="ano-barco" class="form-control" placeholder="Ex.: 2015" maxlength=4 required>
                </div>
                <div class="form-group">
                    <label>Horas</label>
                    <input type="number" name="horas-barco" class="form-control" placeholder="Ex.: 500" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Tipo</label>
                    <select class="form-control" required name="tipo-barco">
                        <option value="1">HT</option>
                        <option value="2">Fly</option>
                        <option value="3">Capota</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Quantidade de Motores</label>
                            <select class="form-control" required name="quant-motores-barco">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tipo de propulsor</label>
                            <select class="form-control" required name="tipo-propulsor">
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Tamanho (Pés)</label>
                    <input type="number" step="0.01" class="form-control" placeholder="Ex.: 45" required name="tamanho-barco">
                </div>
                <div class="form-group">
                    <label>Motorização</label>
                    <input class="form-control" name="motorizacao-barco" placeholder="Ex.: Volvo D3" required>
                </div>
                <div class="form-group">
                    <label>Potência (HP)</label>
                    <input type="number" name="potencia-barco" class="form-control" placeholder="Ex.: 500" required>
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">Informações adicionais</div>
        <div class="panel-body">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-10">
                        <div class="form-group">
                            <label>Proprietário</label>
                            <select class="form-control" name="propietario-barco" required>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>&nbsp;</label>
                            <button id="bt-cadastrar-usuario" form="form-atualiza-cliente" type="button" class="btn btn-warning form-control form-control-lg button-confirmar bt-cadastrar-usuario" data-toggle="modal" data-target="#myModal">
                                <i class="fa fa-user-plus" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Off-market?</label>
                    <select class="form-control" name="market-barco" required>
                        <option value="1">Sim</option>
                        <option value="0">Não</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Captador</label>
                    <select class="form-control" required name="captador-barco"></select>
                </div>
                <div class="form-group">
                    <label>Vendida?</label>
                    <select class="form-control" name="vendida-barco" required>
                        <option value="0">Não</option>
                        <option value="1">Sim</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">Descrição</div>
        <div class="panel-body">
            <div class="col-md-12">
                <div class="mb-3">
                    <div class="form-group">
                        <label>Descritivo do Barco</label>
                        <textarea name="descricao-barco" class="form-control" rows="10" cols="20" required placeholder="Ex.: Antena Sky, Som Marinizado e etc."></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group">
        <button form="form-cadastra-embarcacao" type="submit" class="btn btn-info form-control form-control-lg button-confirmar">Cadastrar Embarcação</button>
    </div>
</form>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/listar_fabricantes.js"></script>
<script src="js/lista-propietarios.js"></script>
<script src="js/lista_propulsor.js"></script>
<script src="js/lista-marina.js"></script>
<script src="js/listar-captador.js"></script>
<script src="js/cadastra_embarcacao.js"></script>
<script>
    $(document).ready(function () {
    $('#cadastra-usuario').submit(function (e) { 
        e.preventDefault();
        var form = $('form')[0];
        formDados = new FormData(form);
        swal.fire({
            title: 'Confirmar cadastro do Cliente?',
            icon: "question",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim',
            cancelButtonText: 'Não'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        type: "post",
                        url: "controllers/controller-cadastro-cliente.php",
                        data: formDados,
                        contentType: false,
                        cache: false,
                        processData: false,
                        dataType: 'json',
                        success: function (response) {
                           swal.fire(response.status, response.Mensagem, response.type);
                           $.ajax({
                                type: 'POST',
                                url: 'controllers/controller-lista-propietario.php',
                                contentType: false,
                                cache: false,
                                processData: false,
                                dataType: 'json',
                                contentType: "application/json; charset=utf-8",
                                success: function(data) {
                                    $('select[name="propietario-barco"]').empty();
                                    var selectBox = $('select[name="propietario-barco"]')
                                    $.each(data, function (key, value) { 
                                        $('<option>').val(value.id_clientes).text(value.nome+' '+value.sobrenome).appendTo(selectBox);
                                    });
                                    $('#myModal').hide();

                                },
                                error: function(xhr, ajaxOptions, thrownError) {}


                            });
                           
                        }
                    });
           
                
                }
            })
    });
    
});

</script>