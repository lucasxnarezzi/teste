 <?php
if(isset($_POST['nome'], $_POST['email'])) {
    $conexao = new mysqli('localhost', 'root', '', 'exemplo');
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    echo $conexao->query("INSERT INTO cad (nome, email) VALUES ('$nome', '$email')") ? 'Cadastro realizado com sucesso!' : 'Erro ao cadastrar: ' . $conexao->error;
    $conexao->close();
}
?>
  