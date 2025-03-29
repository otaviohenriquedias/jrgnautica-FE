<?php
include('config.php');
$conexao = new Conexao();
$embarcacao = new Usuario($conexao);
$embarcacao->listaBroker();
?>