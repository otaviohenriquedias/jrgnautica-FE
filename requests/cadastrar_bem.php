<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/listar_fabricantes.js"></script>
<script src="js/lista-propietarios.js"></script>
<script src="js/lista-marina.js"></script>
<script src="js/cadastra_bem.js"></script>
<div class="row">
    <ol class="breadcrumb">
        <li>
            <em class="fa fa-home"></em>
        </li>
        <li class="active">Cadastro de B.E.M</li>
    </ol>
</div>
<form method="post" id="form-cadastra-bem">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><b>Cadastro</b> de B.E.M</h1>
        </div>
    </div>
    <div id="response"></div>
    <div class="panel panel-default">
        <div class="panel-heading">Dados da embarcação</div>
        <div class="panel-body">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Fabricante</label>
                    <select name="fabricantes-barcos" class="form-control" name="fabricante-bem" required>

                    </select>
                </div>
                <div class="form-group">
                    <label>Combustível</label>
                    <select class="form-control" name="combustivel-bem" disabled>
                        <option value="0">Gasolina</option>
                        <option value="1">Diesel</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Marina</label>
                    <select name="marina-bem" class="form-control" name="fabricante-bem" required>
                    </select>
                </div>
                <div class="form-group">
                    <label>Modelo</label>
                    <input class="form-control" name="modelo-bem" placeholder="Ex.: Phantom 450 Full" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Tipo</label>
                    <select class="form-control" required name="tipo-bem">
                        <option value="1">HT</option>
                        <option value="2">Fly</option>
                        <option value="3">Capota</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Quantidade de Motores</label>
                    <select class="form-control" required name="quant-motores-bem">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Tamanho (Pés)</label>
                    <input type="number" step="0.01" class="form-control" placeholder="Ex.: 45" required name="tamanho-bem">
                </div>
                <div class="form-group">
                    <label>Ano</label>
                    <input type="text" name="ano-bem" class="form-control" placeholder="Ex.: 2015" maxlength=4 required>
                </div>
            </div>
            <div class="form-group">
                <button form="form-cadastra-bem" type="submit" class="btn btn-info form-control form-control-lg button-confirmar">Cadastrar B.E.M</button>
            </div>
        </div>
    </div>
</form>
<!--<script src="js/masks.js"></script>-->