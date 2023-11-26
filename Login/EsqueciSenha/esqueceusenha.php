    <?php
        $conexao = mysqli_connect("localhost", "root", "", "bd");

        if ($conexao == FALSE)
        {
        echo "Não foi possivel conectar-se ao PhpMyAdmin";
        exit;
        }

    ?>