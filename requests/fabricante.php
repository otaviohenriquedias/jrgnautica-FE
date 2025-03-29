<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<script src="js/cadastra-fabricante.js"></script>
<div class="row">
    <ol class="breadcrumb">
        <li>
            <em class="fa fa-home"></em>
        </li>
        <li class="active">Fabricantes</li>
    </ol>
</div>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><b>Cadastrar </b>Fabricantes (Estaleiro)</h1>
    </div>
</div>
<form method="post" id="form-cadastra-estaleiro">
<div class="panel panel-default">
    <div class="row">
        <div class="col-md-12">
            <div class="panel-footer">
                <div class="input-group">
                    <input id="btn-input" type="text" class="form-control input-md" name="nome-fabricante" placeholder="Digite o nome do estaleiro" required/>
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-primary btn-md" id="btn-chat">Cadastrar</button>
                        </span>
                </div>
            </div>
        </div>
    </div>
    <div class="panel-body">
        <div class="col-md-12">
            <div class="panel-heading">
                Insira no nome do estaleiro.
            </div>
            <div class="panel-body articles-container" id="retorno-busca">
            </div>
        </div>
    </div>
</form>
            