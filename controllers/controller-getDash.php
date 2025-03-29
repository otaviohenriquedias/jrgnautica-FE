<?php
include('config.php');
$conexao = new Conexao();
$dashboard = new Dashboard($conexao);
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