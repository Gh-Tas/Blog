<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estiloedit.css">
    <title>Edição</title>
</head>

<body>
    <?php include 'header.php'; ?>

    <main>
        <div class="conteudo">
            <h2>Edição</h2>
            <form action="perfil.php" method="post" enctype="multipart/form-data">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" required>
                <label for="usuario">Email:</label>
                <input type="email" name="usuario" id="email" required>
                <label for="senha">Senha:</label>
                <input type="password" name="senha" id="senha" required>
                <label for="nascimento">Nascimento</label>
                <input type="date" name="nascimento" id="nascimento" required>
                <label for="descrição">Descrição</label>
                <textarea placeholder="Escreva os detalhes sobre você, curriculo, interesses, o que preferir" name="descricao" id="descricao" cols="30" rows="10" required></textarea>
                <input type="file" name="imagem" id="imagem">
                <input type="submit" value="Enviar">
            </form>
        </div>
    </main>

    <?php include 'footer.php'; ?>
</body>

</html>