<?php
include('config.php');
$conexao = new Conexao();
$captador = new Captador($conexao);
$captador->__set('nome', $_POST['nome-captador']);
$captador->__set('contato', $_POST['contato-captador']);
$captador->__set('empresa', $_POST['empresa-captador']);
$captador->__set('categoria', $_POST['categoria-captador']);
$captador->cadastrarCaptador();

?>

