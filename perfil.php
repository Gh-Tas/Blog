<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estiloperfil.css">
    <title>Perfil</title>
</head>

<body>
    <?php include 'header.php'; ?>

    <main>
        <div class="perfil">
            <h2>Perfil</h2>
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $nome = $_POST['nome'];
                $usuario = $_POST['usuario'];
                $senha = $_POST['senha'];
                $nascimento = $_POST['nascimento'];
                $descricao = $_POST['descricao'];

                echo "<p>Nome: $nome</p>";
                echo "<p>Email: $usuario</p>";
                echo "<p>Senha: $senha</p>";
                echo "<p>Nascimento: $nascimento</p>";
                echo "<p>Descrição: $descricao</p>";
            }
            ?>
        </div>
        <?php 
            if (isset($_FILES['imagem'])) {
                $arquivo = $_FILES['imagem'];

                // Verifica se não houve erros no upload
                if ($arquivo['error'] == 0) {
                    $nome_arquivo = $arquivo['name'];
                    $caminho_temporario = $arquivo['tmp_name'];
                    $caminho_destino = "uploads/" . $nome_arquivo; // Pasta onde a imagem será salva

                    // Move o arquivo para o destino final
                    if (move_uploaded_file($caminho_temporario, $caminho_destino)) {
                        echo "<img src='" . $caminho_destino . "' alt='Imagem enviada' class='imagem-3x4'>";
                    } else {
                        echo "Erro ao mover o arquivo.";
                    }
                } else {
                    echo "Erro no upload: " . $arquivo['error'];
                }
            } else {
                echo "Nenhuma imagem enviada.";
            }
        ?>
        <?php include 'footer.php'; ?>
</body>

</html>