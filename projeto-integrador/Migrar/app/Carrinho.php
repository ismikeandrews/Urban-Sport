<?php

namespace App;

class Carrinho
{
  public $itens = null;
  public $quantidade = 0;
  public $precoTotal = 0;

  public function __construct($oldCart) {
    if ($oldCart) {
      $this->itens = $oldCart->itens;
      $this->quantidade = $oldCart->quantidade;
      $this->precoTotal = $oldCart->precoTotal;
    }
  }

  public function add($item, $id){
    $salvarItem = ['quantidade' => 0, 'valor' => $item->valor, 'item' => $item];
    if ($this->itens) {
      if (array_key_exists($id, $this->itens)) {
        $salvarItem = $this->itens[$id];
      }
    }
    $salvarItem['quantidade']++;
    $salvarItem['valor'] = $item->valor * $salvarItem['quantidade'];
    $this->itens[$id] = $salvarItem;
    $this->quantidade++;
    $this->precoTotal += $item->valor;
  }

}
