<?php
  // boletim.php
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boletim de Ocorrência</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="medida.css">
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

        <h1>Medida Protetiva</h1>
        <a class="subtitle-link">Como solicitar?</a>

        <div class="steps-wrapper">
            <div class="gradient-box">
                <div class="content-box">
                    <div class="step-number">1</div>
                    <p class="step-text">
                        Vá até uma delegacia, registre um boletim de ocorrência (se preferir registre o boletim via internet) e solicite uma medida protetiva.
                    </p>
                </div>
            </div>

            <div class="gradient-box">
                <div class="content-box">
                    <div class="step-number">2</div>
                    <p class="step-text">
                        Preencha o formulário de solicitação da medida protetiva, detalhando as razões e indicando as medidas necessárias para sua proteção.
                    </p>
                </div>
            </div>

            <div class="gradient-box">
                <div class="content-box">
                    <div class="step-number">3</div>
                    <p class="step-text">
                        O juiz irá avaliar o caso e julgar as medidas necessárias para a proteção da vítima, em até 48hrs.
                    </p>
                </div>
            </div>
        </div>
    </div>

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

      <a href="homepage.php" style="color: white;" >
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
    
  <script>
      function clickCard(card) {
        document.querySelectorAll('.card').forEach(c => c.classList.remove('clicked'));
        card.classList.add('clicked');
      }
      
    function selectNav(element) {
      document.querySelectorAll('.nav-item').forEach(el => el.classList.remove('active'));
      element.classList.add('active');
    }

  </script>

</body>
</html>