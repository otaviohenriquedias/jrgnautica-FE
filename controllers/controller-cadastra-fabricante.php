<?php
include('config.php');
$conexao = new Conexao();
$embarcacao = new Embarcacao($conexao);
$embarcacao->__set('fabricante', strtoupper($_POST['nome-fabricante']));
$embarcacao->cadastraFabricante();

?>