<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/lista-estados.js"></script>
<script src="js/cadastra-marina.js"></script>
<div class="row">
    <ol class="breadcrumb">
        <li>
            <em class="fa fa-home"></em>
        </li>
        <li class="active">Cadastro de Marinas</li>
    </ol>
</div>
<form method="post" id="form-cadastra-marina">
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><b>Cadastro</b> de Marinas</h1>
    </div>
</div>
<div id="response"></div>
<div class="panel panel-default">
    <div class="panel-heading">Dados da Marina</div>
    <div class="panel-body">
        <div class="col-md-6">
                <div class="form-group">
                    <label>Localização</label>
                    <select class="form-control" name="localizacao-marina" required>

                    </select>
                </div>
                
                <div class="form-group">
                    <label>Nome</label>
                    <input class="form-control" name="nome-marina" placeholder="Ex.: Marinas Verolme" required>
                </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Cidade</label>
                <input class="form-control" name="cidade-marina" placeholder="Ex.: Angra dos Reis" required>
            </div>
            <div class="form-group">
                <label>Contato</label>
                <input type="text" name="contato-marina" class="form-control"  placeholder="Ex.: 55 (24) 3363-3215" required>
            </div>
        </div>
        <div class="form-group">
            <button form="form-cadastra-marina" id="cadastra-marinas" type="submit" class="btn btn-info form-control form-control-lg button-confirmar">Cadastrar Marina</button>
        </div>
    </div>
</div>

</form>
<!--<script src="js/masks.js"></script>-->