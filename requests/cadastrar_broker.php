<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<script src="js/cadastrar_broker.js"></script>
<div class="row">
    <ol class="breadcrumb">
        <li>
            <em class="fa fa-home"></em>
        </li>
        <li class="active">Cadastro de Broker</li>
    </ol>
</div>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><b>Cadastro</b> de Broker</h1>
    </div>
</div>
<form  id="cadastra-broker" name="cadastra-broker" method="post">
    <div id="response">

    </div>
<div class="panel panel-default">
    <div class="panel-heading">Dados do broker</div>
    <div class="panel-body">
        <div class="col-md-6">
                <div class="form-group">
                    <label>Nome</label>
                    <input class="form-control" name="nome-broker" placeholder="Primeiro nome do Broker" required>
                </div>
                <div class="form-group">
                    <label>Sobrenome</label>
                    <input class="form-control" name="sobrenome-broker" placeholder="Sobrenome do Broker" required>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label>Senha</label>
                        <input type="password" class="form-control" name="senha"  id="senha" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label>Confirmar senha</label>
                        <input type="password" class="form-control" name="confirm_senha"  id="confirm_senha" required>
                        </div>
                    </div>
                </div>

        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Permissões</label>
                <select class="form-control" name="permissão-broker" required>
                    <option value="1">Administrador</option>
                    <option value="2">Usuário</option>
                </select>
            </div>
            <div class="form-group">
                <label>CPF</label>
                <input type="text" id="cpf-broker" name="cpf-broker" class="form-control" placeholder="CPF do broker">
            </div>
                <br><br>
                <p id="response_senha">Utilize letras maiúsculas e números.</p>
        </div>
        <div class="form-group">
            <button id="bt-cadastrar-usuario" form="cadastra-broker" type="submit" class="btn btn-info form-control form-control-lg button-confirmar">Cadastrar Broker</button>
        </div>
    </div>
</div>
</form>
<!--<script src="js/masks.js"></script>-->
