<?php
$dbHost = "localhost:330";
$dbUsername = 'root';
$dbPassword = '74242739';
$dbName = "formulario";

// Criando conexão
$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

// Verificando conexão
//if ($conexao->connect_errno)
 {
 //   echo "ERRO";
}

//else 
{
    //echo "Conexão efetuada com sucesso";
}

?>