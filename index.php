<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
</head>
<body>
    <h2>Cadastro de Usuário</h2>
    <form action="" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>
        
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <input type="submit" value="Cadastrar">
    </form>

    <?php
    if(isset($_POST['nome'], $_POST['email'])) {
        $conexao = new mysqli('localhost', 'root', '', 'exemplo');
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $cadastro_sucesso = $conexao->query("INSERT INTO cad (nome, email) VALUES ('$nome', '$email')");
        
        if($cadastro_sucesso) {
            echo '<p>Cadastro realizado com sucesso!</p>';
            // Exibindo os dados inseridos
            echo '<h2>Dados Inseridos</h2>';
            echo '<p><strong>Nome:</strong> ' . $nome . '</p>';
            echo '<p><strong>E-mail:</strong> ' . $email . '</p>';
        } else {
            echo '<p>Erro ao cadastrar: ' . $conexao->error . '</p>';
        }

        $conexao->close();
    }
    ?>
</body>
</html>
    