<?php
     // Incluindo a conexão com o banco
     require_once "conection.php";
    
     $nomeUsuario = $_POST['nome'];
     $cpf = $_POST['cpf'];
     $estado = $_POST['estado'];
     $cidade = $_POST['cidade'];
     $bairro = $_POST['bairro'];
     $numero = $_POST['numero'];
     $complemento = $_POST['complemento'];
     $cep = $_POST['cep'];
     $email = $_POST['email'];
     $telefone = $_POST['telefone'];
     $senha = $_POST['senha'];  
         
 
     $sql = "INSERT INTO usuario (nome, cpf, email, telefone, senha, estado, cidade, bairro, numero, complemento, cep)  VALUES ('{$nomeUsuario}', '{$cpf}', '{$email}', '{$telefone}', '{$senha}', '{$estado}', '{$cidade}', '{$bairro}', '{$numero}', '{$complemento}', '{$cep}')";
         
         
     if(mysqli_query($conn,$sql)){
         echo "<script>alert('Usuário cadastrado!');
         window.location='index.php';</script>"; // Cadastro realizado com sucesso
         }else{
             echo"<script> alert('Erro ao cadastrar'); </script>"; // Erro ao cadastrar
         }   
               
     mysqli_close($conn);
 
 
?>