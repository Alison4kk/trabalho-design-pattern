<?php

/** @var Usuario[] $aUsuarios*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema - Gerador de Formas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Sistema</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" href="#">Início</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Usuários</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Configurações</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sair</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Conteúdo Principal -->
  <div class="container py-5">
    <h1 class="mb-4">Gerador de Formas</h1>
    <div class="card shadow-sm mb-4">
      <div class="card-body">
        <form action="" method="get">
          <div class="row">
            <div class="col-3">
              <div class="mb-3">
                <label class="form-label">Tipo:</label>
                <select name="tipo" class="form-select">
                  <option <?= (isset($_GET['tipo']) && $_GET['tipo'] == 'quadrado') ? 'selected' : '' ?> value="quadrado">Quadrado</option>
                  <option <?= (isset($_GET['tipo']) && $_GET['tipo'] == 'circulo') ? 'selected' : '' ?> value="circulo">Circulo</option>
                  <option <?= (isset($_GET['tipo']) && $_GET['tipo'] == 'triangulo') ? 'selected' : '' ?> value="triangulo">Triângulo</option>
                  <option <?= (isset($_GET['tipo']) && $_GET['tipo'] == 'retangulo') ? 'selected' : '' ?> value="retangulo">Retângulo</option>
                  <option <?= (isset($_GET['tipo']) && $_GET['tipo'] == 'estrela') ? 'selected' : '' ?> value="estrela">Estrela</option>
                </select>
              </div>
            </div>
            <div class="col-3">
              <div class="mb-3">
                <label class="form-label">Tamanho:</label>
                <input type="number" name="tamanho" class="form-control" value="<?= $_GET['tamanho'] ?? '100' ?>">
              </div>
            </div>
            <div class="col-3">
              <div class="mb-3">
                <label class="form-label">Cor:</label>
                <input type="color" name="cor" class="form-control" value="<?= $_GET['cor'] ?? '#000000' ?>">
              </div>
            </div>
            <div class="col-3">
              <div class="mb-3">
                <label class="form-label">Animação:</label>
                <select name="animacao" class="form-select">
                  <option value="">Nenhuma</option>
                  <option <?= (isset($_GET['animacao']) && $_GET['animacao'] == 'animate__bounce') ? 'selected' : '' ?> value="animate__bounce">Bounce</option>
                  <option <?= (isset($_GET['animacao']) && $_GET['animacao'] == 'animate__flash') ? 'selected' : '' ?> value="animate__flash">Flash</option>
                  <option <?= (isset($_GET['animacao']) && $_GET['animacao'] == 'animate__pulse') ? 'selected' : '' ?> value="animate__pulse">Pulse</option>
                  <option <?= (isset($_GET['animacao']) && $_GET['animacao'] == 'animate__rubberBand') ? 'selected' : '' ?> value="animate__rubberBand">Rubber Band</option>
                  <option <?= (isset($_GET['animacao']) && $_GET['animacao'] == 'animate__shakeX') ? 'selected' : '' ?> value="animate__shakeX">Shake X</option>
                  <option <?= (isset($_GET['animacao']) && $_GET['animacao'] == 'animate__shakeY') ? 'selected' : '' ?> value="animate__shakeY">Shake Y</option>
                  <option <?= (isset($_GET['animacao']) && $_GET['animacao'] == 'animate__swing') ? 'selected' : '' ?> value="animate__swing">Swing</option>
                  <option <?= (isset($_GET['animacao']) && $_GET['animacao'] == 'animate__tada') ? 'selected' : '' ?> value="animate__tada">Tada</option>
                  <option <?= (isset($_GET['animacao']) && $_GET['animacao'] == 'animate__wobble') ? 'selected' : '' ?> value="animate__wobble">Wobble</option>
                  <option <?= (isset($_GET['animacao']) && $_GET['animacao'] == 'animate__jello') ? 'selected' : '' ?> value="animate__jello">Jello</option>
                  <option <?= (isset($_GET['animacao']) && $_GET['animacao'] == 'animate__heartBeat') ? 'selected' : '' ?> value="animate__heartBeat">Heart Beat</option>
                </select>
              </div>
            </div>
            <div class="col-3">
              <div class="mb-3">
                <label class="form-label">&nbsp;</label>
                <div>
                  <button class="btn btn-secondary">Gerar</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- Card de listagem -->
    <div class="card shadow-sm mb-3">
      <div class="card-header bg-primary text-white"> Forma: </div>
      <div class="card-body p-5">
        <?= $htmlForma?>
      </div>
    </div>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>