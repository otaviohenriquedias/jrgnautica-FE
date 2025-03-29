<?php
include('config.php');
$conexaoPool = Conexao::getInstance();
$procura = new Captador($conexaoPool->getConexao(), $conexaoPool);
$procura->deletaCaptador(intval($_GET['id_captador']));

?>