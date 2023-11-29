<?php
$conexao = mysqli_connect("localhost", "root", "", "bd");

if ($conexao == FALSE) {
    echo "Não foi possível conectar-se ao PhpMyAdmin";
    exit;
}

// Validar e obter o token da solicitação
$token = mysqli_real_escape_string($conexao, $_GET['token']);

// Verificar se o token existe na tabela LoginAluno
$query = "SELECT * FROM LoginAluno WHERE TokenSenha = '$token'";
$result = mysqli_query($conexao, $query);

if ($result) {
    if (mysqli_num_rows($result) == 1) {
        // Exibir um formulário para inserir uma nova senha
        echo '<form action="atualizarsenha.php" method="post">
                <label for="nova_senha">Nova Senha:</label>
                <input type="password" name="nova_senha" required>
                <input type="hidden" name="token" value="'.$token.'">
                <button type="submit">Atualizar Senha</button>
            </form>';
    } else {
        echo "Token inválido.";
    }
} else {
    echo "Erro na consulta ao banco de dados.";
}

mysqli_close($conexao);
?>
