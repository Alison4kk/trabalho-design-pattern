<?php

require_once 'BubbleSortOrdenacaoStrategy.php';
require_once 'QuickSortOrdenacaoStrategy.php';
require_once 'MergeSortOrdenacaoStrategy.php';

class Sorteador {

  public ?float $ultimoTempo = null;

  public function __construct(
    public array $aItens, public string $sColuna, public string $sModo, public string $sEstrategia
  ) {
  }


  public function setEstrategia(string $sEstrategia) {
    $this->sEstrategia = $sEstrategia;
    return $this;
  }

  protected function getEstrategiaInstanciada(): OrdenacaoStrategy {

    switch ($this->sEstrategia) {
      case 'bubblesort':
        return new BubbleSortOrdenacaoStrategy();

      case 'quicksort':
        return new QuickSortOrdenacaoStrategy();
      
      case 'mergesort': 
        return new MergeSortOrdenacaoStrategy();

      default:
        return new BubbleSortOrdenacaoStrategy();
    }
  }

  public function sortear() {

    $nInicio           = microtime(true);
    $aItens            = $this->getEstrategiaInstanciada()->ordenar($this->aItens, $this->sColuna, $this->sModo);
    $nFim              = microtime(true);
    $this->ultimoTempo = $nFim - $nInicio;

    return $aItens;
  }
}
