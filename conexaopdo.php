<?php

$server = "localhost";
$user = "vitor";
$pass = "123456";
$bd = "bdcurso";

try {
    $connect = new PDO("mysql:host=$server;dbname=$bd",$user,$pass);

    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conectado ao BD";
}

catch (PDOException $erro) {
    echo "Deu ruim: ".$erro->getMessage();
}