<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = "imc";

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    //if ($conexao->connect_errno){
    //    echo "erro";
    //}
    //else{
    //    echo "conexao realizada";
    //}

?>