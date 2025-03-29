<?php
include('config.php');
$conexaoPool = Conexao::getInstance();
$procura = new Procura($conexaoPool->getConexao(), $conexaoPool);
$procura->deleteProcura(intval($_GET['id_procura']));

?>