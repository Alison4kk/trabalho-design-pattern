<?php

require_once 'OrdenacaoStrategy.php';

class MergeSortOrdenacaoStrategy implements OrdenacaoStrategy {

  public function ordenar(array $itens, string $coluna, string $modo): array {
    if (count($itens) <= 1) {
      return $itens;
    }

    $meio     = intdiv(count($itens), 2);
    $esquerda = array_slice($itens, 0, $meio);
    $direita  = array_slice($itens, $meio);

    return $this->merge(
      $this->ordenar($esquerda, $coluna, $modo),
      $this->ordenar($direita, $coluna, $modo),
      $coluna,
      $modo
    );
  }

  private function merge(array $esquerda, array $direita, string $coluna, string $modo): array {
    $resultado = [];

    while (count($esquerda) > 0 && count($direita) > 0) {
      $valorEsquerda = $esquerda[0]->{$coluna};
      $valorDireita  = $direita[0]->{$coluna};

      if (($modo === 'ASC' && $valorEsquerda <= $valorDireita) ||
        ($modo === 'DESC' && $valorEsquerda >= $valorDireita)) {
        $resultado[] = array_shift($esquerda);
      } else {
        $resultado[] = array_shift($direita);
      }
    }

    return array_merge($resultado, $esquerda, $direita);
  }
}
