<?php
include('config.php');
$conexao = new Conexao();
$embarcacao = new Cliente($conexao);
$embarcacao->listarClientes()
?>