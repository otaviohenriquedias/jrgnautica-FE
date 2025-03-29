<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<script src="js/cadastra_clientes.js"></script>
<script src="js/listar-captador.js"></script>
<div class="row">
    <ol class="breadcrumb">
        <li>
            <em class="fa fa-home"></em>
        </li>
        <li class="active">Cadastro de clientes</li>
    </ol>
</div>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><b>Cadastro</b> de clientes</h1>
    </div>
</div>
<form  id="cadastra-usuario" name="cadastra-usuario" method="post">
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
<!--<script src="js/masks.js"></script>-->
