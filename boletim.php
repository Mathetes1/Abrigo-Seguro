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
    <link rel="stylesheet" href="boletim.css">
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

        <h1>Boletim de Ocorrência</h1>
        <a class="subtitle-link">Como solicitar?</a>

        <div class="steps-wrapper">
            <div class="gradient-box">
                <div class="content-box">
                    <div class="step-number">1</div>
                    <p class="step-text">
                        Acesse o site da <a href="https://www.delegaciaeletronica.policiacivil.sp.gov.br/ssp-de-cidadao/home" target="blank" class="sit" style="color: white;">Delegacia Virtual</a> do seu estado.
                    </p>
                </div>
            </div>

            <div class="gradient-box">
                <div class="content-box">
                    <div class="step-number">2</div>
                    <p class="step-text">
                        Selecione “Comunicar ocorrência”.
                    </p>
                </div>
            </div>

            <div class="gradient-box">
                <div class="content-box">
                    <div class="step-number">3</div>
                    <p class="step-text">
                        Escolha o tipo de ocorrência disponível.
                    </p>
                </div>
            </div>

            <div class="gradient-box">
                <div class="content-box">
                    <div class="step-number">4</div>
                    <p class="step-text">
                        Informe o ocorrido.
                    </p>
                </div>
            </div>

            <div class="gradient-box">
                <div class="content-box">
                    <div class="step-number">5</div>
                    <p class="step-text">
                        Insira o local, data e hora do acontecimento.
                    </p>
                </div>
            </div>

            <div class="gradient-box">
                <div class="content-box">
                    <div class="step-number">6</div>
                    <p class="step-text">
                        Preencha suas informações pessoais.
                    </p>
                </div>
            </div>

            <div class="gradient-box">
                <div class="content-box">
                    <div class="step-number">7</div>
                    <p class="step-text">
                        Avance no formulário e digite todos os detalhes sobre o que aconteceu.
                    </p>
                </div>
            </div>

            <div class="gradient-box">
                <div class="content-box">
                    <div class="step-number">8</div>
                    <p class="step-text">
                        Mande o boletim para a aprovação.
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