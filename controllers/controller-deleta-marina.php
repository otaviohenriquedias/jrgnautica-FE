<?php
include('config.php');
$conexaoPool = Conexao::getInstance();
$procura = new Marina($conexaoPool->getConexao(), $conexaoPool);
$procura->deletaMarina(intval($_GET['id_marina']));

?>