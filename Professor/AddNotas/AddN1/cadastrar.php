<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['notas_n1'])) {
        $notas_n1 = $_POST['notas_n1'];
        $raAlunos = $_POST['raAluno'];
        $dataN1Array = isset($_POST['dataN1']) ? $_POST['dataN1'] : [];

        $conexao = mysqli_connect("localhost", "root", "", "bd");

        if ($conexao == FALSE) {
            echo "Não foi possível conectar-se ao banco de dados";
            exit;
        }

        // Supondo que você tenha uma tabela chamada 'notas' no banco de dados
        $query = "INSERT INTO notas (RA, DataN1, N1) VALUES (?, ?, ?)";

        // Preparando a declaração
        $stmt = mysqli_prepare($conexao, $query);

        // Associando parâmetros
        mysqli_stmt_bind_param($stmt, "sss", $raAluno, $dataN1, $nota_n1);

        // Iterando sobre as notas e inserindo no banco de dados
        foreach ($notas_n1 as $key => $nota_n1) {
            $raAluno = $raAlunos[$key];
            $dataN1 = isset($dataN1Array[$key]) ? $dataN1Array[$key] : null;

            // Execute a declaração preparada para cada aluno
            if (!mysqli_stmt_execute($stmt)) {
                // Adicione algum tratamento de erro, se necessário
                echo "Erro ao inserir nota para o aluno com RA: $raAluno";
            }
        }

        // Fechando a declaração e a conexão
        mysqli_stmt_close($stmt);
        mysqli_close($conexao);

        // Redirecionar ou realizar outra ação após a inserção no banco de dados
        header("Location: sucesso.php");
        exit;
    } else {
        echo "Nenhuma nota N1 enviada.";
    }
} else {
    echo "Acesso direto não permitido.";
}
?>
