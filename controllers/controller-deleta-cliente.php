<?php
include('config.php');
$conexao = new Conexao();
$procura = new Cliente($conexao);
$procura->deletaCliente(intval($_GET['id_cliente']), $conexao);

?>