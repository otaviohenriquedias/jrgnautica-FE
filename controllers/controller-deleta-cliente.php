<?php
include('config.php');
$conexaoPool = Conexao::getInstance();
$procura = new Cliente($conexaoPool->getConexao(), $conexaoPool);
$procura->deletaCliente(intval($_GET['id_cliente']), $conexao);

?>