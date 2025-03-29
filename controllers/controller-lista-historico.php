<?php
include('config.php');
$conexaoPool = Conexao::getInstance();
$historico = new Historico($conexaoPool->getConexao(), $conexaoPool);
$historico->__set('id_cliente', $_GET['ref']);
$historico->getHistory();
?>