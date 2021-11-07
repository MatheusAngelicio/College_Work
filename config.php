<?php

    $dbHost = 'Localhost';
    $dbUserName = 'root';
    $dbPassword = 'root';
    $dbName = 'formulario-matheus';

    $conexao = new mysqli($dbHost, $dbUserName, $dbPassword, $dbName);

    //if($conexao->connect_errno)
    //{
    //    echo "Erro";
    //}
    //else 
    //{
    //    echo "Conexão Efetuada com sucesso";
    //}

?>