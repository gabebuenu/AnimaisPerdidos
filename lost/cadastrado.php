<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrado</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap">
    <style>
        body {
            margin: 0;
            overflow: hidden;
            font-family: 'Open Sans', sans-serif;
        }

        #background-image {
            width: 100%;
            height: 100vh;
            object-fit: cover;
            position: fixed;
            top: 0;
            left: 0;
            z-index: -1;
        }

        #content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            color: white;
            text-align: center;
            z-index: 1;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
        }

        #login-text {
            font-size: 2em;
            margin-bottom: 20px;
        }

        #home-button {
            padding: 15px 25px;
            font-size: 1.2em;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        #home-button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <img id="background-image" src="assets/img/1482066500b9bac0fff.jpeg" alt="cadastrado">

    <div id="content">
        <div id="login-text">Cadastrado</div>
        <a href="index.php" id="home-button">Home</a>
    </div>
</body>
</html>
