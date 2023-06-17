<?php
  // Conectando o banco de dados ao php
  $servername = 'localhost';
  $username   ='root';
  $password   = '';
  $database   ='restaurante';

  //Fazendo a conexão e ajustando o chasert para a comunicação
  $conection = mysqli_connect($servername, $username, $password, $database);
  mysqli_connect($conection, "utf-8");

  //Agora verificar a conexão com o banco de dados
  if(!$conection) {
    die ('Falha na conexão'. mysqli_connect_error());
  }

  // echo ('Conexão realizada.');


?>