<?php
interface OrdenacaoStrategy {
  public function ordenar(array $aItens, string $sColuna, string $sModo): array;
}