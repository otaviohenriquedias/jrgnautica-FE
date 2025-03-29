<?php
include('config.php');
$conexaoPool = Conexao::getInstance();
$cliente = new Cliente($conexaoPool->getConexao(), $conexaoPool);
$cliente->getAniversariantes(false);
?>