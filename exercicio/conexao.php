<?php
    $host = 'localhost';    
    $usuario = 'root';
    $banco = 'etecmcm';
    $senha = '';

    $conexao = new mysqli($host,$usuario,$senha,$banco);

    if($conexao->connect_error){
        die('Falha de conexão: ' . $conexao->connect_error);
    }
    // else{
    //     echo "CONECTADO COM SUCESSO";
    // }
?>