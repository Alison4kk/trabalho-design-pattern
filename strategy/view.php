<?php

/** @var Usuario[] $aUsuarios*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema - Listagem de Usuários</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
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
    <h1 class="mb-4">Listagem de Usuários</h1>
    <div class="card shadow-sm mb-4">
      <div class="card-body">
        <form action="" method="get">
          <div class="row">
            <div class="col-3">
              <div class="mb-3">
                <label class="form-label">Ordenar Por:</label>
                <select name="ordenar-coluna" class="form-select">
                  <option <?= (isset($_GET['ordenar-coluna']) && $_GET['ordenar-coluna'] == 'id') ? 'selected' : '' ?>
                    value="id">ID</option>
                  <option <?= (isset($_GET['ordenar-coluna']) && $_GET['ordenar-coluna'] == 'nome') ? 'selected' : '' ?>
                    value="nome">Nome</option>
                  <option <?= (isset($_GET['ordenar-coluna']) && $_GET['ordenar-coluna'] == 'email') ? 'selected' : '' ?>
                    value="email">Email</option>
                </select>
              </div>
            </div>
            <div class="col-3">
              <div class="mb-3">
                <label class="form-label">&nbsp;</label>
                <select name="ordenar-modo" class="form-select">
                  <option <?= (isset($_GET['ordenar-modo']) && $_GET['ordenar-modo'] == 'ASC') ? 'selected' : '' ?>
                    value="ASC">Crescente</option>
                  <option <?= (isset($_GET['ordenar-modo']) && $_GET['ordenar-modo'] == 'DESC') ? 'selected' : '' ?>
                    value="DESC">Descrescente</option>
                </select>
              </div>
            </div>
            <div class="col-3">
              <div class="mb-3">
                <label class="form-label">&nbsp;</label>
                <select name="ordenar-estrategia" class="form-select">
                  <option <?= (isset($_GET['ordenar-estrategia']) && $_GET['ordenar-estrategia'] == 'bubblesort') ? 'selected' : '' ?>
                  value="bubblesort">Bubble Sort</option>
                  <option <?= (isset($_GET['ordenar-estrategia']) && $_GET['ordenar-estrategia'] == 'mergesort') ? 'selected' : '' ?>
                    value="mergesort">Merge Sort</option>
                  <option <?= (isset($_GET['ordenar-estrategia']) && $_GET['ordenar-estrategia'] == 'quicksort') ? 'selected' : '' ?>
                  value="quicksort">Quick Sort</option>
                </select>
              </div>
            </div>
            <div class="col-3">
              <div class="mb-3">
                <label class="form-label">&nbsp;</label>
                <div>
                  <button class="btn btn-secondary">Aplicar</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- Card de listagem -->
    <div class="card shadow-sm mb-3">
      <div class="card-header bg-primary text-white"> Usuários Cadastrados </div>
      <div class="card-body">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>Email</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($aUsuarios as $oUsuario): ?>
              <tr>
                <td> <?= $oUsuario->id ?></td>
                <td> <?= $oUsuario->nome ?></td>
                <td> <?= $oUsuario->email ?></td>
                <td>
                  <button class="btn btn-sm btn-warning">Editar</button>
                  <button class="btn btn-sm btn-danger">Excluir</button>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>

        <!-- Card de listagem -->
    <div class="card shadow-sm">
      <div class="card-header bg-primary text-white"> Tempos de Cada Ordenação </div>
      <div class="card-body">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Estrategia</th>
              <th>Tempo em Segundos</th>
            </tr>
          </thead>
          <tbody>
               <tr>
                <td>Estrategia selecionada: (<?= $sOrdenarEstrategia ?>)</td>
                <td> <?= $nTempoSelecionada ?></td>
              </tr>
              <tr>
                <td>Bubble Sort</td>
                <td> <?= $nTempoBubbleSort ?></td>
              </tr>
              <tr>
                <td>Quick Sort</td>
                <td> <?= $nTempoQuickSort ?></td>
              </tr>
              <tr>
                <td>Merge Sort</td>
                <td> <?= $nTempoMergeSort ?></td>
              </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>