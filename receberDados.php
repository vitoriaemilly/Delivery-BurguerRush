<?php
    // //Incluindo a conexão com o banco
    require_once "conection.php";   
    $nome = $_POST['nome'];
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
    
    
    $sql = "INSERT INTO usuario (nome, CPF, email, telefone, senha, estado, cidade, bairro, numero, complemento, cep) VALUES ('{$nome}', '{$cpf}', '{$email}','{$telefone}','{$senha}, '{$estado}', '{$cidade}', '{$bairro}', '{$numero}', '{$complemento}', '{$cep}'";
    
    
    if(mysqli_query($conn,$sql)){
        echo "<script>alert('Cadastro realizado com sucesso!');</script>";
        header("Location:../index.php");
        }else{
            echo"<script language='javascript' type='text/javascript'> alert('Erro ao cadastrar'); </script>";
            }

    mysqli_close($conn);

?>