<?php
include('config.php');
$conexaoPool = Conexao::getInstance();
$cliente = new Cliente($conexaoPool->getConexao(), $conexaoPool);
$cliente->consultaCliente($_POST['nome-cliente'], $_POST['heat-cliente'], $_POST['ordem-data-cliente']);

?>