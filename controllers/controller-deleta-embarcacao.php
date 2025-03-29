<?php
include('config.php');
$conexaoPool = Conexao::getInstance();
$procura = new Embarcacao($conexaoPool->getConexao(), $conexaoPool);
$procura->deletaEmb(intval($_GET['id_embarcacao']));

?>