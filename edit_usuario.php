<?php 
    session_start();
    if (!isset($_SESSION["id_usuario"])){
        header('Location: login.php');
    }
    if (!isset($_GET["id_user"])){
        header('Location: index.php');
    }
    include 'config.php';
    $conexaoPool = Conexao::getInstance(); // Obtém o pool de conexões
    $usuario = new Usuario($conexaoPool->getConexao(), $conexaoPool);
    $name = explode(" ", $usuario->editaUsuario($_GET["id_user"], 'nome'));

?>
<!DOCTYPE html>
<html>
<head><meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $usuario->editaUsuario($_GET["id_user"], 'nome') ?></title>
<link rel="icon" type="image/x-icon" href="assets/JR-ICON.png">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<link rel="stylesheet" href="css/sweetalert2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
<script src="https://unpkg.com/sweetalert2@7.12.15/dist/sweetalert2.all.js"></script>

<!--Custom Font-->
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
</head>
<body>
    <form name="altera-usuario" id="altera-usuario">
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <img src="assets/logo-jr-broker.png" width="150px" id="logo-superior"></img>
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
    </div><!-- /.container-fluid -->
</nav>
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <img src="assets/user.png" class="img-responsive" alt="">
        </div>
        <div class="profile-usertitle">
            <div class="profile-usertitle-name"><?php echo $_SESSION['nome']?></div>
            <div class="profile-usertitle-status"><span class="indicator label-success"></span><?php echo $_SESSION['tipo-user']?></div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <ul class="nav menu">
    <li class="active"><a href="javascript:window.close()"><em class="fa fa-times"></em> Fechar Página </a></li>
    </ul>
</div>
<!--/.sidebar-->
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" id="conteudo-painel">
    <div class="row">
        <ol class="breadcrumb">
            <li>
                <em class="fa fa-home"></em>
            </li>
            <li class="active">Brokers / <?php echo $usuario->editaUsuario($_SESSION['id_usuario'], 'nome') ?> </li>
        </ol>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><b>Editar</b> Broker<sup>REF:::<span id="i001"><?php echo $_GET['id_user']?></span></sup>
        </div>
    </div>
    <div id="response"></div>
    <div class="panel panel-default">
        <div class="panel-heading">Dados do broker</div>
        <div class="panel-body">
        <div class="col-md-6">
                <div class="form-group">
                    <label>Nome</label>
                    <input class="form-control" name="nome-broker" placeholder="Primeiro nome do Broker" value="<?php echo  $name[0]?>" required>
                </div>
                <div class="form-group">
                    <label>Sobrenome</label>
                    <input class="form-control" name="sobrenome-broker" placeholder="Sobrenome do Broker"  value="<?php echo  $name[1]?>"required>
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
                    <option value="1" <?php echo $usuario->editaUsuario($_GET["id_user"], 'TipoUsuario_id_tipo_usuario') == 1 ? 'selected': ''?>>Administrador</option>
                    <option value="2" <?php echo $usuario->editaUsuario($_GET["id_user"], 'TipoUsuario_id_tipo_usuario') == 2 ? 'selected': ''?>>Usuário</option>
                </select>
            </div>
            <div class="form-group">
                <label>CPF</label>
                <input type="text" id="cpf-broker" value=" <?php echo $usuario->editaUsuario($_GET["id_user"], 'cpf')?>" name="cpf-broker" class="form-control" placeholder="CPF do broker">
            </div>
                <br><br>
                <p id="response_senha">Utilize letras maiúsculas e números.</p>
        </div>
        <div class="form-group">
            <button id="bt-cadastrar-usuario" form="altera-usuario" type="submit" class="btn btn-info form-control form-control-lg button-confirmar">Editar Broker</button>
        </div>
    </div>
        </div>
    </div>
</div>
</div>
<!--/.panel-->
</div>
<!--/.col-->
</div>
</div>
</div>
</div>
</form>
</body>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/chart.min.js"></script>
<script src="js/chart-data.js"></script>
<script src="js/easypiechart.js"></script>
<script src="js/easypiechart-data.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/custom.js"></script>
<script src="js/cadastrar_broker.js"></script>
<script src="js/busca_paginas.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
<?= SWETALERT ?>
<script type="text/javascript">
	$(document).ready(function() {
		$('#cpf-broker').mask('000.000.000-00')
	});
</script>
</html>