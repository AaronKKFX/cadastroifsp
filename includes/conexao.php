<?php

    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'IFSP';
    $port = 3307;

    $con = mysqli_connect($hostname, $username, $password, $database, $port);

    if(mysqli_connect_errno()){
        printf("Erro de Conexão %s", mysqli_connect_error());
        exit();
    }

?>