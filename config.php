<?php

   $dbHost = 'Localhost';
   $dbUsername = 'root';
   $dbPassword = 'root';
   $dbName = 'cadastro-cliente';

   $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

   //if($conexao->connect_errno)
   //{
   //     echo "Erro";
   //}
   //else
   //{
   //    echo "Conexão efetuada com sucesso";
   //}

?>