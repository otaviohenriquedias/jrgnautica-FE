<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<script src="js/captador.js"></script>
<div class="row">
    <ol class="breadcrumb">
        <li>
            <em class="fa fa-home"></em>
        </li>
        <li class="active">Cadastro de captadores</li>
    </ol>
</div>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><b>Cadastro</b> de captadores</h1>
    </div>
</div>
<form  id="cadastra-captador" name="cadastra-captador" method="post">
    <div id="response">

    </div>
<div class="panel panel-default">
    <div class="panel-heading">Dados do Captador</div>
    <div class="panel-body">
        <div class="col-md-6">
                <div class="form-group">
                    <label>Nome</label>
                    <input class="form-control" name="nome-captador" placeholder="Nome do captador" required>
                </div>
                <div class="form-group">
                    <label>Contato</label>
                    <input class="form-control" name="contato-captador" placeholder="XX (XX) XXXXX-XXXX" id="contato" required>
                </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Categoria</label>
                <select class="form-control" name="categoria-captador" id="combox-captador"  required>
                    <option value="1">Marinheiro</option>
                    <option value="2">Empresa</option>
                </select>
            </div>
            <div class="form-group">
                <label>Empresa</label>
                <input type="text" name="empresa-captador"  id="empresa-captador" class="form-control"  readonly>
            </div>
        </div>
        <div class="form-group">
            <button id="bt-cadastrar-usuario" form="cadastra-captador" type="submit" class="btn btn-info form-control form-control-lg button-confirmar">Cadastrar Captador</button>
        </div>
    </div>
</div>
</form>
<!--<script src="js/masks.js"></script>-->
