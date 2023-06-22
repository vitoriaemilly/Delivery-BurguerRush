<?php
    require_once("conection.php");
    
    $email = $_POST['email'];
    $senha = $_POST['password'];

    $sql = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
    $result = $conn->query($sql);
    
    // $sql_nome = "SELECT nome FROM usuario WHERE email = '$email'";
    // $result2 = $conn->query($sql_nome);
    
    if ($result->num_rows > 0) {
        // if ($result2->num_rows > 0) {
            echo "<script>alert('Login realizado com Sucesso, você foi logado como {$email}');window.location='index.php';</script>"; // Login bem-sucedido
        // }
    } else {
            echo "<script>alert('Desculpe, credenciais invalidas');window.location='login.php'</script>";// Dados de login inválidos
    }
?>