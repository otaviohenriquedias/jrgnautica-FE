<?php
header('Content-type: text/html; charset=utf-8'); 
session_start();
if (!isset($_SESSION["id_usuario"])){
  header('Location: login.php');
}
?>
<!DOCTYPE html>
<html>
<head><meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>JR Broker</title>
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
	<script src="js/jquery-1.11.1.min.js"></script>
</head>

<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<img src="assets/logo-jr-broker.png"  id="logo-superior" width="150" class="img-fluid"></img>
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
			<li class="active"><a href="#" id="bt-fp"><em class="fa fa-dashboard"></em> Follow-Up</a></li>
			<li><a href="#" id="bt-disponivel"><i class="fa fa-ship" aria-hidden="true"></i> Disponíveis </a></li>
			<li><a href="#" id="bt-clientes"><i class="fa fa-diamond" aria-hidden="true"></i> Clientes</a></li>
			<li><a href="#" id="bt-captadores"><i class="fa fa-handshake-o" aria-hidden="true"></i> Captadores</a></li>
			<li><a href="#" id="bt-marinas"><i class="fa fa-podcast" aria-hidden="true"></i> Marinas</a></li>
			<?php  if($_SESSION['tipo'] == 1){
			echo 
				'
				<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
					<em class="fa fa-navicon">&nbsp;</em> Cadastrar <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="#" id="cad_clientes">
							<span class="fa fa-arrow-right">&nbsp;</span> Clientes
						</a></li>
					<li><a class="" href="#" id="cad_embarcacoes">
							<span class="fa fa-arrow-right">&nbsp;</span> Embarcação
						</a></li>
					<!--<li><a class="" href="#" id="cad_bem">
							<span class="fa fa-arrow-right">&nbsp;</span> B.E.M
						</a></li> -->
					<li><a class="" href="#" id="cad-captadores">
							<span class="fa fa-arrow-right">&nbsp;</span> Captadores
						</a></li>
					<li><a id="cad_broker" class="" href="#">
							<span class="fa fa-arrow-right">&nbsp;</span> Brokers
						</a></li>
					<li><a id="cad_marinas" class="" href="#">
							<span class="fa fa-arrow-right">&nbsp;</span> Marinas
						</a></li>
					<li><a id="cad_fab" class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Fabricante
					</a></li>
				</ul>
				</li>
			
				';	}
				
				
			?>
			<?php  if($_SESSION['tipo'] == 1){
				echo '<li><a href="#" id="bt-brokers"><i class="fa fa-users" aria-hidden="true"></i> Brokers</a></li>';
				echo '<li><a href="#" id="bt-leads"><i class="fa fa-bar-chart" aria-hidden="true"></i> Leads</a></li>';

			} ?>
			<li><a href="#" id="aniversariantes"><i class="fa fa-birthday-cake" aria-hidden="true"></i>&nbsp;</em> Aniversariantes <span id="count"></span></a></li>
			<li><a href="#" id="logout"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div>
	<!--/.sidebar-->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" id="conteudo-painel">
			<?php require_once 'requests/follow-up.php' ?>
	</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/setdashboard.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/chart.min.js"></script>
<script src="js/chart-data.js"></script>
<script src="js/easypiechart.js"></script>
<script src="js/easypiechart-data.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/custom.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
<script src="js/busca_paginas.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://unpkg.com/clipboard@2/dist/clipboard.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
	    $('.preco').mask('#.##0,00', {reverse:true})
		$('#contato').mask('00 (00) 00000-0000')
		$('#dt-nascimento').mask('00/00/0000')
		$('#cpf-broker').mask('000.000.000-00')
		$('input[name="contato-marina"]').mask('00 (00) 00000-0000')
		new ClipboardJS('.btn');

	});
</script>


</html>