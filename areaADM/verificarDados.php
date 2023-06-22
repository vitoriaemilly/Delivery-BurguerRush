<?php

    require_once '../conection.php';

    $cpf = $_POST['cpf'];

    $sql = "SELECT * FROM usuario WHERE CPF ='$cpf'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<script>window.location = 'alterarDados.php'</script>";
    } else {
        echo "O dado não existe no banco de dados.";
    }

?>