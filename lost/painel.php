<?php
require "conecta.php";

$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_animal = $_POST["nome_animal"];
    $especie = $_POST["especie"];
    $cor = $_POST["cor"];
    $porte = $_POST["porte"];
    $descricao = $_POST["descricao"];
    $contato = $_POST["contato"];

    $sql = "INSERT INTO cadastro_animal (nome_do_animal, especie, cor, porte, observacao, informacoes_de_contato) 
            VALUES ('$nome_animal', '$especie', '$cor', '$porte', '$descricao', '$contato')";

    if ($conn->query($sql) === TRUE) {
    
        header("Location: animal_cadastrado.php");
        exit();
    } else {
        $mensagem = "Erro ao cadastrar animal: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animais Perdidos</title>
    <link rel="stylesheet" href="assets/css/painel.css">
    <script defer src="assets/js/app.js"></script>
</head>
<body>
    <header>
        <img class="img-dog-header" src="assets/img/header-dog.png" alt="header-dog">
        <p class="header-slogan">#salvando corações</p>
        <img class="header-logo" src="assets/img/logo2.png" alt="logo">
        <a href="login.php" class="btn-1">Entrar/cadastrar</a>
        <img class="img-dog-header-2" src="assets/img/header-dog-1.png" alt="header-dog-1">
    </header>
    <div class="nav-bar">
        <nav class="nav">
            <button class="hamburger"></button>
            <ul class="nav-list">
                <li><a href="index.php">Página inicial</a></li>
                <li><a href="painel.php">Animais Perdidos/Encontrados</a></li>
            </ul>
        </nav>
    </div>
    <h1 class="titulos">Cadastro de Animais Perdidos</h1>

    <?php echo $mensagem; ?>

    <form action="" method="post" class="cadastro-formulario">
        <label for="nome_animal" class="cadastro-label">Nome do Animal:</label>
        <input type="text" id="nome_animal" name="nome_animal" required class="cadastro-input">
        <br>

        <label for="especie" class="cadastro-label">Espécie:</label>
        <select id="especie" name="especie" required class="cadastro-select">
            <option value="cachorro">Cachorro</option>
            <option value="gato">Gato</option>
            <option value="ave">Ave</option>
            <option value="outro">Outro</option>
        </select>
        <br>

        <label for="cor" class="cadastro-label">Cor:</label>
        <input type="text" id="cor" name="cor" required class="cadastro-input">
        <br>

        <label class="cadastro-label">Porte:</label>
        <input type="radio" id="pequeno" name="porte" value="pequeno" required class="cadastro-radio">
        <label for="pequeno" class="cadastro-label-radio">Pequeno</label>
        <input type="radio" id="medio" name="porte" value="medio" class="cadastro-radio">
        <label for="medio" class="cadastro-label-radio">Médio</label>
        <input type="radio" id="grande" name="porte" value="grande" class="cadastro-radio">
        <label for="grande" class="cadastro-label-radio">Grande</label>
        <br>

        <label for="descricao" class="cadastro-label">Observação:</label>
        <textarea id="descricao" name="descricao" rows="4" cols="50" required class="cadastro-textarea"></textarea>
        <br>

        <label for="contato" class="cadastro-label">Informações de Contato:</label>
        <input type="text" id="contato" name="contato" required class="cadastro-input">
        <br>

        <div class="botoes-cadastro">
            <input type="submit" value="Cadastrar" class="cadastro-botao">
            <button onclick="window.location.href='index.php'" class="cadastro-botao-voltar">Voltar para a página inicial</button>
        </div>
    </form>
</body>
</html>
