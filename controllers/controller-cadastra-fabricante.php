<?php
include('config.php');
$conexaoPool = Conexao::getInstance();
$embarcacao = new Embarcacao($conexaoPool->getConexao(), $conexaoPool);
$embarcacao->__set('fabricante', strtoupper($_POST['nome-fabricante']));
$embarcacao->cadastraFabricante();

?>