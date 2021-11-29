<?php
//criar variáveis de conexão

$servidor = "localhost";
$usuario = "root";
$senha = "";
$bd = "bdcurso";

//criar a conexão
//mysqli_connect(SERVIDOR,USUARIO,SENHA,BD);
//O mysqli_connect retorna TRUE ou FALSE

$connect = mysqli_connect($servidor,$usuario,$senha,$bd);

//var_dump($connect);

if ($connect) {
    echo "Conectou ao BD";
}

else {
    echo "Falha de conexão com o BD";
}