<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<script src="js/consulta_clientes.js"></script>
<div class="row">
    <ol class="breadcrumb">
        <li>
            <em class="fa fa-home"></em>
        </li>
        <li class="active">Clientes</li>
    </ol>
</div>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><b>Clientes </b>Disponíveis</h1>
    </div>
</div>
<form method="post" id="form-consulta-cliente">
<div class="panel panel-default">
    <div class="row">
        <div class="col-md-6">
            <div class="panel-footer">
                <div class="input-group option">
                    <select class="form-control" name="heat-cliente" required>
                        <option value="todos">Todos</option>
                        <option value="1">Quente</option>
                        <option value="2">Morno</option>
                        <option value="3">Frio</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel-footer">
                <div class="input-group option">
                    <select class="form-control" name="ordem-data-cliente" required>
                        <option value="1">Dos mais antigos para os mais recentes</option>
                        <option value="2">Dos mais recentes para os mais antigos</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel-footer">
                <div class="input-group">
                    <input id="btn-input" type="text" class="form-control input-md" name="nome-cliente" placeholder="Digite o nome do cliente" />
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-primary btn-md" id="btn-chat">Pesquisar</button>
                        </span>
                </div>
            </div>
        </div>
    </div>
    <div class="panel-body">
        <div class="col-md-12">
            <div class="panel-heading">
                Resultado da pesquisa
            </div>
            <div class="panel-body articles-container" id="retorno-busca">
            </div>
        </div>
</div>
</form>
            