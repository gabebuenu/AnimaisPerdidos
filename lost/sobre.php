<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animais Perdidos</title>
    <link rel="stylesheet" href="assets/css/sobre.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;800&family=Quicksand:wght@700&display=swap">
    <script defer src="assets/js/app.js"></script>
</head>
<style>@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;800&family=Quicksand:wght@700&display=swap');

    * {
        margin: 0;
        padding: 0;
    }
    
    body {
        background-color: #00c2da;
    }
    
    header {
        position: relative;
        width: 100%;
        height: 12vh;
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        background-color: #f9f5f5;
        text-align: center;
        font-family: 'Montserrat', sans-serif;
    }
    
    .img-dog-header {
        position: absolute;
        left: 0;
        max-width: 70px;
        bottom: 0;
    }
    
    .header-slogan {
        color: #a2a1a1;
        font-weight: 600;
        max-width: 100px;
        font-size: 17px;
    }
    
    .header-logo {
        max-width: 170px;
    }
    
    .btn-1 {
        display: inline-block;
        padding: 12px 24px;
        font-size: 16px;
        text-align: center;
        text-decoration: none;
        cursor: pointer;
        border-radius: 20px;
        transition: background-color 0.3s ease, color 0.3s ease;
        background-color: #00c2da; 
        color: #fff; 
        transition: 1s;
    }
    
    .btn-1:hover {
        transform: scale(0.9);
        background-color: #02abc1; 
        color: #fff
    }
    
    
    .img-dog-header-2 {
        position: absolute;
        right: 0;
        max-width: 70px;
        bottom: 0;
    }
    
    a {
        font-family: sans-serif;
        text-decoration: none;
      }
      
      .nav-bar {
        background: #7d34ba;
        padding-inline: 16px;
        height: 5vh;
        display: flex;
        align-items: center;
        justify-content: center;
      }
      
      .logo {
        font-size: 48px;
      }
      
      .nav-list {
        display: flex;
        gap: 70px;
        list-style: none;
      }
      
      .nav-list a {
        font-size: 14px;
        color: #fff;
        padding-block: 30px;
      }
      
      .hero {
        height: calc(100vh - 70px);
        background: center / cover no-repeat url("./bg.jpg");
      }
      
      .hamburger {
        display: none;
        border: none;
        background: none;
        border-top: 3px solid #fff;
        cursor: pointer;
      }
      
      .hamburger::after,
      .hamburger::before {
        content: " ";
        display: block;
        width: 30px;
        height: 3px;
        background: #fff;
        margin-top: 5px;
        position: relative;
        transition: 0.3s;
      }
      
      @media (max-width: 1000px) {
        .hamburger {
          display: block;
          z-index: 1;
        }
    
        .btn-1 {
            font-size: 11px;
        }
    
        .header-slogan {
            display: none;
        }
    
        .img-dog-header, .img-dog-header-2 {
            display: none;
        }
      
        .nav-list {
          position: fixed;
          top: 0;
          left: 0;
          width: 100vw;
          height: 100vh;
          background: #7d34ba;
          clip-path: circle(100px at 90% -15%);
          transition: 1s ease-out;
          flex-direction: column;
          justify-content: space-around;
          align-items: center;
          gap: 0;
      
          pointer-events: none;
        }
      
        .nav-list a {
          font-size: 18px;
          opacity: 0;
        }
      
        .nav-list li:nth-child(1) a {
          transition: 0.5s 0.2s;
        }
      
        .nav-list li:nth-child(2) a {
          transition: 0.5s 0.4s;
        }
      
        .nav-list li:nth-child(3) a {
          transition: 0.5s 0.6s;
        }
      
        /* Estilos ativos */
      
        .nav.active .nav-list {
          clip-path: circle(1500px at 90% -15%);
          pointer-events: all;
        }
      
        .nav.active .nav-list a {
          opacity: 1;
        }
      
        .nav.active .hamburger {
          position: fixed;
          top: 26px;
          right: 16px;
          border-top-color: transparent;
        }
      
        .nav.active .hamburger::before {
          transform: rotate(135deg);
        }
      
        .nav.active .hamburger::after {
          transform: rotate(-135deg);
          top: -7px;
        }
    
      }</style>
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
              <li><a href="sobre.php">Sobre Nós</a></li>
            </ul>
          </nav>
    </div>
    <div class="content">
        <h1>Sobre Nós: Animais Perdidos</h1>
        <p>Seja bem-vindo ao Animais Perdidos, um projeto desenvolvido por alunos do curso de Análise e Desenvolvimento de Sistemas da Universidade de Marília (Unimar). Nosso time é composto por Bruno Bueno da Silva, Gabriel Bueno da Silva e Lucas Lima, entusiastas da tecnologia e amantes de animais.</p>

        <h2>Nossa Missão:</h2>
        <p>Nosso principal objetivo é auxiliar aqueles que perderam seus queridos pets. Entendemos o vínculo especial que existe entre tutores e seus animais de estimação, e estamos comprometidos em facilitar a busca por esses membros peludos da família.</p>

        <h2>O Projeto:</h2>
        <p>Iniciamos este projeto em Marília-SP, com a orientação e inspiração do nosso professor. A ideia surgiu a partir de um briefing que nos desafiou a aplicar nossos conhecimentos em desenvolvimento de sistemas para criar uma solução significativa e de impacto positivo na comunidade.</p>

        <h2>Animais Perdidos:</h2>
        <p>Nosso site é uma plataforma dedicada a ajudar na localização de animais perdidos. Conscientes da dor que a perda de um pet pode causar, buscamos proporcionar um espaço onde tutores possam cadastrar informações sobre seus animais desaparecidos e, ao mesmo tempo, possibilitar que aqueles que encontraram um pet perdido entrem em contato para facilitar a reunificação.</p>

        <h2>Compromisso com a Comunidade:</h2>
        <p>Estamos cientes da importância dos animais de estimação em nossas vidas e acreditamos que, ao unir esforços, podemos contribuir para o bem-estar de muitas famílias. O Animais Perdidos é mais do que um projeto acadêmico; é um compromisso com a comunidade, um gesto de solidariedade e empatia para tornar mais fácil o reencontro entre tutores e seus amados pets.</p>

        <h2><a href="contato.html">Contate-nos:</a></h2>
        <p>Se você perdeu seu petzinho ou encontrou um animal perdido, não hesite em utilizar nosso site. Estamos aqui para ajudar a reunir famílias e animais queridos. Juntos, construímos uma comunidade mais forte e compassiva.</p>

        <p>O Animais Perdidos, feito com carinho por Bruno Bueno da Silva, Gabriel Bueno da Silva e Lucas Lima, alunos da Unimar (ADS).</p>
    </div>
</body>
</html>
