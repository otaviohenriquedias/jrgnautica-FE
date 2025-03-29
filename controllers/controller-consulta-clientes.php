<?php
include('config.php');
$conexao = new Conexao();
$cliente = new Cliente($conexao);
$cliente->consultaCliente($_POST['nome-cliente'], $_POST['heat-cliente'], $_POST['ordem-data-cliente']);

?>