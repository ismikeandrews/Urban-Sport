<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoProduto extends Model
{
    protected $table = 'Pedido_Produtos';

    public function produtoPedido () {
        return $this->hasMany(Produto::class, 'produto_id', 'id');
    }

    public function Pedido () {
        return $this->hasOne(Pedido::class, 'id', 'pedido_id');
    }

    
}
