<?php
session_start();
if (!isset($_SESSION["id_usuario"])) {
    header('Location: login.php');
}
if (!isset($_GET["id_cli"])) {
    header('Location: index.php');
}
include 'config.php';
$conexao = new Conexao();
$procura = new Procura($conexao);
$cliente = new Cliente($conexao);
$cliente->setCliente($_GET['id_cli']);
function setReadonly()
{
    if ($_SESSION['tipo'] == 2) {
        echo 'readonly';
    }
}
?>
<!DOCTYPE html>
<html>

<head><meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $cliente->__get('nome') . ' ' . $cliente->__get('sobrenome') ?></title>
    <link rel="icon" type="image/x-icon" href="assets/JR-ICON.png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.min.css" rel="stylesheet">
    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
</head>
<body>
    <div class="container-fluid">
        <!-- The Modal -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
                <h4 class="modal-title">Histórico do cliente</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div> 
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="historico">
                        <div class="card">
                            <div class="card-header">
                                <span class="data-historico">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;&nbsp;01/09/2022 20:24
                                </span>
                                <span class="usario-historico">
                                <i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;Júnior Broker
                                </span>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Não teve interesse</h5>
                                <p class="card-text conteudo-histórico">With supporting text below as a natural lead-in to additional content.With supporting text below as a natural lead-in to additional content.With supporting text below as a natural lead-in to additional content.With supporting text below as a natural lead-in to additional content.With supporting text below as a natural lead-in to additional content.With supporting text below as a natural lead-in to additional content.</p>
                            </div>
                        </div>    
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer" style="border:none">
                    <h4 class="modal-title title-footer-modal">Cadastrar no histórico</h4>
                    <div class="panel panel-default">
                        <div class="panel-heading" style="height:50px; border:none">
                            <span class="pull-right clickable panel-toggle panel-button-tab-left panel-collapsed"><em class="fa fa-toggle-down"></em></span>
                        </div>
                        <div class="panel-body" style="display:none;">
                            <div class="panel-body">
                                <form name="form-cadastra-historico" id="form-cadastra-historico">
                                    <div class="row">
                                        <div class="form-group">
                                            <input class="form-control" name="ocorrencia-historico" placeholder="Ocorrência" required>
                                        </div>
                                        <div class="form-group">
                                            <textarea name="conteudo-historico" class="form-control" rows="5" cols="20" required placeholder="Descrição"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button id="bt-cadastrar-historico" form="form-cadastra-historico" type="submit" 
                                                    class="btn btn-warning form-control form-control-lg button-confirmar">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;&nbsp;Cadastrar 
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <form name="form-atualiza-cliente" id="form-atualiza-cliente">
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
                    <li class="active">Clientes / <?php echo $cliente->__get('nome') . ' ' . $cliente->__get('sobrenome') ?></li>
                </ol>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><b>Editar</b> Clientes<sup>REF:::<span id="i001"><?php echo $cliente->__get('id_cliente') ?></span></sup>
                </div>
            </div>
            <div id="response"></div>
            <div class="panel panel-default">
                <div class="panel-heading">Dados do Cliente</div>
                <div class="panel-body">
                    <div class="panel-body">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nome</label>
                                <input <?php setReadonly() ?> class="form-control" name="nome-cliente" placeholder="Primeiro nome do cliente" value="<?php $nome = explode(' ', $cliente->__get('nome'));
                                                                                                                                                        echo $nome[0]; ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Sobrenome</label>
                                <input <?php setReadonly() ?> class="form-control" name="sobrenome-cliente" placeholder="Sobrenome do cliente" value="<?php echo $cliente->__get('sobrenome') ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Contato</label>
                                <input <?php setReadonly() ?> class="form-control" name="contato-cliente" placeholder="XX (XX) XXXXX-XXXX" id="contato" value="<?php echo $cliente->__get('contato') ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Responsável pelo atendimento:</label>
                                <select <?php if ($_SESSION['tipo'] == 2) {
                                    echo 'disabled';} ?>class="form-control" 
                                    name="atendimento" required>
                                    <option value=<?php
                                                if ($cliente->__get('codAtendente') == 0) {
                                                    echo '0';
                                                    $name = 'Nenhum';
                                                } else {
                                                    echo $cliente->__get('codAtendente');
                                                    $name = $cliente->__get('atendente_nome');
                                                }

                                                ?>><?php echo $name ?></option>
                                    <option value="0">Nenhum</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Sexo</label>
                                <select <?php if ($_SESSION['tipo'] == 2) {
                                            echo 'disabled';
                                        } ?>class="form-control" name="sexo-cliente" required>
                                    <option <?php echo  $cliente->__get('sexo') == 1 ? 'selected ' : '' ?>value="1">Masculino</option>
                                    <option <?php echo  $cliente->__get('sexo') == 2 ? 'selected ' : '' ?>value="2">Feminino</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>E-mail</label>
                                <input <?php setReadonly() ?> type="email" name="email-cliente" class="form-control" placeholder="E-mail do cliente" value="<?php echo $cliente->__get('email') ?>">
                            </div>
                            <div class="form-group">
                                <label>Data de Nascimento</label>
                                <input <?php setReadonly() ?> class="form-control" name="nascimento-cliente" placeholder="XX/XX/XXXX" id="dt-nascimento" value="<?php echo  date('d/m/Y', strtotime($cliente->__get('data_nascimento'))); ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Heats:</label>
                                <select name="heat" class="form-control" <?php if ($_SESSION['tipo'] == 2) {
                                    echo 'disabled';}?>>
                                    <option <?php echo  $cliente->__get('heat') == 1 ? 'selected ' : '' ?> value='1'>Quente</option>
                                    <option <?php echo  $cliente->__get('heat') == 2 ? 'selected ' : '' ?>value='2'>Morno</option>
                                    <option <?php echo  $cliente->__get('heat') == 3 ? 'selected ' : '' ?>value='3'>Frio</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <button <?php if ($_SESSION['tipo'] == 2) {
                                            echo 'disabled';
                                        } ?> id="bt-cadastrar-usuario" form="form-atualiza-cliente" 
                                        type="submit" 
                                        class="btn btn-info form-control form-control-lg button-confirmar">
                                    Salvar Alterações
                                </button>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                    <button id="bt-cadastrar-usuario" form="form-atualiza-cliente" type="button" 
                                            class="btn btn-warning form-control form-control-lg button-confirmar"
                                            data-toggle="modal" data-target="#myModal">
                                        Histórico
                                        <i class="fa fa-history" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                    </div>
                </div>
    </form>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">Procuras e interesses</div>
        <div class="panel-body">
            <div class="col-md-12">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body tabs">
                            <form id="form-cadastra-procura" name="form-cadastra-procura">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab1" data-toggle="tab">CADASTRAR PROCURAS</a></li>
                                    <li><a href="#tab2" data-toggle="tab">PROCURAS CADASTRADAS</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="tab1">
                                        <h4>Cadastrar uma procura</h4>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label>Fabricante</label>
                                                        <select name="fabricantes-barcos" class="form-control">
                                                            <option value="5000">Todos</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label>Tipo</label>
                                                        <select class="form-control" name="tipo-procura">
                                                            <option value="5000">Todos</option>
                                                            <option value="1">HT</option>
                                                            <option value="2">Fly</option>
                                                            <option value="3">Capota</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label>Combustível</label>
                                                        <select class="form-control" name="combustivel-procura">
                                                            <option value="5000">Todos</option>
                                                            <option value="0">Gasolina</option>
                                                            <option value="1">Diesel</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label>Ano</label>
                                                        <select class="form-control" name="ano-procura">
                                                            <option value="5000">Todos</option>
                                                            <option value="1990">1990</option>
                                                            <option value="1900">1991</option>
                                                            <option value="1991">1992</option>
                                                            <option value="1993">1993</option>
                                                            <option value="1994">1994</option>
                                                            <option value="1995">1995</option>
                                                            <option value="1996">1996</option>
                                                            <option value="1997">1997</option>
                                                            <option value="1998">1998</option>
                                                            <option value="1999">1999</option>
                                                            <option value="2000">2000</option>
                                                            <option value="2001">2001</option>
                                                            <option value="2002">2002</option>
                                                            <option value="2003">2003</option>
                                                            <option value="2004">2004</option>
                                                            <option value="2005">2005</option>
                                                            <option value="2006">2006</option>
                                                            <option value="2007">2007</option>
                                                            <option value="2008">2008</option>
                                                            <option value="2009">2009</option>
                                                            <option value="2010">2010</option>
                                                            <option value="2011">2011</option>
                                                            <option value="2012">2012</option>
                                                            <option value="2013">2013</option>
                                                            <option value="2014">2014</option>
                                                            <option value="2015">2015</option>
                                                            <option value="2016">2016</option>
                                                            <option value="2017">2017</option>
                                                            <option value="2018">2018</option>
                                                            <option value="2019">2019</option>
                                                            <option value="2020">2020</option>
                                                            <option value="2021">2021</option>
                                                            <option value="2022">2022</option>
                                                            <option value="2023">2023</option>
                                                            <option value="2024">2024</option>
                                                            <option value="2025">2025</option>
                                                            <option value="2026">2026</option>
                                                            <option value="2027">2027</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Tamanho (Min)</label>
                                                                <input class="form-control" name="tamanho-min-procura" placeholder="Tamanho Mín." required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Tamanho(Máx)</label>
                                                                <input class="form-control" name="tamanho-max-procura" placeholder="Tamanho Máx." required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label>Potência</label>
                                                        <select class="form-control" name="potencia-procura">
                                                            <option value="5000">Todos</option>
                                                            <option value="100">Até 100 HP</option>
                                                            <option value="200">Até 200 HP</option>
                                                            <option value="300">Até 300 HP</option>
                                                            <option value="400">Até 400 HP</option>
                                                            <option value="500">Até 500 HP</option>
                                                            <option value="600">Até 600 HP</option>
                                                            <option value="700">Até 700 HP</option>
                                                            <option value="800">Até 800 HP</option>
                                                            <option value="900">Até 900 HP</option>
                                                            <option value="1000">Até 1000 HP</option>
                                                            <option value="1500">Até 1500 HP</option>
                                                            <option value=">1500">Acima 1500 HP</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label>Horas</label>
                                                        <select class="form-control" name="horas-procura">
                                                            <option value="5000">Todos</option>
                                                            <option value="0"> 0 Horas</option>
                                                            <option value="200">Até 200 horas</option>
                                                            <option value="400">Até 400 horas</option>
                                                            <option value="600">Até 600 horas</option>
                                                            <option value="800">Até 800 horas</option>
                                                            <option value="1000">Até 1000 horas</option>
                                                            <option value="1200">Até 1200 horas</option>
                                                            <option value="1400">Até 1400 horas</option>
                                                            <option value="1600">Até 1600 horas</option>
                                                            <option value=">1600">Acima 1600 horas</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>Quant. Motores</label>
                                                        <select class="form-control" name="quant-motor-procura">
                                                            <option value="5000">Todos</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label>Tipo de propulsor</label>
                                                        <select class="form-control" required name="tipo-propulsor">
                                                            <option value="5000">Todos</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Valor (Min)</label>
                                                                <input class="form-control" name="preco-min-procura" placeholder="R$ Mín." required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Valor (Máx)</label>
                                                                <input class="form-control" name="preco-max-procura" placeholder="R$ Máx." required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>Modelo</label>
                                                        <input class="form-control" name="modelo-procura" placeholder="Digiter o modelo, ou DEIXE EM BRANCO para não incuir" id="contato">
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="rps"></div>
                                        </div>
                                        <div class="form-group">
                                            <button id="bt-cadastrar-procura" form="form-cadastra-procura" type="submit" class="btn btn-info form-control form-control-lg button-confirmar">Salvar Alterações</button>
                                        </div>
                                    </div>
                            </form>
                            <div class="tab-pane fade" id="tab2">
                                <div class="col-lg-12">
                                    <h4>Interesses do Cliente</h4>
                                    <?php $procura->listarProcuras(intval($cliente->__get('id_cliente'))); ?>
                                </div>
                            </div>

                        </div>

                    </div>
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
</body>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/chart.min.js"></script>
<script src="js/chart-data.js"></script>
<script src="js/easypiechart.js"></script>
<script src="js/easypiechart-data.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/custom.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
<script src="js/listar_fabricantes.js"></script>
<script src="js/cadastra_historico.js"></script>
<script src="js/lista-historico.js"></script>
<script src="js/lista-propietarios.js"></script>
<script src="js/atualiza_cliente.js"></script>
<script src="js/forms_procuras.js"></script>
<?= SWETALERT ?>
<script src="js/lista_propulsor.js"></script>
<script src="js/lista_usuarios.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('input[name="contato-cliente"').mask('00 (00) 00000-0000')
        $('input[name="nascimento-cliente"').mask('00/00/0000')
    });
</script>

</html>