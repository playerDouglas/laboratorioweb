<?php

    $dbHost = 'sql200.infinityfree.com';
    $dbUsername = 'if0_36329043';
    $dbPassword = 'h0QqWd44FV';
    $dbName = 'if0_36329043_sislogin';
    
    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

     if($conexao->connect_errno)
     {
         echo "Erro";
     }
     else
     {
         echo "Conexão efetuada com sucesso";
     }

?>