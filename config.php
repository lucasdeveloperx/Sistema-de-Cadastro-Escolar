<?php

    $dbHost = '127.0.0.1';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'escola';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

   // if($conexao->connect_errno)
    //{
    //    echo "SE FUDEU";
    //}
    //else
    //{
    //    echo "Conexão efetuada com sucesso";
    //}

   
?>