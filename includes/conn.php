<?php

    $usuario = 'cifrae35_cesl';
    $senha = '923662@anA';
    $database = 'cifrae35_docesedelicias';
    $host = 'localhost';

    $conn = new mysqli($host, $usuario, $senha, $database);

    if($conn->connect_error) {
        die("Falha ao conectar ao banco de dados: " . $conn->connect_error);
    }

    $conn->set_charset('utf8'); // Definindo o charset como UTF-8