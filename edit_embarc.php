<?php
session_start();
if (!isset($_SESSION["id_usuario"])) {
    header('Location: login.php');
}
if (!isset($_GET["id_emarb"])) {
    header('Location: index.php');
}

include 'config.php';
$conexaoPool = Conexao::getInstance(); 
$embarcacao = new Embarcacao($conexaoPool->getConexao(), $conexaoPool);
$interessados = new Procura ($conexaoPool->getConexao(), $conexaoPool);
$marina = new Marina($conexaoPool->getConexao(), $conexaoPool);
function setReadonly()
{
    if ($_SESSION['tipo'] == 2) {
        echo 'readonly';
    }
}
$id = $embarcacao->editarEmbarcacao($_GET['id_emarb'], 'marina_Marina');
$data = $marina->listaMarinaEdit($id);
if($embarcacao->editarEmbarcacao($_GET['id_emarb'], 'marina_Marina') == 0){
    $data['VALUE'] = 0;
    $data['NOME'] = 'DEFINIR DEPOIS';
    $data['UF'] = '';



}
?>

<!DOCTYPE html>
<html>

<head><meta charset="utf-8">
    

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $embarcacao->editarEmbarcacao($_GET['id_emarb'], 'modelo') ?></title>
    <link rel="icon" type="image/x-icon" href="assets/JR-ICON.png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/chart.min.js"></script>
    <script src="js/chart-data.js"></script>
    <script src="js/easypiechart.js"></script>
    <script src="js/easypiechart-data.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/custom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <?= SWETALERT ?>
    <script src="js/listar_fabricantes.js"></script>
    <script src="js/lista_propulsor.js"></script>
    <script src="js/lista-propietarios.js"></script>
    <script src="js/listar-captador.js"></script>
    <script src="js/atuliza-embarcacao.js"></script>
    <script src="js/lista-marina.js"></script>

    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
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
                <div class="profile-usertitle-name"><?php echo $_SESSION['nome'] ?></div>
                <div class="profile-usertitle-status"><span class="indicator label-success"></span><?php echo $_SESSION['tipo-user'] ?></div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="divider"></div>
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th colspan="2">Interessados</th>
                </tr>
            </thead>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Whatsapp</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $interessados->getInteressados ($embarcacao->editarEmbarcacao($_GET['id_emarb'], 'id_embarcacao'));
            ?>
            </tbody>
        </table>
        <hr>
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
                <li class="active"><?php echo $embarcacao->editarEmbarcacao($_GET['id_emarb'], 'fabricante') ?> / <?php echo $embarcacao->editarEmbarcacao($_GET['id_emarb'], 'modelo') ?></li>
            </ol>
        </div>
        <form method="post" id="form-atualiza-embarcacao">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><b>Editar</b> Embarcações<sup>REF:::<span id="i001"><?php echo $embarcacao->editarEmbarcacao($_GET['id_emarb'], 'id_embarcacao') ?></span></sup>
                </div>
            </div>
            <div id="response"></div>
            <div class="panel panel-default">
                <div class="panel-heading">Dados da embarcação</div>
                <div class="panel-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Fabricante </label>
                            <select name="fabricantes-barcos" class="form-control" name="fabricante-barco" <?php if ($_SESSION['tipo'] == 2) {
                                                                                                                echo 'disabled';
                                                                                                            } ?> required <?php if ($_SESSION['tipo'] == 2) {
                                                                                                                                echo 'disabled';
                                                                                                                            } ?>>
                                <option value=<?php echo $embarcacao->editarEmbarcacao($_GET['id_emarb'], 'Fabricantes_id_fabricantes') ?>><?php echo $embarcacao->editarEmbarcacao($_GET['id_emarb'], 'fabricante') ?></option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                                <label>Combustível</label>
                                    <select class="form-control" name="combustivel-barco" <?php if ($_SESSION['tipo'] == 2) {
                                                                                                echo 'disabled';
                                                                                            } ?> required <?php if ($_SESSION['tipo'] == 2) {
                                                                                                                echo 'disabled';
                                                                                                            } ?>>
                                        <option value="0" <?php echo $embarcacao->editarEmbarcacao($_GET['id_emarb'], 'combustivel') == 'Gasolina' ? 'selected' : '' ?>>Gasolina</option>
                                        <option value="1" <?php echo $embarcacao->editarEmbarcacao($_GET['id_emarb'], 'combustivel') == 'Diesel' ? 'selected' : '' ?>>Diesel</option>
                                    </select>
                            </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Marina</label>
                                        <select name="marina-bem" class="form-control" <?php if ($_SESSION['tipo'] == 2) {
                                                                                                                echo 'disabled';
                                                                                                            } ?> required <?php if ($_SESSION['tipo'] == 2) {
                                                                                                                                echo 'disabled';
                                                                                                                            } ?> required>                                                                                                            
                                            <option value='<?php echo $data['VALUE']?>'><?php echo $data['NOME'].' '.$data['UF']?></option>                                                                                    
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Modelo</label>
                                    <input class="form-control" value="<?php echo $embarcacao->editarEmbarcacao($_GET['id_emarb'], 'modelo') ?>" <?php setReadonly() ?> name="modelo-barco" placeholder="Ex.: Phantom 450 Full" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Valor (R$)</label>
                                    <input class="form-control" name="valor-barco" value="<?php echo number_format($embarcacao->editarEmbarcacao($_GET['id_emarb'], 'valor'), 2, ',', '')  ?>" placeholder="Ex.: 7.500.000,00 [SEM R$]" <?php setReadonly() ?> required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Ano</label>
                            <input type="text" name="ano-barco" class="form-control" <?php setReadonly() ?> placeholder="Ex.: 2015" maxlength=4 value="<?php echo $embarcacao->editarEmbarcacao($_GET['id_emarb'], 'ano') ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Horas</label>
                            <input type="number" name="horas-barco" <?php setReadonly() ?> class="form-control" placeholder="Ex.: 500" value="<?php echo $embarcacao->editarEmbarcacao($_GET['id_emarb'], 'horas') ?>" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tipo</label>
                            <select class="form-control" required name="tipo-barco" <?php if ($_SESSION['tipo'] == 2) {
                                                                                        echo 'disabled';
                                                                                    } ?>>
                                <option value="1" <?php echo $embarcacao->editarEmbarcacao($_GET['id_emarb'], 'tipo') == 'HT' ? 'selected' : '' ?>>HT</option>
                                <option value="2" <?php echo $embarcacao->editarEmbarcacao($_GET['id_emarb'], 'tipo') == 'Fly' ? 'selected' : '' ?>>Fly</option>
                                <option value="3" <?php echo $embarcacao->editarEmbarcacao($_GET['id_emarb'], 'tipo') == 'Capota' ? 'selected' : '' ?>>Capota</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Quantidade de Motores</label>
                                    <select class="form-control" required name="quant-motores-barco" <?php if ($_SESSION['tipo'] == 2) {
                                                                                                            echo 'disabled';
                                                                                                        } ?>>
                                        <option value="1" <?php echo $embarcacao->editarEmbarcacao($_GET['id_emarb'], 'quant_motor') == '1' ? 'selected' : '' ?>>1</option>
                                        <option value="2" <?php echo $embarcacao->editarEmbarcacao($_GET['id_emarb'], 'quant_motor') == '2' ? 'selected' : '' ?>>2</option>
                                        <option value="3" <?php echo $embarcacao->editarEmbarcacao($_GET['id_emarb'], 'quant_motor') == '3' ? 'selected' : '' ?>>3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tipo de propulsor</label>
                                    <select class="form-control" required name="tipo-propulsor" <?php if ($_SESSION['tipo'] == 2) {
                                                                                                    echo 'disabled';
                                                                                                } ?>>
                                        <option value=<?php echo $embarcacao->editarEmbarcacao($_GET['id_emarb'], 'id_propulsor') ?>><?php echo $embarcacao->editarEmbarcacao($_GET['id_emarb'], 'modelopropulsor') ?></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tamanho (Pés)</label>
                            <input type="number" <?php setReadonly() ?> class="form-control" placeholder="Ex.: 45" required name="tamanho-barco" value="<?php echo $embarcacao->editarEmbarcacao($_GET['id_emarb'], 'tamanho') ?>">
                        </div>
                        <div class="form-group">
                            <label>Motorização</label>
                            <input class="form-control" <?php setReadonly() ?> name="motorizacao-barco" placeholder="Ex.: Volvo D3" required value="<?php echo $embarcacao->editarEmbarcacao($_GET['id_emarb'], 'modelo_motor') ?>">
                        </div>
                        <div class="form-group">
                            <label>Potência (HP)</label>
                            <input type="number" <?php setReadonly() ?> name="potencia-barco" class="form-control" placeholder="Ex.: 500" required value="<?php echo $embarcacao->editarEmbarcacao($_GET['id_emarb'], 'potencia') ?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Informações adicionais</div>
                <div class="panel-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Propietário</label>
                            <select class="form-control" name="propietario-barco" required <?php if ($_SESSION['tipo'] == 2) {
                                                                                                echo 'disabled';
                                                                                            } ?>>
                                <option value=<?php echo $embarcacao->editarEmbarcacao($_GET['id_emarb'], 'Clientes_id_clientes') ?>><?php echo $embarcacao->editarEmbarcacao($_GET['id_emarb'], 'nome') ?> <?php echo $embarcacao->editarEmbarcacao($_GET['id_emarb'], 'sobrenome') ?></option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Off-market?</label>
                            <select class="form-control" name="market-barco" required <?php if ($_SESSION['tipo'] == 2) {
                                                                                            echo 'disabled';
                                                                                        } ?>>
                                <option value="1" <?php echo $embarcacao->editarEmbarcacao($_GET['id_emarb'], 'offmarket') == '1' ? 'selected' : '' ?>>Sim</option>
                                <option value="0" <?php echo $embarcacao->editarEmbarcacao($_GET['id_emarb'], 'offmarket') == '0' ? 'selected' : '' ?>>Não</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Captador</label>
                            <select class="form-control" required name="captador-barco" <?php if ($_SESSION['tipo'] == 2) {
                                                                                            echo 'disabled';
                                                                                        } ?>>
                                <option value=<?php echo $embarcacao->editarEmbarcacao($_GET['id_emarb'], 'Captador_id_captador') ?>><?php echo $embarcacao->editarEmbarcacao($_GET['id_emarb'], 'nome_captador') ?></option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Vendida?</label>
                            <select class="form-control" name="vendida-barco" required <?php if ($_SESSION['tipo'] == 2) {
                                                                                            echo 'disabled';
                                                                                        } ?>>
                                <option value="0" <?php echo $embarcacao->editarEmbarcacao($_GET['id_emarb'], 'vendido') == '0' ? 'selected' : '' ?>>Não</option>
                                <option value="1" <?php echo $embarcacao->editarEmbarcacao($_GET['id_emarb'], 'vendido') == '1' ? 'selected' : '' ?>>Sim</option>
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
                                <label>Descritivo do Barco (Pule uma linha a cada descrição)</label>
                                <textarea <?php setReadonly() ?> name="descricao-barco" class="form-control" rows="10" cols="20" required placeholder="Ex.: Antena Sky; Som Marinizado e etc." value="">
<?php echo $embarcacao->editarEmbarcacao($_GET['id_emarb'], 'descricao') ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button <?php if ($_SESSION['tipo'] == 2) {
                            echo 'disabled';
                        } ?> form="form-atualiza-embarcacao" type="submit" class="btn btn-info form-control form-control-lg button-confirmar">Salvar Alterarções</button>
            </div>
        </form>
        <!--<script src="js/masks.js"></script>-->
    </div>
</body>

</html>