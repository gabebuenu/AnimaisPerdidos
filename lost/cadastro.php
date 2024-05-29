<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="main-login">
        <div class="left-login">
            <img src="assets/img/slogan-img.png" class="left-login-image" alt="Cachorro">
        </div>
        <div class="right-login">
            <div class="card-login">
                <h1>Novo Cadastro</h1>
                <?php
                require "conecta.php";

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $nome_usuario = $_POST['username'];
                    $senha = $_POST['senha'];
                    $confirmar_senha = $_POST['confirmarSenha'];
                    $email = $_POST['email'];

                    
                    if ($senha != $confirmar_senha) {
                        echo "As senhas não coincidem.";
                    } else {
                        

                        $sql = "INSERT INTO usuarios (nome_usuario, senha, confirmar_senha, email) VALUES ('$nome_usuario', '$senha', '$confirmar_senha', '$email')";

                        if ($conn->query($sql) === TRUE) {
                            
                            header("Location: cadastrado.php");
                            exit(); 
                        } else {
                            echo "Erro no cadastro: " . $conn->error;
                        }
                    }
                }
                ?>
                <form action="" method="post">
                    <div class="input-group">
                        <input class="input" required type="text" id="username" name="username">
                        <label class="label" for="username">Usuário:</label>
                    </div>
                    <div class="input-group">
                        <input class="input" required type="password" id="senha" name="senha">
                        <label class="label" for="senha">Senha:</label>
                    </div>
                    <div class="input-group">
                        <input class="input" required type="password" id="confirmarSenha" name="confirmarSenha">
                        <label class="label" for="confirmarSenha">Confirmar senha:</label>
                    </div>
                    <div class="input-group">
                        <input class="input" required type="text" id="email" name="email">
                        <label class="label" for="email">Email:</label>
                    </div>
                    <button type="submit" class="btn-cadastrar" >Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
