<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>JRG NÁUTICA :: Login</title>
	<link rel="icon" type="image/x-icon" href="assets/JR-ICON.png">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
		<div class="limiter">
		<div class="container-login100" style="background-image: url('assets/bg.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">

				<span class="login100-form-title p-b-41">
					<img src="assets/JR-ICON.png" width="80" /><br>
					ÁREA DO BROKER
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" id="form-login">

					<div class="wrap-input100 validate-input" data-validate = "Digite o CPF">
						<input class="input100" type="text" name="username" placeholder="CPF" name="user-cpf" id="user">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Digite a senha">
						<input class="input100" type="password" name="pass" placeholder="SENHA" name="user-pass">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button type="submit" class="login100-form-btn">
							ACESSAR &nbsp; <i class="fa fa-sign-in" aria-hidden="true"></i>
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>	
	<script src="js/main.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/validate_login.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
	<script src="https://unpkg.com/sweetalert2@7.12.15/dist/sweetalert2.all.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#user').mask('000.000.000-00');

		});
</script>
</body>
</html>
