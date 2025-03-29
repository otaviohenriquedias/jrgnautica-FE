<?php
include('config.php');
$conexao = new Conexao();
$embarcacao = new Captador($conexao);
$embarcacao->listaCaptador();
?>