<?php

require_once 'OrdenacaoStrategy.php';

class QuickSortOrdenacaoStrategy implements OrdenacaoStrategy {

  public function ordenar(array $itens, string $coluna, string $modo): array {
    if (count($itens) <= 1) {
      return $itens;
    }

    $pivo    = $itens[0];
    $menores = [];
    $maiores = [];

    foreach (array_slice($itens, 1) as $item) {
      $valorAtual = $item->{$coluna};
      $valorPivo  = $pivo->{$coluna};

      if ($modo === 'ASC') {
        if ($valorAtual <= $valorPivo) {
          $menores[] = $item;
        } else {
          $maiores[] = $item;
        }
      } else {
        if ($valorAtual >= $valorPivo) {
          $menores[] = $item;
        } else {
          $maiores[] = $item;
        }
      }
    }

    return array_merge(
      $this->ordenar($menores, $coluna, $modo),
      [$pivo],
      $this->ordenar($maiores, $coluna, $modo)
    );
  }
}
