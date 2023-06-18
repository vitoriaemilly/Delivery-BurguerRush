<?php
    // Conectando com o servidor do xampp, LEMBRANDO QUE NÃO É OBRIGADO SEGUIR OS MESMO NOMES DAS VARIAVEIS, MAS TEM UM PADRÃO EM ESPECIFICO!
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'restaurante';

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die (mysqli_connect_error());
    };
    
?>