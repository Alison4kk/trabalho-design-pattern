# Estudo Design Patterns


## Introdução

Este repositorio tem como objetivo aplicar estudos sobre Design Patterns com exemplos práticos. Foi feito para um trabalho da Faculdade, materia Linquagens de Programação e Paradigmas, curso de Sistemas da Informação.


## Como instalar

Requisitos: PHP 7.0+.

1. Clone o repositório
2. Execute o comando `php -S localhost:8000` na pasta raiz do projeto
3. Acesse `http://localhost:8000` no seu navegador

## Design Patterns aplicados:

Foram aplicados para esse estudo, o padrão Strategy e Factory Method.

Na tela inicial do app é possivel escolher entre os dois padrões, e cada um tem um exemplo prático de como é aplicado.

![alt](https://i.imgur.com/JpaVxbs.png)

### Strategy

O padrão Strategy é um padrão de projeto de software que permite que um algoritmo seja selecionado em tempo de execução. O padrão Strategy define uma família de algoritmos, encapsula cada um deles e os torna intercambiáveis. A estratégia permite que o algoritmo varie independentemente dos clientes que o utilizam.

O exemplo de codigo esta na pasta /strategy.

No exemplo há uma listagem de usuarios, onde é possivel escolher a ordenação e tambem a sua estratégia.

![alt](https://i.imgur.com/Mp08njN.png)

Dependendo da estratégia escolhida, a lista de usuarios é ordenada de acordo, usando o padrão Strategy.

```php
$oSorteador = new Sorteador(
  aItens: $aUsuarios,
  sColuna: $sOrdenarCampo,
  sModo: $sOrdenarModo,
  sEstrategia: $sOrdenarEstrategia
);

$aUsuarios = $oSorteador->sortear();

$oSorteador->setEstrategia('bubblesort')->sortear();

$oSorteador->setEstrategia('quicksort')->sortear();

$oSorteador->setEstrategia('mergesort')->sortear();
```

### Factory Method

O padrão Factory Method é um padrão de projeto de software que define uma interface para criar um objeto, mas permite que as subclasses alterem o tipo de objetos que serão criados. O Factory Method permite que uma classe delegue a responsabilidade de instanciar uma classe para suas subclasses.

O exemplo de codigo esta na pasta /factory

No exemplo há campos para configurar uma forma geometrica, e ao clicar em criar, é gerado um objeto de acordo com a forma escolhida.

![alt](https://i.imgur.com/3rcK6TI.png)

```php

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


```
