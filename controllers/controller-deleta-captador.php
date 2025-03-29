<?php
include('config.php');
$conexao = new Conexao();
$procura = new Captador($conexao);
$procura->deletaCaptador(intval($_GET['id_captador']));

?>