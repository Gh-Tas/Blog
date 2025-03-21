<?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nome = $_POST['nomeregistro'];
        $email = $_POST['emailregistro'];
        $senha = $_POST['senharegistro'];
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="estilologin.css">
</head>
<body>
    <?php include 'header.php';?>

    <main>
        <div class="conteudo">
            <h2>Login</h2>
            <form action="perfil.php" method="post">
                <label for="email">Email:</label>
                <input type="email" name="emaillogin" id="email" required>
                <label for="senha">Senha:</label>
                <input type="password" name="senhalogin" id="senha" required>
                <button type="submit">Entrar</button>
            </form>
        </div>
    </main>

    <?php include 'footer.php';?>
</body>
</html>