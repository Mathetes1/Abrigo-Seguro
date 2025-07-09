<?php
  // PHP pode ser usado aqui no futuro para autenticação, sessão ou dados dinâmicos
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Proteção e Segurança</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link rel="stylesheet" href="homepage.css">
</head>
<body>
  <div class="container">

    <!-- Cabeçalho -->
    <div class="header">
      <div><span>Olá, Rebeca</span></div>
      <div class="right">
        <span class="material-icons">settings</span>
        <div class="avatar">R</div>
      </div>
    </div>

    <!-- Banner -->
    <div class="banner">
      <img src="https://images03.brasildefato.com.br/9d4bf933a0d21b62b2bbcd87452c71ec.jpeg" alt="Conscientização">
    </div>

    <!-- Cartões -->
    <div class="cards">

      <a href="comofunciona.php">
      <div class="card" onclick="clickCard(this)">
        <i class="material-icons" style="color: red;">circle</i>
        <span>Como funciona</span>
      </div>
      </a>

      <a href="medida.php">
      <div class="card" onclick="clickCard(this)">
        <i class="material-icons">gavel</i>
        <span>Medida protetiva</span>
      </div>
      </a>

      <a href="boletim.php">
      <div class="card" onclick="clickCard(this)">
        <i class="material-icons">description</i>
        <span>Boletim de ocorrência</span>
      </div>
      </a>

      <a href="teste.php">
        <div class="card" onclick="clickCard(this)">
          <i class="material-icons">group</i>
          <span>Guardiões</span> 
        </div>
      </a>
    </div>

    <!-- Navegação -->
    <div class="nav">
      <a>
        <div class="nav-item active" onclick="selectNav(this)">
          <i class="material-icons">book</i>
          <span>Boletim</span>
        </div>
      </a>

      <a>
        <div class="nav-item" onclick="selectNav(this)">
          <i class="material-icons">location_on</i>
          <span>Mapa</span>
        </div>
      </a>

      <a>
        <div class="nav-item" onclick="selectNav(this)">
          <i class="material-icons">home</i>
          <span>Home</span>
        </div>
      </a>

      <a>
        <div class="nav-item" onclick="selectNav(this)">
          <i class="material-icons">info</i>
          <span>Informação</span>
        </div>
      </a>

      <a>
        <div class="nav-item" onclick="selectNav(this)">
          <i class="material-icons">history</i>
          <span>Histórico</span>
        </div>
      </a>

    </div>
  </div>

  <script>
    function clickCard(card) {
      document.querySelectorAll('.card').forEach(c => c.classList.remove('clicked'));
      card.classList.add('clicked');
    }

    function selectNav(item) {
      document.querySelectorAll('.nav-item').forEach(el => el.classList.remove('active'));
      item.classList.add('active');
      console.log(`Clicou no ${item.innerText.trim()}`);
    }
  </script>
</body>
</html>
