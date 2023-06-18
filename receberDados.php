<?php
  // //Incluindo a conexão com o banco
  require_once "conection.php";

  // //Receptor de dados do formulário
  // $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
  
  // var_dump($dados);

  // //Realiznaod uma vareficação de dados 
  // if(!empty($dados['cadUsuario'])){
  //   $query_usuario = 'INSERT INTO usuario (nome, CPF) VALUES (:nome, :cpf)';
  //   $cad_user = $conn->prepare($query_usuario);
  //   $cad_user->bind_param(':nome', $dados['nome']);
  //   $cad_user->bind_param(':cpf', $dados['CPF']);
  //   $cad_user->execute();

  // } else {
  //   echo 'Erro';
  // }

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
  
  if(mysqli_query($conn, $sql)){
      echo "<script>alert('Usuário cadastrado!');</script>";
  } else {
      echo ("Erro ao inserir usuário: ". $sql. "<br>" . mysqli_error($conn));
  }
  
   mysqli_close($conn);


?>