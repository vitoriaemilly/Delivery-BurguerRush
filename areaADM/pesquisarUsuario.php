<?php 
    //Incluindo o bd 
    require_once '../conection.php';

    $email = $_POST['email'];

    // Consulta os usuários com base no e-mail
    $sql = "SELECT id, nome, email FROM usuario WHERE email LIKE '%$email%'";
    $result = $conn->query($sql);

    //Exibindo Usuarios 
    if ($result->num_rows > 0) {
        echo "<h1>Usuarios encontrados</h1>";
        echo "<ul>";
        echo "<li>ID</li>";
        echo "<li>Nome</li>";
        echo "<li>Email</li>";
        echo "</ul>";

        while($row = $result->fetch_assoc()) {
            echo "<ul>";
            echo "<li>". $row['id']."</li>";
            echo "<li>". $row['nome']."</li>";
            echo "<li>". $row['email']."</li>";
            echo "</ul>";
        }

    } else {
        echo '<p>Nenhum usuário foi encontrado.</p>';
    }
?>