<?php
include('config.php');
$conexaoPool = Conexao::getInstance();
$embarcacao = new Cliente($conexaoPool->getConexao(), $conexaoPool);
$embarcacao->listarClientes()
?>