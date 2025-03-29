<?php
include('config.php');
$conexao = new Conexao();
$procura = new Procura($conexao);
$procura->deleteProcura(intval($_GET['id_procura']));

?>