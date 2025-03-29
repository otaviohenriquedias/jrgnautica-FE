<?php
include('config.php');
$conexao = new Conexao();
$embarcacao = new Email($conexao);
$embarcacao->listaEmail();
?>