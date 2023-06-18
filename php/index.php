<?php
  require_once "conection.php";

      $nome = $_POST['nome'];
      $cpf = $_POST['cpf'];
      $email = $_POST['email'];
      $telefone = $_POST['telefone'];
      $estado = $_POST['estado'];
      $cidade = $_POST['cidade'];
      $bairro = $_POST['bairro'];
      $cep = $_POST['cep'];
      $numero = $_POST['numero'];
      $complemento = $_POST['complemento'];
      $senha = $_POST['senha'];

      $sql = "INSERT INTO usuario (nome, CPF) VALUES ('{$nome}', '{$cpf}')"; 
      $sql2 = "INSERT INTO endereco (estado, cidade, bairro, numero_casa, complemento, cep) VALUES ('{$estado}', '{$cidade}','{$bairro}','{$numero}', '{$complemento}', '{$cep}')";
      $sql3 = "INSERT INTO dados_login (nome, CPF) VALUES ('{$email}', '{$telefone}', '{$senha}')"; 

      
    
  // $nome = $_POST['nome'];
  // $cpf = $_POST['cpf'];
  // $email = $_POST['email'];
  // $telefone = $_POST['telefone'];
  // $estado = $_POST['estado'];
  // $cidade = $_POST['cidade'];
  // $bairro = $_POST['bairro'];
  // $cep = $_POST['cep'];
  // $numero = $_POST['numero'];
  // $complemento = $_POST['complemento'];


?>