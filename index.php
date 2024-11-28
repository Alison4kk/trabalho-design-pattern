<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Design Patterns</title>
</head>
<body>
  <div class="container py-5">
    <h1 class="text-center mb-4">Design Patterns</h1>
    <p class="text-center text-muted">Explore exemplos práticos de dois padrões de projeto amplamente utilizados no desenvolvimento de software.</p>
    
    <div class="row g-4">
      <!-- Strategy Pattern -->
      <div class="col-md-6">
        <div class="card shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Padrão Strategy</h5>
            <p class="card-text">O padrão Strategy permite definir uma família de algoritmos, encapsulá-los e torná-los intercambiáveis. Ele facilita a alteração ou adição de comportamentos sem modificar o código do cliente.</p>
            <a href="/strategy" class="btn btn-primary">Ver Exemplo</a>
          </div>
        </div>
      </div>

      <!-- Factory Pattern -->
      <div class="col-md-6">
        <div class="card shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Padrão Factory</h5>
            <p class="card-text">O padrão Factory fornece uma maneira de criar objetos sem especificar a classe exata que será instanciada. Ele promove flexibilidade e reutilização de código.</p>
            <a href="/factory" class="btn btn-primary">Ver Exemplo</a>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
