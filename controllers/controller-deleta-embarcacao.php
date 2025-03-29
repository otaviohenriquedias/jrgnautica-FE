<?php
include('config.php');
$conexao = new Conexao();
$procura = new Embarcacao($conexao);
$procura->deletaEmb(intval($_GET['id_embarcacao']));

?>