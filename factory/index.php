<?php


abstract class FormaGeometricaFactory {
  abstract public function getFormaGeometrica(string $cor, int $tamanho, string $animacao): FormaGeometricaInterface;

  public function htmlFormaGeometrica(string $cor, int $tamanho, string $animacao): string {
    $formaGeometrica = $this->getFormaGeometrica($cor, $tamanho, $animacao);
    return $formaGeometrica->getHtml();
  }
}

interface FormaGeometricaInterface {
  public function getHtml(): string;
}


class QuadradoFactory extends FormaGeometricaFactory {
  public function getFormaGeometrica(string $cor, int $tamanho, string $animacao): FormaGeometricaInterface {
    return new Quadrado($cor, $tamanho, $animacao);
  }
}

class Quadrado implements FormaGeometricaInterface {
  private $cor;
  private $tamanho;
  private $animacao;

  public function __construct(string $cor, int $tamanho, string $animacao) {
    $this->cor = $cor;
    $this->tamanho = $tamanho;
    $this->animacao = $animacao;
  }

  public function getHtml(): string {
    return '<div class="animate__animated animate__infinite ' . $this->animacao . '" style="width: ' . $this->tamanho . 'px; height: ' . $this->tamanho . 'px; background-color: ' . $this->cor . ';"></div>';
  }
}

class CirculoFactory extends FormaGeometricaFactory {
  public function getFormaGeometrica(string $cor, int $tamanho, string $animacao): FormaGeometricaInterface {
    return new Circulo($cor, $tamanho, $animacao);
  }
}

class Circulo implements FormaGeometricaInterface {
  private $cor;
  private $tamanho;
  private $animacao;

  public function __construct(string $cor, int $tamanho, string $animacao) {
    $this->cor = $cor;
    $this->tamanho = $tamanho;
    $this->animacao = $animacao;
  }

  public function getHtml(): string {
    return '<div class="animate__animated animate__infinite ' . $this->animacao . '" style="width: ' . $this->tamanho . 'px; height: ' . $this->tamanho . 'px; background-color: ' . $this->cor . '; border-radius: 50%;"></div>';
  }
}

class TrianguloFactory extends FormaGeometricaFactory {
  public function getFormaGeometrica(string $cor, int $tamanho, string $animacao): FormaGeometricaInterface {
    return new Triangulo($cor, $tamanho, $animacao);
  }
}

class Triangulo implements FormaGeometricaInterface {
  private $cor;
  private $tamanho;
  private $animacao;

  public function __construct(string $cor, int $tamanho, string $animacao) {
    $this->cor = $cor;
    $this->tamanho = $tamanho;
    $this->animacao = $animacao;
  }

  public function getHtml(): string {
    return '<div class="animate__animated animate__infinite ' . $this->animacao . '" style="width: 0; height: 0; border-left: ' . $this->tamanho . 'px solid transparent; border-right: ' . $this->tamanho . 'px solid transparent; border-bottom: ' . ($this->tamanho * 2) . 'px solid ' . $this->cor . ';"></div>';
  }
}

class RetanguloFactory extends FormaGeometricaFactory {
  public function getFormaGeometrica(string $cor, int $tamanho, string $animacao): FormaGeometricaInterface {
    return new Retangulo($cor, $tamanho, $animacao);
  }
}

class Retangulo implements FormaGeometricaInterface {
  private $cor;
  private $tamanho;
  private $animacao;

  public function __construct(string $cor, int $tamanho, string $animacao) {
    $this->cor = $cor;
    $this->tamanho = $tamanho;
    $this->animacao = $animacao;
  }

  public function getHtml(): string {
    return '<div class="animate__animated animate__infinite ' . $this->animacao . '" style="width: ' . ($this->tamanho * 2) . 'px; height: ' . $this->tamanho . 'px; background-color: ' . $this->cor . ';"></div>';
  }
}

class EstrelaFactory extends FormaGeometricaFactory {
  public function getFormaGeometrica(string $cor, int $tamanho, string $animacao): FormaGeometricaInterface {
    return new Estrela($cor, $tamanho, $animacao);
  }
}

class Estrela implements FormaGeometricaInterface {
  private $cor;
  private $tamanho;
  private $animacao;

  public function __construct(string $cor, int $tamanho, string $animacao) {
    $this->cor = $cor;
    $this->tamanho = $tamanho;
    $this->animacao = $animacao;
  }

  public function getHtml(): string {
    $estrela = '<div class="animate__animated animate__infinite ' . $this->animacao . '" style="color: ' . $this->cor . '; font-size: ' . $this->tamanho . 'px;">&#9733;</div>';
    return $estrela;
  }
}

$sTipoForma = $_GET['tipo'] ?? 'quadrado';
$nTamanho   = $_GET['tamanho'] ?? 100;
$sCor       = $_GET['cor'] ?? '#000000';
$sAnimacao  = $_GET['animacao'] ?? '';

$aFormas = [
  'quadrado' => QuadradoFactory::class,
  'circulo'  => CirculoFactory::class,
  'triangulo' => TrianguloFactory::class,
  'retangulo' => RetanguloFactory::class,
  'estrela' => EstrelaFactory::class
];

/**
 * @var FormaGeometricaFactory $oFormaFactory
 */
$oFormaFactory = new $aFormas[$sTipoForma] ?? new QuadradoFactory();
$htmlForma = $oFormaFactory->htmlFormaGeometrica($sCor, $nTamanho, $sAnimacao);

include 'view.php';
