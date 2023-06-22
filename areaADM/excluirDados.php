<?php
    //Incluindo o banco
    require_once '../conection.php';

    $cpf = $_POST['cpf'];

    $sql = "DELETE FROM usuario WHERE cpf = '$cpf';";

    $query = (mysqli_query($conn, $sql));
    
    if($query){
        echo "<script>alert('Usuário excluído com sucesso!');window.location = 'mostrarDados.php'</script>";
    } else {
        echo mysqli_error($conn);
    }

?>