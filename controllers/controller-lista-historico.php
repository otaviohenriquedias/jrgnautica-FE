<?php
include('config.php');
$conexao = new Conexao();
$historico = new Historico($conexao);
$historico->__set('id_cliente', $_GET['ref']);
$historico->getHistory();
?>