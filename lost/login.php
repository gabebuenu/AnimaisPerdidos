<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="main-login">
        <div class="left-login">
            <img src="assets/img/slogan-img.png" class="left-login-image" alt="Cachorro">
        </div>
        <div class="right-login">
            <div class="card-login">
                <h1>Faça o login ou cadastre-se</h1>

                <?php

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    
                    require_once("conecta.php");

                    
                    $nome_usuario = $_POST["username"];
                    $senha_ani = $_POST["senha"];

                    
                    $sql = "SELECT * FROM login_usuario WHERE nome_usuario = '$nome_usuario' AND senha_ani = '$senha_ani'";
                    
                    
                    $result = mysqli_query($conn, $sql);

                    
                    if (mysqli_num_rows($result) > 0) {
                        
                        header("Location: logado.php");
                        exit();
                    } else {
                        echo "Usuário ou senha inválidos.";
                    }

                    
                    mysqli_close($conn);
                }
                ?>

                <form method="post" action="">
                    <div class="input-group">
                        <input class="input" required type="text" id="username" name="username">
                        <label class="label" for="username">Usuário</label>
                    </div>
                    <div class="input-group">
                        <input class="input" required type="password" id="senha" name="senha">
                        <label class="label" for="senha">Senha</label>
                    </div>
                    <button type="submit" class="btn-login">Entrar</button>
                </form>

                <a href="cadastro.php"><button class="btn-cadastro">Cadastre-se</button></a>
            </div>
        </div>
    </div>
</body>
</html>
