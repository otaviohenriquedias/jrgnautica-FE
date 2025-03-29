<?php
include('config.php');
$conexaoPool = Conexao::getInstance();
$dashboard = new Dashboard($conexaoPool->getConexao(), $conexaoPool);
echo '{ ';
    echo '"total_procuras" : ';
    echo $dashboard->getDash('procuras'); echo ', ';
    echo '"total_embarcacao" : ';
    echo $dashboard->getDash('embarcacao');echo ', ';
    echo '"total_clientes" : ';
    echo  $dashboard->getDash('clientes');echo ', ';
    echo '"total_leads" : ';
    echo  $dashboard->getDash('email');echo '';
    echo ' }';
?>