<?php
include('config.php');
$conexao = new Conexao();
$procura = new Email($conexao);
$procura->deletaEmail(intval($_GET['id_lead']));

?>