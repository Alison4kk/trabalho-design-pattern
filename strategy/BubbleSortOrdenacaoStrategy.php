<?php

require_once 'OrdenacaoStrategy.php';


class BubbleSortOrdenacaoStrategy implements OrdenacaoStrategy {

  public function ordenar(array $aItens, string $sColuna, string $sModo): array {
    $n = count($aItens);

    for ($i = 0; $i < $n - 1; $i++) {
      for ($j = 0; $j < $n - $i - 1; $j++) {
        // Obtém os valores da propriedade
        $valorAtual   = $aItens[$j]->{$sColuna};
        $valorProximo = $aItens[$j + 1]->{$sColuna};

        // Comparação
        $trocar = ($sModo === 'ASC')
          ? $valorAtual > $valorProximo
          : $valorAtual < $valorProximo;

        if ($trocar) {
          // Troca os itens
          $temp           = $aItens[$j];
          $aItens[$j]     = $aItens[$j + 1];
          $aItens[$j + 1] = $temp;
        }
      }
    }

    return $aItens;
  }
}
