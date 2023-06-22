<?php

    require_once 'conection.php';

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

    $sql = "UPDATE usuario SET nome = '{$nome}', CPF = '{$cpf}', email = '{$email}', telefone '{$telefone}', senha = '{$senha}, estado = '{$estado}', cidade = {$cidade}', bairro = '{$bairro}', numero ='{$numero}', complemento = '{$complemento}', cep = '{$cep}' WHERE id = '$id'";

    $query = mysqli_query($conn, $sql);

    if ($query) {
        echo "<script>alert('Usuário Alterado!');
            window.location='index.php';</script>"; // Cadastro realizado com sucesso
            }else{
                echo"<script> alert('Erro ao alterar Usuário'); </script>"; // Erro ao cadastrar
    }   
?>