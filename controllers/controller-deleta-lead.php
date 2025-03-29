<?php
include('config.php');
$conexaoPool = Conexao::getInstance();
$procura = new Email($conexaoPool->getConexao(), $conexaoPool);
$procura->deletaEmail(intval($_GET['id_lead']));

?>