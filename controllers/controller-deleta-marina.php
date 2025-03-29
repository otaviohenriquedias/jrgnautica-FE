<?php
include('config.php');
$conexao = new Conexao();
$procura = new Marina($conexao);
$procura->deletaMarina(intval($_GET['id_marina']));

?>