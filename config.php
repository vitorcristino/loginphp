<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'login-php';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword,  $dbName);

    //    if (!$conexao) {
    //     die("Connection failed: " . mysqli_connect_error());
    // }
    // echo "Connection established"

?>