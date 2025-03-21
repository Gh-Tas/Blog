<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MeuBlog</title>
    <link rel="stylesheet" href="estiloregistro.css">
</head>

<body>
    <?php include 'header.php';?>
    <main>
        <div class="container">
            <h2>Registre-se</h2>
            <form action="login.php" method="post">
                <label for="nomeregistro">Nome:</label>
                <input type="text" name="nomeregistro" id="nome" required>
                <label for="emailregistro">Email:</label>
                <input type="email" name="emailregistro" id="email" required>
                <label for="senharegistro">Senha:</label>
                <input type="password" name="senharegistro" id="senha" required>
                <button type="submit">Registrar</button>
            </form>

        </div>
    </main>
    <?php include 'footer.php';?>
</body>

</html>