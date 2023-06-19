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

    

    function validaremail($conn, $email, $nome, $cpf, $senha, $telefone, $cidade, $bairro, $numero, $complemento, $estado, $cep){
        $sql = "SELECT id FROM usuarios WHERE email = '$email'";
        $result = $conn ->query($sql);

        if ($result->num_rows > 0) {
            return "Email já cadastrado.";
        }

        $sql = "INSERT INTO usuario (nome, CPF, email, telefone, senha) VALUES ('{$nome}', '{$cpf}'), '{$email}','{$telefone}','{$senha}'"; 
        $sql = "INSERT INTO endereco (estado, cidade, bairro, numero, complemento, cep) VALUES ('{$estado}', '{$cidade}', '{$bairro}', '{$numero}', '{$complemento}', '{$cep}')";

        if ($conn->query($sql) === true) {
            echo "<script>alert('Usuário cadastrado!')window.location='index.php';</script>";
        } else {
            return "Erro ao cadastrar o usuário: " . $conn->error;
        }


        // if(mysqli_query($conn, $sql) === true){
        //     echo "<script>alert('Usuário cadastrado!')
        //     window.location='index.php';</script>";
        // } else {
        //     echo ("Erro ao inserir usuário: ". $sql. "<br>" . mysqli_error($conn));
        // }
    }

    function realizarLogin($conn, $email, $senha) {
        // Verifica se as credenciais estão corretas
        $sql = "SELECT id FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
            echo "<script>alert('Login realizado com Sucesso!')window.location='index.php';</script>";
        } else {
            echo "<script>alert('Desculpe, credenciais invalidas')window.location='login.php'</script>";;
        }
    }


     mysqli_close($conn);


?>