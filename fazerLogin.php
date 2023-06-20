<?php
    require_once("conection.php");
    require_once("receberDados.php");

    function fazerLogin($conn, $email, $senha){
        $sql = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            return true; 
            echo "<script>alert('Login realizado com Sucesso!')window.location='index.php';</script>"; // Login bem-sucedido
        } else {
            return false; 
            echo "<script>alert('Desculpe, credenciais invalidas')window.location='login.php'</script>";// Dados de login inválidos
        }
    }
?>