<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/contato.css">
    <title>Contato</title>
</head>
<body>
    <div class="main-login">
        <div class="left-login">
            <img src="assets/img/slogan-img.png" class="left-login-image" alt="Cachorro">
        </div>
        <div class="right-login">
            <div class="card-login">
                <h2 class="titulo-contato" >Entre em contato conosto</h2>

                <?php
                require "conecta.php";

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $nome = $_POST["nome"];
                    $telefone = $_POST["telefone"];
                    $email = $_POST["email"];
                    $mensagem = $_POST["mensagem"];

                    $sql = "INSERT INTO contato (nome, telefone, email, mensagem) VALUES ('$nome', '$telefone', '$email', '$mensagem')";

                    if ($conn->query($sql) === TRUE) {
                        // Redireciona para contatoregis.php após o envio bem-sucedido
                        header("Location: contatoregis.php");
                        exit();
                    } else {
                        echo "Erro ao inserir registro: " . $conn->error;
                    }
                }

                $conn->close();
                ?>

                <form action="" method="post">
                    <div class="input-group">
                        <label for="nome" class="label">Nome:</label>
                        <input type="text" id="nome" name="nome" required class="input">
                        <br>
                    </div>
                    <div class="input-group">
                        <label for="telefone" class="label">Telefone:</label>
                        <input type="number" id="telefone" name="telefone" required class="input">
                        <br>
                    </div>
                    <div class="input-group">
                        <label for="email" class="label">Email:</label>
                        <input type="email" id="email" name="email" required class="input">
                        <br>
                    </div>
                    <div class="input-group">
                        <label for="mensagem" class="label">Mensagem:</label>
                        <textarea id="mensagem" name="mensagem" rows="4" cols="55" required class="textarea"></textarea>
                        <br>
                    </div>
                    <button type="submit" class="btn-cadastrar">Entrar em contato</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
