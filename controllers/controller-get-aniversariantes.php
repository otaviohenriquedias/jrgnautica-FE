<?php
include('config.php');
$conexao = new Conexao();
$cliente = new Cliente($conexao);
$cliente->getAniversariantes(false);
?>